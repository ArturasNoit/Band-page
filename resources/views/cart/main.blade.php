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
                                    <tr>
                                        <td class="product-img">
                                            <img class="img-responsive" src="assets/images/product/cart-item-1.jpg" alt="">
                                        </td>
                                        <td class="product-info">
                                            <a href="#" class="product-name">Cotton T- Shirt</a>
                                            <span class="display-block mrg-btm-5">Color: Gold</span>
                                            <span class="display-block mrg-btm-5">Size: M</span>
                                        </td>
                                        <td>
                                            <input type="number" value="1" min="1" class="quantity form-control">
                                        </td>
                                        <td>$400</td>
                                        <td>
                                            <button class="qtyminus btn icon-btn-md btn-white icon-btn-round lh-1"><i class="ei ei-close"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card pdd-horizon-30 pdd-vertical-25 mrg-top-30">
                            <div class="border bottom">
                                <h3 class="mrg-btm-30">Summary</h3>
                                <p>Subtotal: <span class="pull-right">$1,600</span></p>
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