@extends('layouts.single')

@section('content')
        <section class="page-tittle page-tittle-md bg dark-overlay" style="background-image: url('{{asset('images/bg-18.jpg')}}')">
            <div class="container">                         
                <div class="page-tittle-head display-block text-center">
                    <h2>Cart</h2>
                </div>
            </div>
        </section

<!-- Cart Start -->
        <section class="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="cart-table">
                            <table class="table">
                                <tbody>
                                @foreach($cart as $item)
                                    <tr>
                                        <td class="product-img">
                                            <img class="img-responsive" src="{{$item->product->img_url}}" alt="">
                                        </td>
                                        <td class="product-info">
                                            <a href="#" class="product-name">{{$item->product->title}}</a>
                                            <span class="display-block mrg-btm-5">Category: {{$item->category->title}}</span>
                                            <span class="display-block mrg-btm-5">Manufacturer: {{$item->manufacturer->title}}</span>
                                        </td>
                                        <td>
                                            <input type="number" value="{{$item->quantity}}" min="1" class="quantity form-control">
                                        </td>
                                        <td>${{$item->product->price * $item->quantity}}</td>
                                        <td>
                                            <a href="{{route('cart.delete', $item->id)}}" class="btn icon-btn-md btn-white icon-btn-round lh-1"><i class="ei ei-close"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card pdd-horizon-30 pdd-vertical-25 mrg-top-30">
                            <div class="border bottom">
                                <h3 class="mrg-btm-30">Summary</h3>
                                <p>Subtotal: <span class="pull-right">{{$totalPrice}}</span></p>
                                <p>Shipping: <span class="pull-right">$30</span></p>
                                <p class="mrg-top-20">Discount: <span class="pull-right">$300</span></p>
                            </div>
                            <p class="mrg-top-20">Grand Total: <span class="pull-right text-dark font-size-18"><b>$300</b></span></p>
                            <div class="text-center mrg-top-30">
                                <a class="btn btn-dark btn-block" href="checkout.html">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart End -->

@endsection