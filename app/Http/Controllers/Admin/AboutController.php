<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::query()->first(['id','text']);
        return view('admin.pages.about.edit',[
            'about' => $about
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $formAttribute = $request->validate([
            'text' => 'required'
        ]);

        $about = About::query()->find($id);

        $about->update($formAttribute);

        return Redirect::back()->with('success','Başarıyla Güncellendi');
    }
}
