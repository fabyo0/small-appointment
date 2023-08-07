<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->orderByDesc('created_at')->get();

        return view('admin.pages.users.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        return view('admin.pages.users.create', [
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $userData = $request->except('_token');
        $userData['status'] = (int)$request->has('status') ? 1 : 0;

        if (!is_null($request->file('image'))) {
            $filePath = 'users' . uniqid();
            $userData['image'] = $request->file('image')->store($filePath, 'public');
        }

        User::create($userData);

        return Redirect::route('users.index')->with('success', 'Kullanıcı başarıyla oluşturuldu.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::query()->find($id);

        return view('admin.pages.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        $userData = User::query()->find($id);

        $userData['status'] = isset($userData['status']) ? 1 : 0;

        if (!is_null($request->file('image'))) {
            $filePath = 'users' . uniqid();
            $userData['image'] = $request->file('image')->store($filePath, 'public');
        }

        $userData->update($request->all());

        return Redirect::route('users.index')->with('success', 'Kullanıcı başarıyla güncelleme.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::query()->find($id);
        $user->delete();

        return Redirect::route('users.index')->with('success', 'Kullanıcı başarıyla silindi.');
    }

    public function changeStatus(Request $request)
    {
        $user = User::query()->where('id', $request->input('userID'))->first();

        if ($user) {
            $user->status = $user->status ? 0 : 1;
            $user->save();
        }

        return response()
            ->json([
                'status' => "success",
                "message" => "Başarılı",
                "data" => $user,
                "user_status" => $user->status
            ])
            ->setStatusCode(200);
    }

    public function changeRole(Request $request)
    {
        $user = User::query()->where('id', $request->id)->first();

        if ($user) {
            $user->is_admin = $user->is_admin ? 0 : 1;
            $user->save();
        }

        return response()
            ->json([
                'is_admin' => "success",
                "message" => "Başarılı",
                "data" => $user,
                "user_is_admin" => $user->is_admin
            ])
            ->setStatusCode(200);

    }

}
