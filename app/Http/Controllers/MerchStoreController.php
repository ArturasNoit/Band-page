<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\Product_validation;

class MerchStoreController extends Controller
{
    public function index( Product $products){
    	$products = $products->get();
    	return view('merchStore.main', compact('products'));
    }

    // Shows single product page
    public function showSingleProduct( Product $products, $id){
    	$product = $products->where("id", $id)->first();
    	return view('merchStore.product', compact("product"));
    }

    // Gets single product info in form to update it
    public function getFormToUpdate($id)
    {
      $product = Product::find($id);

      return view('merchStore.form', compact('product'));
    }

    // Deletes single product
    public function deleteProduct(Request $request, $id)
    {
      $product = Product::find($id);
      $product->delete();
      $request->session()->flash('successDelete', $product->title . ' was successfully deleted!');

      return redirect()->route('store.main');
    }
    // Updates single product
    public function updateProduct(Request $request, $id, Product_validation $request2)
    {
      // Product::create($request->all());
      $product = Product::find($id);
      $product->update($request->all());
      $request->session()->flash('success', $request->title . ' was successfully updated!');
      return redirect()->route('store.singleProduct', $id);
    }
    // open form to create form
    public function create(){
    	return view('merchStore.form');
    }
    // create new product
    public function createNewProduct(Request $request, Product_validation $request2){
    	Product::create($request->all());
    	$request->session()->flash('success', $request->title . ' was successfully added!');
    	return redirect()->route('store.main');
    }
}
