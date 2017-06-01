<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
    	return view('cart.main');
    }

   public function addItem($productId) {
   	$cartItem = new Cart;
   	$cartItem->product_id = $productId;
   	$cartItem->user_id = Auth::user()->id;
   	$cartItem->quantity = 1;
   	$cartItem->save();

   	return redirect()->route('cart.main');
   }
}
