<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articles = Article::query()->with('category')
            ->orderByDesc('created_at')
            ->get();

        return view('admin.pages.articles.index', [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ArticleCategory::all('id', 'name');

        return view('admin.pages.articles.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request)
    {
        $article = new Article();

        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->body = $request->input('body');
        $article->category_id = $request->input('category_id');

        $article->slug = Str::slug($request->input('slug'));

        if (!is_null($request->file('image'))) {
            $filePath = 'articles' . $article->id;
            $article->image = $request->file('image')->store($filePath, 'public');
        }

        $articleStore = $article->save();

        if ($articleStore) {
            return Redirect::route('article.index')->with('success', 'Makale başarıyla oluşturuldu.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::query()->with('category')
            ->find($id)
            ->firstOrFail();

        $categories = ArticleCategory::all('id', 'name');

        return view('admin.pages.articles.edit', [
            'article' => $article,
            'categories' => $categories

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::query()->find($id);

        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->body = $request->input('body');
        $article->category_id = $request->input('category_id');

        $article->slug = Str::slug($request->input('slug'));

        if (!is_null($request->file('image'))) {
            $filePath = 'articles' . $article->id;
            $article->image = $request->file('image')->store($filePath, 'public');
        }

        $articleStore = $article->update();

        if ($articleStore) {
            return Redirect::route('article.index')->with('success', 'Makale başarıyla güncellendi.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::query()->find($id);
        $article->delete();

        return Redirect::route('article.index')->with('success', 'Makale başarıyla silindi.');

    }
}
