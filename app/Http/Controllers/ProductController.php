<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        abort_if(
            !$product->exists(),
            404
        );

        return view('product', ['product' => $product]);
    }
}
