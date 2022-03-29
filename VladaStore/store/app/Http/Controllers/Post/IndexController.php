<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('product.index', compact('products'));
    }
}
