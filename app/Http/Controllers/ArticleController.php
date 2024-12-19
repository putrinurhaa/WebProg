<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $search = '';
        if ($request->has('search')) {
            $search = $request->search;
            $articles = Article::where('title', 'like', "%$search%")->paginate(6);
        } else {
            $articles = Article::paginate(6);
        }
        return view('articles.index', compact('articles', 'search'));
    }

    public function detail($id)
    {
        $article = Article::find($id);
        return view('articles.detail', compact('article'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        Storage::putFileAs('public/products', $image, $imageName);
        $imagePath = 'storage/products/' . $imageName;

        Article::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Article created successfully');
    }
}
