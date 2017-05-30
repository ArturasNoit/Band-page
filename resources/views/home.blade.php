@extends('layouts.single')

@section('content')
<section id="hero">
            <div class="fs-hero hero-img" style="background-image:url({{ asset('images/bg-11.jpg')}})">
                <div class="hero-caption text-white center-left">
                    <h3 class="font-weight-light">Adventure Mind</h3>
                    <h1 class="ls-2">Start Your Journey</h1>
                    <p class="mrg-top-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type .</p>
                    <div class="mrg-top-20">
                        <a href class="btn btn-white-inverse btn-md">Read More</a>
                    </div>

                </div>
            </div>
        </section>
<section class="section-1 bg-gray">
            <div class="container">
                <div class="text-center">
                    <h2 class="mrg-btm-20">Our Top Wine</h2>
                    <p class="width-30 mrg-horizon-auto">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default.</p>
                </div>
                <div class="row mrg-top-50">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card pdd-horizon-30 pdd-vertical-60">
                            <div class="swiper-single swiper-container static">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="assets/images/img-16.png" alt="">
                                            </div>
                                            <div class="col-md-offset-1 col-md-6">
                                                <h3 class="mrg-btm-30">Blanc de Blancs</h3>
                                                <p class="mrg-btm-30">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                                <b class="text-dark font-size-18">$ 89.99</b>
                                                <ul class="social-btn pull-right">
                                                    <li class="mrg-right-5"><a class="btn icon-btn-md btn-dark-inverse border-radius-round" href="javascript:void(0);"><i class="ei ei-heart"></i></a></li>
                                                    <li class="mrg-right-5"><a class="btn icon-btn-md btn-dark border-radius-round" href="javascript:void(0);"><i class="ei ei-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="assets/images/img-17.png" alt="">
                                            </div>
                                            <div class="col-md-offset-1 col-md-6">
                                                <h3 class="mrg-btm-30">Cabernet Franc</h3>
                                                <p class="mrg-btm-30">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                                <b class="text-dark font-size-18">$ 89.99</b>
                                                <ul class="social-btn pull-right">
                                                    <li class="mrg-right-5"><a class="btn icon-btn-md btn-dark-inverse border-radius-round" href="javascript:void(0);"><i class="ei ei-heart"></i></a></li>
                                                    <li class="mrg-right-5"><a class="btn icon-btn-md btn-dark border-radius-round" href="javascript:void(0);"><i class="ei ei-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="assets/images/img-18.png" alt="">
                                            </div>
                                            <div class="col-md-offset-1 col-md-6">
                                                <h3 class="mrg-btm-30">Rosé</h3>
                                                <p class="mrg-btm-30">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                                <b class="text-dark font-size-18">$ 89.99</b>
                                                <ul class="social-btn pull-right">
                                                    <li class="mrg-right-5"><a class="btn icon-btn-md btn-dark-inverse border-radius-round" href="javascript:void(0);"><i class="ei ei-heart"></i></a></li>
                                                    <li class="mrg-right-5"><a class="btn icon-btn-md btn-dark border-radius-round" href="javascript:void(0);"><i class="ei ei-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /swiper-wrapper -->
                                <div class="swiper-navigation navigation-2 out-of-box">
                                    <div class="swiper-button-next"><i class="ei ei-right-chevron"></i></div>
                                    <div class="swiper-button-prev"><i class="ei ei-left-chevron"></i></div>
                                </div><!-- /swiper-navigation -->
                            </div><!-- /swiper-container -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
