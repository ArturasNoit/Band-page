@extends('layouts.single')

@section('content')
<section class="page-tittle page-tittle-md bg dark-overlay" style="background-image: url('{{asset('images/bg-18.jpg')}}')">
            <div class="container">                         
                <div class="page-tittle-head display-block text-center">
                    <h2>Product page</h2>
                </div>
            </div>
        </section>


  <section class="section-3">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="swiper-container gallery-screen no-pdd">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="{{asset('images/img-36.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="{{asset('images/img-40.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="{{asset('images/img-37.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="{{asset('images/img-38.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="{{asset('images/img-39.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="{{asset('images/img-36.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="{{asset('images/img-40.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="{{asset('images/img-37.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="{{asset('images/img-38.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive" src="{{asset('images/img-39.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mrg-top-90">
                                    <h2 class="mrg-btm-30">Beats Solo2 Wireless Headphones</h2>
                                    <p class="width-70 mrg-btm-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Letraset sheets containing Lorem Ipsum passages.</p>
                                    <div class="quantity-selector mrg-right-30">
                                        <button class="qtyminus btn icon-btn-md btn-white icon-btn-round lh-1"><i class="ei ei-minus"></i></button>
                                        <input type="text" value="1" class="quantity form-control">
                                        <button class="qtyplus btn icon-btn-md btn-white icon-btn-round lh-1"><i class="ei ei-plus"></i></button>
                                    </div>
                                    <span class="font-size-20"><b>$ 168.00</b></span>
                                    <div class="mrg-top-50">
                                        <a class="btn btn-md btn-dark">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

@endsection