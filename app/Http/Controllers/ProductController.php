<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = '';
        if ($request->has('search')) {
            $search = $request->search;
            $products = Product::where('title', 'like', "%$search%")->paginate(6);
        } else {
            $products = Product::paginate(8);
        }
        return view('products.index', compact('products', 'search'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('products.detail', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'exp_date' => 'nullable|date|after:today',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        Storage::putFileAs('public/products', $image, $imageName);
        $imagePath = 'storage/products/' . $imageName;

        Product::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'exp_date' => $request->exp_date,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Product created successfully');
    }
}
