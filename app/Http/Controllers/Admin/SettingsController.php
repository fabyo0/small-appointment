<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Settings::first();
        return view('admin.pages.settings.index', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting = Settings::query()->find($id);

        $setting->phone = $request->phone;
        $setting->catalog = $request->catalog;
        $setting->phone_other = $request->phone_other;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->instagram = $request->instagram;

        $update = $setting->update();

        if ($update) {
            return redirect()->route('settings.index')->with('success', 'Başarıyla Güncellendi');
        }
        return back()->with('error', 'Güncellenirken Hata Oluştu');
    }
}
