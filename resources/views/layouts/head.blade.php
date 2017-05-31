<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Band camp</title>



    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('plugins/swiper/css/swiper.css')}}" />
    <link rel="stylesheet" href="{{ asset('plugins/youtube-player/css/YTPlayer.css')}}" />

     <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/rs-plugin/revolution/css/settings.css')}}" />
    <link rel="stylesheet" href="{{ asset('plugins/rs-plugin/revolution/css/navigation.css')}}" />
        
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/ei-icon.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style-switcher.css')}}" />


    <!-- Theme Color CSS -->
    <link rel="stylesheet" href="{{ asset('css/colors/blue.css')}}" id="style-color"/>
        
        <!-- Your CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}" />
</head>
<body>
    @if (Auth::check())
    <!-- Style Switcher plugin -->
    <div class="style-switcher">
        <a class="style-switcher-btn hidden-xs" href="javascript:void(0);">
            <i class="ei ei-tools"></i>
        </a>
        <div class="style-switcher-wrapper">
            <h3>Style Switcher</h3>
            <ul class="mrg-top-20">
                <li class="color-options theme-blue active" data-style="blue"></li>
                <li class="color-options theme-gold" data-style="gold"></li>
                <li class="color-options theme-salmon" data-style="salmon"></li>
            </ul>
        </div>

        <!-- Loader -->
    </div><div class="loader-wrapper">
        <div class="loaders">
            <div class="loader-logo-pulse">
                <img src="{{ asset('images/logo/logo-2.png')}}" alt="Band camp"> 
            </div>
            <div class="loader-1">
            </div>
        </div>
    </div>
    @endif
        <div class="wrapper">
        <!-- Header Start -->
        <header id="menu" class="header header-transparent header-sticky">
            <nav class="navbar">
                <div class="container">
                    <div class="menu-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                           <span class="top-bar"></span>
                           <span class="middle-bar"></span>
                           <span class="bottom-bar"></span>
                           <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <!-- cart ir login-->
                        @if (Route::has('login'))
                        <div class="nav-tools">
                            <ul class="nav navbar-nav">
                                @if (Auth::check())
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle" href="javascript:void(0);"><i class="ei ei-shopping-cart"></i> 5</a>
                                    <ul class="cart-menu dropdown-menu">
                                    <!-- One product to show -->
                                        <li class="cart-menu-item">
                                            <a href="{{route('store.singleProduct')}}" class="cart-menu-media">
                                                <img class="img-responsive" src="{{asset('images/product/cart-item-1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="{{route('store.singleProduct')}}" class="product-name">Cotton T- Shirt</a>
                                                <span class="price">$400.00</span>
                                                <a class="remove" href="javascript:void(0);"><i class="ei ei-close"></i></a>
                                            </div>
                                        </li>
                                        <!-- End of product in cart -->
                                        <li class="cart-menu-item">
                                            <a href="#" class="cart-menu-media">
                                                <img class="img-responsive" src="assets/images/product/cart-item-2.jpg" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="#" class="product-name">Party Dress</a>
                                                <span class="price">$400.00</span>
                                                <a class="remove" href="javascript:void(0);"><i class="ei ei-close"></i></a>
                                            </div>
                                        </li>
                                        <li class="cart-menu-subtotal">
                                            <span>Sub Total</span>
                                            <span class="amount">$800</span>
                                        </li>
                                        <li class="cart-menu-bottom">
                                            <a class="btn check-out" href="{{route('cart.main')}}"><i class="ei ei-shopping-cart-dash pdd-horizon-5"></i> View Cart</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle" href="javascript:void(0);">{{ Auth::user()->name }}<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('admin.main')}}">Admin panel</a>
                                        <li><a href="{{route('user.main')}}">My profile</a>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @else
                                <li class="nav-item">
                                    <button class="login-btn" data-toggle="modal" data-target="#login">Login</button>
                                </li>
                                @endif
                            </ul>
                            @endif
                            
                        </div>
                        <!-- Logo -->
                        <div class="nav-logo">
                            <a class="logo" href="{{route('home')}}"><img class="logo-light" src="{{asset('images/logo/logo-1.png')}}" alt="Eastern"></a>
                            <a class="logo" href="{{route('home')}}"><img class="logo-dark" src="{{asset('images/logo/logo-2.png')}}" alt="Eastern"></a>
                        </div>  

                    </div>
                    <div class="collapse navbar-collapse nav-collapse">
                        <ul class="nav navbar-nav" >
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="{{route('news.main')}}">News</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="{{route('tourDates.main')}}">Tour Dates</a>

                            </li>
                            <li class="nav-item dropdown mega-menu">
                                <a class="dropdown-toggle" href="{{route('music.main')}}">Music</a>
                                
                            </li>
                            <li class="nav-item dropdown mega-menu">
                                <a class="dropdown-toggle" href="{{route('band.main')}}">Band</a>
                                
                            </li>
                            <li class="nav-item dropdown mega-menu">
                                <a class="dropdown-toggle" href="javascript:void(0);">Band club</a>
                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="{{route('store.main')}}">Merch Store <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li ><a href="javascript:void(0);">Music</a>
                                    </li>
                                    <li><a href="javascript:void(0);">Apparel</a>
                                    </li>
                                    <li><a href="javascript:void(0);">Accessories</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header End -->
        
        
        <!-- Hero Start -->

        <!-- Hero End -->
    
    
    <!-- wrapper -->
    
        
    
