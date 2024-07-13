<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Categery;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $categery = Categery::all();
        $drinks = Product::where('cat_id', 18)->get();
        $breakfast = Product::where('cat_id', 20)->get();
        $chemist = Product::where('cat_id', 21)->get();
        return view('index',compact('categery','drinks','breakfast','chemist'));
    }

    public function shop(){

        $categery = Categery::all();
        $product = Product::all();
        $count = Categery::withCount('products')->get();
        return view('shop',compact('categery','product','count'));
    }

    public function productDetail($slug){
        $product_details = Product::where('slug', $slug)->firstOrFail();
        return view('ShopDetails',compact('product_details'));
    }
}
