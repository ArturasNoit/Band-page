</div>
    <!-- Modal Start -->
    <div class="modal fade modal-center" id="login" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body no-pdd">
                    <div class="login-panel pdd-horizon-15 pdd-vertical-30">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="left-panel border right">
                                    <h3 class="mrg-btm-30 mrg-top-15">Sign In</h3>
                                    <form>
                                    {{ csrf_field() }}
                                        <div class="form-wrapper">
                                            <label><b>User Name</b></label>
                                            <input type="text" class="form-control width-90" placeholder="Username">
                                        </div>
                                        <div class="form-wrapper">
                                            <label><b>Password</b></label>
                                            <input type="password" class="form-control width-90" placeholder="Password">
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" name="remember" id="check1" {{ old('remember') ? 'checked' : '' }}>
                                            <!-- <input type="checkbox" name="group1" id="check1"> -->
                                            <label for="check1"><span class="text-grey">Remember Password</span></label>
                                        </div>
                                        <input class="btn btn-md btn-theme mrg-vertical-20" type="submit" value="Sign in">
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="right-panel text-center">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <h3 class="mrg-btm-30 mrg-top-70">Connect With</h3>
                                            <a class="card no-mrg-btm padding-15 display-block text-center text-facebook hover-facebook" href="#">  
                                                <i class="ei ei-facebook"></i> <b class="font-secondary ls-1">FACEBOOK</b>
                                            </a>
                                            <div class="mrg-vertical-20">
                                                or
                                            </div>
                                            <a class="card no-mrg-btm padding-15 display-block text-center text-google-plus hover-google-plus" href="javascript:void(0);">    
                                                <i class="ei ei-google-plus"></i> <b class="font-secondary ls-1">GOOGLE PLUS</b>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-close">
                        <button type="button" class="btn icon-btn-md icon-btn-round btn-dark lh-0" data-dismiss="modal"><i class="ei ei-close"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Footer Start -->
    <section class="footer-default footer-reveal">
        <div class="footer-reveal-wrapper">
            <div class="container">
                <div class="row mrg-btm-30">
                    <div class="col-md-3">
                        <div class="widget widget-about">
                            <img class="img-responsive" src="assets/images/logo/logo-1.png" alt="">
                            <p class="mrg-top-30">Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div><!-- /widget-about -->
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <div class="widget widget-link">
                            <h3 class="widget-tittle">Useful Link</h3>
                            <div class="row mrg-btm-30">
                                <div class="col-md-6">
                                    <ul class="link">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="link">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="widget widget-news">
                            <h3 class="widget-tittle">News</h3>
                            <div class="news-item">
                                <div class="news-media">
                                    <img class="img-responsive" src="{{ asset('images/news-1.jpg')}}" alt="">
                                </div>
                                <div class="news-info">
                                    <a href="#" class="news-tittle">Feel the Inovation</a>
                                    <span class="news-meta">By <a href="#" class="author">Hendry Chew</a> 3 April</span>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-media">
                                    <img class="img-responsive" src="{{ asset('images/news-2.jpg')}}" alt="">
                                </div>
                                <div class="news-info">
                                    <a href="#" class="news-tittle">Feel the Inovation</a>
                                    <span class="news-meta">By <a href="#" class="author">Hendry Chew</a> 3 April</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <span class="copyright"><img class="pdd-right-10" src="{{ asset('images/logo/logo-3.png')}}" alt="eastern"> Copyright © 2016 Eastern. <a href="../../wrapbootstrap.com/user/Nate93.html">Theme_Nate</a></span>    
                    <ul class="social-btn pull-right mrg-top-5">
                        <li><a href="#" class="btn btn-gray icon-btn-sm icon-btn-round"><i class="ei ei-facebook"></i></a></li>
                        <li><a href="#" class="btn btn-gray icon-btn-sm icon-btn-round"><i class="ei ei-twitter"></i></a></li>
                        <li><a href="#" class="btn btn-gray icon-btn-sm icon-btn-round"><i class="ei ei-google-plus"></i></a></li>
                        <li><a href="#" class="btn btn-gray icon-btn-sm icon-btn-round"><i class="ei ei-dribble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->


<!-- Jquery Plugins -->
    <script type="text/javascript" src="{{ asset('js/compressed.js')}}"></script>
    
    <!--[if lt IE 9]>
    <script src="assets/plugins/ie/html5shiv.js"></script>
    <script src="assets/plugins/ie/respond.min.js"></script>
    <![endif]-->
    
    <!-- Revolution Slider Plugins -->
    <script type="text/javascript" src="{{ asset('plugins/rs-plugin/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/rs-plugin/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    
    <!-- Revolution Slider Plugins Extension (you can remove this part when item on live server) -->
    <script type="text/javascript" src="{{ asset('plugins/rs-plugin/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/rs-plugin/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
   	<script type="text/javascript" src="{{ asset('plugins/rs-plugin/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/rs-plugin/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/rs-plugin/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/rs-plugin/revolution/js/extensions/revolution.extension.navigation.min.j')}}s"></script>
    <script type="text/javascript" src="{{ asset('plugins/rs-plugin/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/rs-plugin/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    
    <!-- Revolution Slider setting -->
    <script>
        revapi = jQuery('.rev-banner-fullscreen').revolution({
            sliderType: "standard",
            sliderLayout: "fullscreen",
            responsiveLevels: [1199, 992, 768, 480],
            visibilityLevels: [1199, 992, 768, 480],
            gridwidth: [1199, 992, 768, 480],
            gridheight: [868, 768, 960, 720],
            lazyType: "smart",
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            parallax: {
                type:"mouse+scroll",
                origo: "slidercenter",
                speed: 700,
                levels: [1, 2, 3, 4, 5, 6, 8, 10, 20, 25, 30, 35, 40, 45, 50, 47, 48, 49, 50, 51, 55],
                disable_onmobile: "on"
            },
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            },
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                keyboardNavigation: "off",
                mouseScrollNavigation: "off",
                onHoverStop: "on",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                bullets: {
                    enable: true,
                    style: "zeus",
                    hide_onleave: true,
                    hide_onmobile: true,
                    hide_under: 768,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    v_offset: 30,
                    space: 10,
                    tmp: '<span class="tp-bullet-inner"></span>'
                },
                arrows: {
                    style: "hephaistos",
                    enable: true,
                    hide_onleave: true,
                    hide_onmobile: true,
                    hide_under: 768,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '<div class="tp-title-wrap">   <span class="tp-arr-titleholder"></span> </div>',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    }
                }
            }
        });
    </script>
     
    <!-- Java Scripts -->

    <!-- <script type="text/javascript" src="{{ asset('js/google-map.js')}}"></script>
         <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
    <script type="text/javascript" src="{{ asset('js/email.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
    
    <script type="text/javascript" src="{{ asset('js/style-switcher.js')}}"></script>
</body>
</html>