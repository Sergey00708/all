<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store()
    {
        $product = request()->validate([
            'photo' => 'string',
            'about' => 'string',
            'price' => 'integer',
        ]);

        product::create($product);
        return redirect()->route('product.index');
    }

    public function show(product $product)
    {
        return view('product.show', compact('product'));

    }

    public function edit(product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(product $product)
    {
        $update = request()->validate([
            'photo' => 'string',
            'about' => 'string',
            'price' => 'integer',
        ]);

        $product->update($update);
        return redirect()->route('product.show', $product->id);
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
