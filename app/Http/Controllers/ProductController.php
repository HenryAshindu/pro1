<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        $products= Product::all();
        return view('Products.homeproduct', ['products'=>$products]);
    }

    public function create(){
        return view('Products.createproduct');
    }

    public function store(Request $request){
        $data= $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required'
        ]);

        $newProduct = Product::create($data);
        return redirect(route('home.index'));
    }

    public function edit(Product $product){
        return view('Products.editproduct', ['product'=>$product]);
    }

    public function update(Product $product, Request $request){
        $data= $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required'
        ]);

        $product->update($data);
        return redirect(route('home.index'));
    }

    public function delete(Product $product){
        $product->delete();
        return redirect(route('home.index'));
    }
}
