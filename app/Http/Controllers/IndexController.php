<?php

namespace App\Http\Controllers;

use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('index', ['products' => Product::paginate(5)]);
    }
}
