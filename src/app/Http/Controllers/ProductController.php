<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('register', compact('products'));
    }


    


    public function store(Request $request)
    {
        $product = $request->only(['name', 'price', 'image', 'season_id', 'description']);
        Product::create($product);

        return redirect('/products');
    }

    

    public function imagePost(Request $request)
    {
        $file = $request->file('image');
        $file_path = $file->store('public/products');
        Session::put('img_path', str_replace('public', 'storage', 'products', $file_path));
        return redirect('/products');
    }


    /*public function edit(Request $request)
    {
        
        $product = Product::find($request->id);
        return view('{productld}', ['product'=>$product]);
    }*/


    

    /*public function store(Request $request)
    {
        $image = $request -> file('image')->store('public/image');

        $image  = str_replace('public/image/', '', $image);

        $image = new Image;
        $image->file = $image;

        $image->save();
    }

    public function index(){
        $image = Image::all;
        return view('/products', compact('image'));
    }*/
    
}
