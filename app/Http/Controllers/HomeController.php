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
        return view('index',compact('categery','drinks'));
    }
}
