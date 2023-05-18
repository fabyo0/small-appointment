<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DoctorStoreRequest;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::query()->orderByDesc('created_at')->get();

        return view('admin.pages.doctors.index', [
            'doctors' => $doctors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorStoreRequest $request)
    {
        $doctor = new Doctor();

        $doctor->title = $request->input('title');
        $doctor->profession = $request->input('profession');
        $doctor->about = $request->input('about');

        if (!is_null($request->file('image'))) {
            $filePath = 'doctors' . $doctor->id;
            $doctor->image = $request->file('image')->store($filePath, 'public');
        }

        $doctorStore = $doctor->save();

        if ($doctorStore) {
            return Redirect::route('doctors.index')->with('success', 'Çalışan başarıyla oluşturuldu.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::query()->find($id);

        return view('admin.pages.doctors.edit',[
            'doctor' => $doctor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $doctor = Doctor::query()->find($id);

        $doctor->title = $request->input('title');
        $doctor->profession = $request->input('profession');
        $doctor->about = $request->input('about');

        if (!is_null($request->file('image'))) {
            $filePath = 'doctors' . $doctor->id;
            $doctor->image = $request->file('image')->store($filePath, 'public');
        }

        $doctorStore = $doctor->update();

        if ($doctorStore) {
            return Redirect::route('doctors.index')->with('success', 'Çalışan başarıyla güncellendi.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::query()->find($id);
        $doctor->delete();

        return Redirect::back()->with('success','Personel başarıyla silindi.');
    }
}
