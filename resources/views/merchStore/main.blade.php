@extends('layouts.single')

@section('content')
        <!-- Hero Start -->
        <section id="hero">
            <div class="tp-banner-container">
                <div class="tp-banner rev-banner-fullscreen">
                    <ul>
                        <!-- Layer-1 -->
                        <li data-index="rs-353" data-transition="crossfade" data-slotamount="default" data-masterspeed="2000">
                            <img src="{{asset('images/bg-58.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                                id="slide-1-layer-1"
                                data-x="['right','right','center','center']" data-hoffset="['-100','-100','0','0']"
                                data-y="['center','center','bottom','bottom']" data-voffset="['40','-40','0','0']"
                                data-width="none"
                                data-height="none" 
                                data-whitespace="nowrap" 
                                data-transform_in="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;s:1000" 
                                data-transform_out="x:50;s:1000;e:Power2.easeInOut;s:1000;opacity:0;e:Power2.easeInOut;"
                                data-transform_idle="o:1;" 
                                data-start="500" 
                                data-responsive_offset="on" 
                                style="z-index: 7;">
                               <img src="{{asset('images/img-47.png')}}" alt="" data-ww="['650','650','450','250']" data-hh="['700','700','450','250']" data-no-retina>
                            </div>
                            <div class="tp-caption tp-resizeme secondary-font text-dark"
                                id="slide-1-layer-2"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','0','0']"
                                data-y="['center','center','top','top']" data-voffset="['-90','-90','150','150']"
                                data-fontsize="['50','50','30','30']"
                                data-lineheight="['40','40','40','40']"
                                data-width="['400','356','334','334']"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-start="1200" 
                                data-responsive_offset="on"
                                style="z-index: 8; letter-spacing: 1px;">
                                <span class="font-secondary text-white ls-0-5 font-weight-light">{{$products[0]->title}}</span>
                            </div>    
                            <div class="tp-caption"
                                id="slide-1-layer-3"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','0','0']"
                                data-y="['center','center','top','top']" data-voffset="['-5','-5','210','210']"
                                data-fontsize="['15','15','15','15']"
                                data-lineheight="['27','27','27','27']"
                                data-width="['450','356','350','350']"
                                data-height="['none','none','76','68']"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-responsive_offset="on"
                                data-start="1500" 
                                style="z-index: 8;">
                                <p class="text-white">{{str_limit($products[0]->description, 150)}}</p> 
                            </div>
                            <div class="tp-caption"
                                id="slide-1-layer-4"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','-140','-140']"
                                data-y="['center','center','top','top']" data-voffset="['70','70',300','300']"
                                data-whitespace="nowrap"
                                data-fontsize="['24','24','20','20']"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-start="1800"
                                data-responsive_offset="on">
                                <span class="text-white font-secondary">$ {{$products[0]->price}}</span>
                            </div>
                            <div class="tp-caption"
                                id="slide-1-layer-5"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','-100','-100']"
                                data-y="['center','center','top','top']" data-voffset="['140','140','390','370']"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-start="2000"
                                data-responsive_offset="on">
                                @if(Auth::check())
                                <a href="{{route('cart.add', $products[0]->id)}}" class="btn btn-md btn-dark border-radius-4">Add to Cart</a>
                                @endif
                            </div>
                        </li> 
                          
                        <!-- Layer-2 -->  
                       <li data-index="rs-354" data-transition="crossfade" data-slotamount="default" data-masterspeed="2000">
                            <img src="{{asset('images/bg-33.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                                id="slide-2-layer-1"
                                data-x="['right','right','center','center']" data-hoffset="['-100','-100','0','0']"
                                data-y="['center','center','bottom','bottom']" data-voffset="['40','-40','0','0']"
                                data-width="none"
                                data-height="none" 
                                data-whitespace="nowrap" 
                                data-transform_in="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;s:1000" 
                                data-transform_out="x:50;s:1000;e:Power2.easeInOut;s:1000;opacity:0;e:Power2.easeInOut;"
                                data-transform_idle="o:1;" 
                                data-start="500" 
                                data-responsive_offset="on" 
                                style="z-index: 7;">
                               <img src="{{asset('images/img-22.png')}}" alt="" data-ww="['650','650','450','250']" data-hh="['700','700','450','250']" data-no-retina>
                            </div>
                            <div class="tp-caption tp-resizeme secondary-font text-dark"
                                id="slide-2-layer-2"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','0','0']"
                                data-y="['center','center','top','top']" data-voffset="['-90','-90','150','150']"
                                data-fontsize="['50','50','30','30']"
                                data-lineheight="['40','40','40','40']"
                                data-width="['400','356','334','334']"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-start="1200" 
                                data-responsive_offset="on"
                                style="z-index: 8; letter-spacing: 1px;">
                                <span class="font-secondary text-white ls-0-5 font-weight-light">{{$products[1]->title}}</span>
                            </div>    
                            <div class="tp-caption"
                                id="slide-2-layer-3"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','0','0']"
                                data-y="['center','center','top','top']" data-voffset="['-5','-5','210','210']"
                                data-fontsize="['15','15','15','15']"
                                data-lineheight="['27','27','27','27']"
                                data-width="['450','356','350','350']"
                                data-height="['none','none','76','68']"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-responsive_offset="on"
                                data-start="1500" 
                                style="z-index: 8;">
                                <p class="text-white">{{str_limit($products[1]->description, 150)}}</p> 
                            </div>
                            <div class="tp-caption"
                                id="slide-2-layer-4"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','-140','-140']"
                                data-y="['center','center','top','top']" data-voffset="['70','70',300','300']"
                                data-whitespace="nowrap"
                                data-fontsize="['24','24','20','20']"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-start="1800"
                                data-responsive_offset="on">
                                <span class="text-white font-secondary">$ {{$products[1]->price}}</span>
                            </div>
                            <div class="tp-caption"
                                id="slide-2-layer-5"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','-100','-100']"
                                data-y="['center','center','top','top']" data-voffset="['140','140','390','370']"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-start="2000"
                                data-responsive_offset="on">
                                @if(Auth::check())
                                <a href="{{route('cart.add', $products[1]->id)}}" class="btn btn-md btn-dark border-radius-4">Add to Cart</a>
                                @endif
                            </div>
                        </li> 
                        
                        <!-- Layer-3 -->
                        <li data-index="rs-355" data-transition="crossfade" data-slotamount="default" data-masterspeed="2000">
                            <img src="{{asset('images/bg-59.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                                id="slide-3-layer-1"
                                data-x="['left','left','left','left']" data-hoffset="['680','500','177','150']"
                                data-y="['top','top','top','bottom']" data-voffset="['200','207','482','150']"
                                data-width="none"
                                data-height="none" 
                                data-whitespace="nowrap" 
                                data-transform_in="y:top;opacity:0;s:500;e:Back.easeInOut;" 
                                data-transform_out="y:top;opacity:0;s:600;e:Back.easeInOut;" 
                                data-transform_idle="o:1;" 
                                data-start="1500" 
                                data-responsive_offset="on" 
                                style="z-index: 7;">
                               <img src="{{asset('images/img-48.png')}}" alt="" data-ww="['200px','200px','100px','100px']" data-hh="['200px','200px','100px','100px']" data-no-retina>
                            </div>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                                id="slide-3-layer-2"
                                data-x="['left','left','left','left']" data-hoffset="['593','453','50','0']"
                                data-y="['top','top','bottom','bottom']" data-voffset="['513','503','0','0']"
                                data-width="none"
                                data-height="none" 
                                data-whitespace="nowrap" 
                                data-transform_in="y:top;opacity:0;s:700;e:Back.easeInOut;"
                                data-transform_out="y:top;opacity:0;s:800;e:Back.easeInOut;"
                                data-transform_idle="o:1;" 
                                data-start="1800" 
                                data-responsive_offset="on" 
                                style="z-index: 7;">
                               <img src="{{asset('images/img-49.png')}}" alt="" data-ww="['280px','280px','200px','150px']" data-hh="['280px','280px','200px','150px']" data-no-retina>
                            </div>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                                id="slide-3-layer-3"
                                data-x="['right','right','right','right']" data-hoffset="['-100','-100','100','50']"
                                data-y="['center','center','bottom','bottom']" data-voffset="['40','-40','-100','-80']"
                                data-width="none"
                                data-height="none" 
                                data-whitespace="nowrap" 
                                data-transform_in="y:top;opacity:0;s:900;e:Back.easeInOut;"
                                data-transform_out="y:top;opacity:0;s:1000;e:Back.easeInOut;"
                                data-transform_idle="o:1;" 
                                data-start="2100" 
                                data-responsive_offset="on" 
                                style="z-index: 7;">
                               <img src="{{asset('images/img-51.png')}}" alt="" data-ww="['350px','350px','240px','180px']" data-hh="['350px','350px','240px','180px']" data-no-retina>
                            </div>
                            <div class="tp-caption tp-resizeme secondary-font text-dark"
                                id="slide-3-layer-4"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','-10','-10']"
                                data-y="['center','center','top','top']" data-voffset="['-90','-90','150','150']"
                                data-fontsize="['50','50','30','30']"
                                data-lineheight="['40','40','40','40']"
                                data-width="['400','356','334','334']"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-start="2500" 
                                data-responsive_offset="on"
                                style="z-index: 8; letter-spacing: 1px;">
                                <span class="font-secondary text-white ls-0-5 font-weight-light">{{$products[3]->title}}</span>
                            </div>    
                            <div class="tp-caption"
                                id="slide-3-layer-5"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','0','0']"
                                data-y="['center','center','top','top']" data-voffset="['-5','-5','210','210']"
                                data-fontsize="['15','15','15','15']"
                                data-lineheight="['27','27','27','27']"
                                data-width="['450','356','350','350']"
                                data-height="['none','none','76','68']"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-responsive_offset="on"
                                data-start="2800" 
                                style="z-index: 8;">
                                <p class="text-white">{{str_limit($products[3]->description, 150)}}</p> 
                            </div>
                            <div class="tp-caption"
                                id="slide-3-layer-6"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','-140','-140']"
                                data-y="['center','center','top','top']" data-voffset="['70','70',300','300']"
                                data-whitespace="nowrap"
                                data-fontsize="['24','24','20','20']"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-start="3100"
                                data-responsive_offset="on">
                                <span class="text-white font-secondary">$ {{$products[3]->price}}</span>
                            </div>
                            <div class="tp-caption"
                                id="slide-3-layer-7"
                                data-x="['left','left','center','center']" data-hoffset="['-50','50','-100','-100']"
                                data-y="['center','center','top','top']" data-voffset="['140','140','360','360']"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                                data-start="3400"
                                data-responsive_offset="on">
                                @if(Auth::check())
                                <a href="{{route('cart.add', $products[3]->id)}}" class="btn btn-md btn-dark border-radius-4">Add to Cart</a>
                                @endif
                            </div>    
                        </li>
                    </ul>
                </div>
            </div>    
        </section>
        <!-- Hero End -->
        <section class="section-1">
            @if(Session::has('successDelete'))
                <div class="alert alert-warning alert-dismissable col-md-8 col-md-push-2">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <em> {!! session('successDelete') !!}</em>
                </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissable col-md-8 col-md-push-2">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <em> {!! session('success') !!}</em>
                </div>
            @endif
            <div class="container">
                <div class="text-center mrg-btm-50">
                    <h2>Best selling</h2>
                </div>
                <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="shop-product">
                            <a href="{{route('store.singleProduct', $product->id)}}" class="product-name">{{str_limit($product->title, 15)}}</a>
                            <p><b>Manufacturer:</b>{{str_limit($product->category->title, 10)}}</p>
                            <a href="{{route('store.singleProduct', $product->id)}}"><img class="product-img img-responsive" src="{{$product->img_url}}" alt=""></a>
                            <span class="price">$ {{$product->price}}</span>
                            <div class="add-to-cart">
                 <!--                <a class="btn icon-btn-md btn-white icon-btn-round mrg-right-5 lh-1" href="{{route('store.singleProduct', $product->id)}}"><i class="ei ei-show"></i></a> -->
                                @if(Auth::check())
                                <a href="{{route('cart.add', $product->id)}}" data-productid="{{ $product->id }}" class="add-to-cart btn icon-btn-md btn-white icon-btn-round mrg-right-5 lh-1"><i class="ei ei-shopping-basket"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
        <!-- Product End -->

@endsection