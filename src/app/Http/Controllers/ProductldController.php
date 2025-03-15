<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductldController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('{productld}', compact('products'));
    }

    /*public function edit(Request $request)
    {

        $product = Product::find($request->id);
        return view('{productld}', ['product' => $product]);
    }*/
}
