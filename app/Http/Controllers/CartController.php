<?php

namespace App\Http\Controllers;
use App\Models\Categery;
use App\Models\Product;
use App\Models\Cart;
use Auth;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id(); // Get the ID of the currently logged-in user
        $cart = Cart::with('product')->where('user_id', $userId)->get(); // Fetch cart items for the authenticated user
            // Calculate current total amount
        $currentTotalAmount = $cart->sum('amount');
        $fullTotal = $currentTotalAmount + 100 ;
        return view('cart', compact('cart','currentTotalAmount','fullTotal'));    
    
    }

    public function getCartDetails(){

        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();
        $cartCount = $cartItems->sum('quantity');
        $cartTotal = $cartItems->sum('amount');
        
        return compact('cartItems', 'cartCount', 'cartTotal');
    }

    public function addToCart(Request $request)
    {
        // Find the product by its ID
        $product = Product::find($request->product_id);
        
        // Check if the product exists
        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found.'], 404);
        }
    
        // Calculate the save amount and the new amount
        $saveAmount = $product->productOldPrice - $product->productPrice;
        $newAmount = $product->productPrice * $request->quantity;
    
        // Check if the product is already in the cart for the current user
        $cartItem = Cart::where('user_id', Auth::id())
                        ->where('product_id', $request->product_id)
                        ->first();
    
        if ($cartItem) {
            // If the product is already in the cart, update the quantity and amount
            $cartItem->quantity += $request->quantity;
            $cartItem->amount = $product->productPrice * $cartItem->quantity;
            $cartItem->save();
        } else {
            // If the product is not in the cart, create a new cart item
            $cartItem = Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'save_amount' => $saveAmount,
                'amount' => $newAmount,
                'status' => 'new' // Adjust status as needed
            ]);
        }
    
        return response()->json(['success' => true, 'message' => 'Product added to cart.']);
    }
    

    public function updateCart(Request $request, $cartItemId)
    {
        $cartItem = Cart::find($cartItemId);
    
        if (!$cartItem) {
            return response()->json(['success' => false, 'message' => 'Cart item not found'], 404);
        }
    
        $quantity = $request->input('quantity');
    
        // Update quantity and amount
        $cartItem->quantity = $quantity;
        $cartItem->amount = $cartItem->product->productPrice * $quantity;
        $cartItem->save();
    
        // Calculate the total cart amount
        $totalAmount = Cart::where('user_id', Auth::id())->sum('amount');
    
        return response()->json(['success' => true, 'amount' => $cartItem->amount, 'quantity' => $cartItem->quantity, 'totalAmount' => $totalAmount]);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
