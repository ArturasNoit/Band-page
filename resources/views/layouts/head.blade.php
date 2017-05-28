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
    <title>Band camp</title>
</head>
<body>

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
                        <div class="nav-tools">
                            <ul class="nav navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle" href="#"><i class="ei ei-shopping-cart"></i> 5</a>
                                    <ul class="cart-menu dropdown-menu">
                                    <!-- One product to show -->
                                        <li class="cart-menu-item">
                                            <a href="product-single.html" class="cart-menu-media">
                                                <img class="img-responsive" src="{{asset('images/product/cart-item-1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-single.html" class="product-name">Cotton T- Shirt</a>
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
                                            <a class="btn check-out" href="#"><i class="ei ei-shopping-cart-dash pdd-horizon-5"></i> View Cart</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <button class="login-btn" data-toggle="modal" data-target="#login">Login</button>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- Logo -->
                        <div class="nav-logo">
                            <a class="logo" href="index.html"><img class="logo-light" src="{{asset('images/logo/logo-1.png')}}" alt="Eastern"></a>
                            <a class="logo" href="index.html"><img class="logo-dark" src="{{asset('images/logo/logo-2.png')}}" alt="Eastern"></a>
                        </div>  

                    </div>
                    <div class="collapse navbar-collapse nav-collapse">
                        <ul class="nav navbar-nav" >
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">Home <span class="caret"></span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">Features <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="sub-menu"><a href="javascript:void(0);">Footer <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="footer1.html">Footer 1</a></li>
                                            <li><a href="footer-reveal.html">Footer Reveal</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu"><a href="javascript:void(0);">Page Tittle <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="sub-menu"><a href="javascript:void(0);">Size <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-tittle-sm.html">Page Tittle Small</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-menu"><a href="javascript:void(0);">Alignment <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-tittle-left.html">Align Left</a></li>
                                                    <li><a href="page-tittle-right.html">Align Right</a></li>
                                                    <li><a href="page-tittle-center.html">Align Center</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="page-tittle-bg.html">Stactic Background</a></li>
                                            <li><a href="page-tittle-parallax.html">Parallax</a></li>
                                            <li><a href="page-tittle-kenburn.html">Kenburn</a></li>
                                            <li><a href="page-tittle-video.html">Video</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu"><a href="javascript:void(0);">Page loader <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="loader1.html">Page Loader 1</a></li>
                                            <li><a href="loader2.html">Page Loader 2</a></li>
                                            <li><a href="loader3.html">Page Loader 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mega-menu">
                                <a class="dropdown-toggle" href="javascript:void(0);">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul>
                                                    <li><a href="about-1.html">About us 1</a></li>
                                                    <li><a href="about-2.html">About us 2</a></li>
                                                    <li><a href="about-3.html">About us 3</a></li>
                                                    <li><a href="about-me.html">About Me</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul>
                                                    <li><a href="services-1.html">Services 1</a></li>
                                                    <li><a href="services-2.html">Services 2</a></li>
                                                    <li><a href="services-3.html">Services 3</a></li>
                                                    <li><a href="contact-1.html">Contact Us 1</a></li>
                                                    <li><a href="contact-2.html">Contact Us 2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="login-2.html">Login 2</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="account.html">My Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="categories.html">Categories</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="product-single.html">Prodct Single</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mega-menu">
                                <a class="dropdown-toggle" href="javascript:void(0);">Elements <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul>
                                                    <li><a href="accordion.html">Accordion</a></li>
                                                    <li><a href="buttons.html">Buttons</a></li>
                                                    <li><a href="cta.html">Call To Action</a></li>
                                                    <li><a href="columns.html">Columns</a></li>
                                                    <li><a href="content-blocks.html">Content Blocks</a></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul>
                                                    <li><a href="counters.html">Counters</a></li>
                                                    <li><a href="features-box.html">Features Box</a></li>
                                                    <li><a href="forms.html">Forms</a></li>
                                                    <li><a href="icons.html">Icons</a></li>
                                                    <li><a href="media.html">Media</a></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul>
                                                    <li><a href="message-box.html">Message Box</a></li>
                                                    <li><a href="modal.html">Modal</a></li>
                                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                                    <li><a href="progress-bar.html">Prgress Bar</a></li>
                                                    <li><a href="rollover.html">Rollover</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul>
                                                    <li><a href="tabs.html">Tabs</a></li>
                                                    <li><a href="tables.html">Tables</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="testimonial.html">Testimonial</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mega-menu">
                                <a class="dropdown-toggle" href="javascript:void(0);">Portfolio <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="menu-tittle">Grid</li>
                                                    <li><a href="portfolio-grid-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-grid-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-grid-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-grid-5-col.html">5 Columns</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="menu-tittle">Masonry</li>
                                                    <li><a href="portfolio-masonry-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-masonry-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-masonry-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-masonry-5-col.html">5 Columns</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="menu-tittle">Single</li>
                                                    <li><a href="portfolio-single-1.html">Layout 1</a></li>
                                                    <li><a href="portfolio-single-2.html">Layout 2</a></li>
                                                    <li><a href="portfolio-single-3.html">Layout 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">Blog <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="sub-menu left"><a href="javascript:void(0);">Blog Classic</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-classic-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-classic-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="blog-classic-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu left"><a href="javascript:void(0);">Blog Grid <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-grid-2-col.html">2 columns</a></li>
                                            <li><a href="blog-grid-3-col.html">3 columns</a></li>
                                            <li><a href="blog-grid-4-col.html">4 columns</a></li>
                                            <li><a href="blog-grid-masonry.html">Masonry</a></li>
                                            <li><a href="blog-grid-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-grid-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu left"><a href="javascript:void(0);">Blog Card <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-card-2-col.html">2 columns</a></li>
                                            <li><a href="blog-card-3-col.html">3 columns</a></li>
                                            <li><a href="blog-card-4-col.html">4 columns</a></li>
                                            <li><a href="blog-card-masonry.html">Masonry</a></li>
                                            <li><a href="blog-card-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-card-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu left"><a href="javascript:void(0);">Blog List <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="blog-list-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu left"><a href="javascript:void(0);">Blog Default<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-default-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-default-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="blog-default-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu left"><a href="javascript:void(0);">Single Post <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="single-post-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="single-post-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="single-post-full-width.html">Full Width</a></li>
                                        </ul>
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
    
        
    
