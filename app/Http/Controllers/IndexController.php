<?php

namespace App\Http\Controllers;

use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::all();

        return view('index', ['products' => $products]);
    }
}
