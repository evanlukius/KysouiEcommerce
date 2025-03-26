<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;


class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        return view('cart',compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        // Add the product to the cart using the Gloudemans package
        Cart::instance('cart')->add(
            $request->id,                  // Product ID
            $request->name,                // Product name
            $request->quantity,            // Quantity
            $request->price                // Price
        )->associate(Product::class);       // Associate with the Product model

        // Flash a success message to the session
        session()->flash('success', 'Product is Added to Cart Successfully !');

        // Return a JSON response
        return redirect()->route('cart.index');
    }

    public function increase_item_quantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        return redirect()->back();
    }

    public function reduce_item_quantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        return redirect()->back();
    }

    public function remove_item_from_cart($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        return redirect()->back();
    }

    public function empty_cart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->back();
    }

}
