<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categery;
use Illuminate\Support\Str;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add_product(){
        $categery = Categery::all();
        return view('admin.product.add-product',compact('categery'));
    }
    public function view_product()
    {
        $products = Product::all();
        $categery = Categery::all();
        return view('admin.product.view-product', compact('products','categery'));
    }

    public function index(Request $request)
    {
        $categery = Categery::all();
        $categoryId  = $request->query('category_id');

        $products = Product::when($categoryId,function($query,$categoryId){
            return $query->where('cat_id',$categoryId);
        })->get();

        return view('admin.product.view-product', compact('products','categery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $categery = Categery::all();
        return view('admin.product.view-product', compact('products','categery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'productName' => 'required|string|max:255',
        'productPrice' => 'required|numeric',
        'productOldPrice' => 'nullable|numeric',
        'productDescription' => 'required|string',
        'mainImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'subImages.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'productSize' => 'nullable|string|max:255',
        'productColor' => 'nullable|string|max:255',
        'condition' => 'required|in:default,new,hot',
        'slug' => 'nullable|string|max:255',
        'stock' => 'required|numeric',
        'cat_id' => 'nullable',
        'status' => 'required|in:active,inactive',
        'discount' => 'nullable|numeric'
    ]);


    // Create a new product instance
    $product = new Product();
    $product->productName = $validatedData['productName'];
    $product->slug = $validatedData['productName'];
    $product->productPrice = $validatedData['productPrice'];
    $product->productOldPrice = $validatedData['productOldPrice'];
    $product->productColor = $validatedData['productColor'];
    $product->productSize = $validatedData['productSize'];
    $product->cat_id = $validatedData['cat_id'];
    $product->productDescription = $validatedData['productDescription'];
    $product->discount = $validatedData['discount'];
    $product->status = $validatedData['status'];
    $product->stock = $validatedData['stock'];
    $product->condition = $validatedData['condition'];


    // Handle the main image upload
    if ($request->hasFile('mainImage')) {
        $mainImageFile = $request->file('mainImage');
        $mainImageName = time() . '_' . $mainImageFile->getClientOriginalName();
        $mainImageFile->move(public_path('media/product'), $mainImageName);
        $product->mainImage = $mainImageName;
    }

    // Handle the sub images upload
    $subImages = [];
    if ($request->hasFile('subImages')) {
        foreach ($request->file('subImages') as $file) {
            $image_name = md5(rand(1000, 10000));
            $ext = time() . '_' . $file->getClientOriginalName();
            $image_full_name = $image_name . '.' . $ext;
            $file->move(public_path('media/product'), $image_full_name);
            $subImages[] = $image_full_name;
        }
        $product->subImages = json_encode($subImages);
    }

    // Save the product
    $product->save();

    return redirect()->route('products.create')->with('success', 'Product created successfully.');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $product = Product::findOrFail($id);
    // Assuming you have categories fetched to populate a dropdown or selection
    $categery = Categery::all();
    
    return view('admin.product.edit-product', compact('product', 'categery'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    // Validate the form data
    $validatedData = $request->validate([
        'productName' => 'required|string|max:255',
        'productPrice' => 'required|numeric',
        'productOldPrice' => 'nullable|numeric',
        'productDescription' => 'required|string',
        'mainImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'subImages.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'productSize' => 'nullable|string|max:255',
        'productColor' => 'nullable|string|max:255',
        'condition' => 'required|in:default,new,hot',
        'slug' => 'nullable|string|max:255',
        'stock' => 'required|numeric',
        'cat_id' => 'nullable',
        'status' => 'required|in:active,inactive',
        'discount' => 'nullable|numeric'
    ]);

    // Find the product by ID
    $product = Product::findOrFail($id);
    
    // Update product properties
    $product->productName = $validatedData['productName'];
    $product->slug = $validatedData['slug'] ?? Str::slug($validatedData['productName']);
    $product->productPrice = $validatedData['productPrice'];
    $product->productOldPrice = $validatedData['productOldPrice'];
    $product->productColor = $validatedData['productColor'];
    $product->productSize = $validatedData['productSize'];
    $product->cat_id = $validatedData['cat_id'];
    $product->productDescription = $validatedData['productDescription'];
    $product->discount = $validatedData['discount'];
    $product->status = $validatedData['status'];
    $product->stock = $validatedData['stock'];
    $product->condition = $validatedData['condition'];

    // Handle main image update
    if ($request->hasFile('mainImage')) {
        $mainImageFile = $request->file('mainImage');
        $mainImageName = time() . '_' . $mainImageFile->getClientOriginalName();
        $mainImageFile->move(public_path('media/product'), $mainImageName);
        $product->mainImage = $mainImageName;
    }

    // Handle sub images update
    if ($request->hasFile('subImages')) {
        $subImages = [];
        foreach ($request->file('subImages') as $file) {
            $image_name = md5(rand(1000, 10000));
            $ext = time() . '_' . $file->getClientOriginalName();
            $image_full_name = $image_name . '.' . $ext;
            $file->move(public_path('media/product'), $image_full_name);
            $subImages[] = $image_full_name;
        }
        $product->subImages = json_encode($subImages);
    }

    // Save the updated product
    $product->save();

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
}

}
