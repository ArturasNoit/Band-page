<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Http\Request;

class CartController extends Controller
{
  // Add single item in cart
  public function addItem($productId, Request $request) {
    $cartItem = Cart::where("product_id", $request->id)->where("user_id", Auth::user()->id)->first();
     if($cartItem) {
       $cartItem->quantity += 1;
     } else {
       $cartItem = new Cart;
        $cartItem->product_id = $request->id;
        $cartItem->user_id = Auth::user()->id;
        $cartItem->quantity = 1;
     }

     $cartItem->save();

   	return redirect()->route('store.main');
  }

   // Show cart
  public function showCart(){
    $cart =  Cart:: where('user_id', Auth::user()->id)->get();
    $totalPrice = 0;
    $totalItems =count($cart);
    foreach($cart as $item) {
      $totalPrice += $item->product->price * $item->quantity;
    }
    return view('cart.main')->with([
      'cart' =>$cart,
      'totalPrice' =>$totalPrice,
      'totalItems' =>$totalItems,
         ]);
   }

   // Delete product from cart
   public function deleteCart($id){
    $item = Cart::find($id);
    // var_dump($item);
    $item->delete();
    return back();
   }

   public function cartUpdate(Request $request, $id){
    $cart = Cart::find($id);
    $cart->update($request->all());
    return back();
   }

  public function addProductAjax(Request $request){
    $cartItem = Cart::where("product_id", $request->id)->where("user_id", Auth::user()->id)->first();


    if($cartItem) {
      $cartItem->quantity += 1;
    } else {
      $cartItem = new Cart;
      $cartItem->product_id = $request->id;
      $cartItem->user_id = Auth::user()->id;
      $cartItem->quantity = 1;
     }
      $cartItem->save();




  $cart =  Cart:: where('user_id', Auth::user()->id)->get();
  //$totalItems = count($cart);

  return response()->json(["cart" => $cart, "cartItem" => $cartItem]);

  }
}