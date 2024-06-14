<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categery;

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
        return view('admin.category.view-category',compact('categery'));
    }
}
