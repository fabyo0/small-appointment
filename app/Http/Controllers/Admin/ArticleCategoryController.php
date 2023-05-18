<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticleCategoryStoreRequest;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $categories = ArticleCategory::all();

        return view('admin.pages.articleCategories.index',[
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ArticleCategory $categories)
    {
        return view('admin.pages.articleCategories.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleCategoryStoreRequest $request)
    {
        $category = new ArticleCategory();

        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('slug'));
        $category->description = $request->input('description');

        if (!is_null($request->file('image'))) {
            $filePath = 'categories' . $category->id;
            $category->image = $request->file('image')->store($filePath, 'public');
        }

        $categoryStore = $category->save();

        if ($categoryStore) {
            return Redirect::route('category.index')->with('success', 'Kategori başarıyla oluşturuldu.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $category = ArticleCategory::query()->find($id);

      return view('admin.pages.articleCategories.edit',[
          'category' => $category
      ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = ArticleCategory::query()->find($id);

        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('slug'));
        $category->description = $request->input('description');

        if (!is_null($request->file('image'))) {
            $filePath = 'categories' . $category->id;
            $category->image = $request->file('image')->store($filePath, 'public');
        }

        $categoryStore = $category->update();

        if ($categoryStore) {
            return Redirect::route('category.index')->with('success', 'Kategori başarıyla güncellendi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = ArticleCategory::query()->find($id);

        $category->delete();

        return Redirect::route('category.index')->with('success', 'Kategori başarıyla silindi.');

    }
}
