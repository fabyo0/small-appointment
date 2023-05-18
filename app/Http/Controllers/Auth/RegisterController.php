<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $formValidate = $request->validate([
            'email' => 'required|email|max:255|unique:users,email',
            'name' => 'required|max:30',
            "password" => ["required", Password::min(5)->symbols()
                ->mixedCase()->letters()->numbers()]
        ]);

        $user = User::create($formValidate);

        auth()->login($user);
        return Redirect::route('dashboard.index')->with('success', 'Hesabınız başarıyla oluşturulmuştur.');
    }
}
