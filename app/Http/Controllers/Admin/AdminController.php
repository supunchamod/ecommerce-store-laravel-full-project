<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categery;
use App\Models\Product;


class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function add_category(){
        return view('admin.category.add-category');
    }
    public function view_category(){
        $categery = Categery::all();
        $products = Product::all();
        return view('admin.category.view-category',compact('categery','products'));
    }
   
}
https://chatgpt.com/c/4b915d62-fe2e-4e6a-8196-41881d591031