<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        //Gestiamo prima l'immagine


        $path_image = '';
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->storePublicly();
        }
        //Poi salviamo tutto

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $path_image,
        ]);
        return to_route('product.index');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
