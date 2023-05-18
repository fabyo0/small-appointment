<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceStoreRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all('id', 'title', 'image');

        return view('admin.pages.services.index', [
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.services.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request)
    {
        $service = new Service();
        $service->title = $request->input('title');

        if (!is_null($request->file('image'))) {
            $filePath = 'servies' . $service->id;
            $service->image = $request->file('image')->store($filePath, 'public');
        }

        $service->save();

        return Redirect::route('service.index')->with('success', 'Servis Başarıyla Oluşturuldu');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::query()->find($id);

        return view('admin.pages.services.edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::query()->find($id);

        $service->title = $request->input('title');

        if ($request->hasFile('image')) {
            $fileName = 'services/' . $service->id;
            $service->image = $request->file('image')->store($fileName, 'public');
            $service->save();
        }

        $service->update();

        return Redirect::route('service.index')->with('success', 'Servis Başarıyla Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::where('id', $id)->first();
        $service->delete();
        return Redirect::route('service.index')->with('success', 'Servis Başarıyla Silindi');
    }

    private function imageUpload(Request $request, string $imageName, string|null $oldImagePath): string
    {
        $imageFile = $request->file($imageName);
        $orginalName = $imageFile->getClientOriginalName();
        $orginalExtensionName = $imageFile->getClientOriginalExtension();
        $explodeName = explode('.', $imageFile)[0];
        $fileName = Str::slug($explodeName) . "." . $orginalExtensionName;

        $folder = "services";
        $publicPath = "storage/" . $folder;

        // TODO: Dosya mevcutsa silinecek
        File::delete(public_path($oldImagePath) ?? '');

        $imageFile->storeAs($folder, $fileName);

        return $publicPath . '/' . $fileName;
    }

}
