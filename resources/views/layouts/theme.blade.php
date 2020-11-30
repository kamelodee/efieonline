<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PZRN6LB');</script>
    <!-- End Google Tag Manager -->
    <title>{{ config('app.name', 'Efie online') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
 
    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/bootstrap-submenu.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/leaflet.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/map.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/img/favicon.png') }}" type="image/x-icon" >
    <link rel="stylesheet" type="text/css" href="    {{ asset('assets/css/skins/default.css') }}">
  
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CRoboto:300,400,500,700&amp;display=swap">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{asset('assets/assets/js/ie-emulation-modes-warning.js')}}"></script>
   

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZRN6LB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Main header start -->

@yield('navbar')

<!-- Main header start -->
<div class="sub-nav">
<div class="sub_item"><small><i class="fa fa-building"></i>Apartments</small></div>
<div class="sub_item"><small><i class="fa fa-home"></i>House</small></div>
<div class="sub_item"><small><i class="fa fa-building"></i>Offices</small></div>
<div class="sub_item"><small><i class="fa fa-home"></i> Stores</small></div>
<div class="sub_item"><a href="{{route('rents')}}"><small>Rents</small></a></div>
<div class="sub_item"><a href="{{route('sales')}}"><small>Sales</small></a></div>
</div>


{{-- header end --}}
<main class="py-4">
    @yield('content')
</main>
<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <ul class="contact-info">
                        <li>
                            Kwabenya
                            Ghana 
                        </li>
                        <li>
                            Email: <a href="mailto:sales@hotelempire.com">support@efieonline.com </a>
                        </li>
                        <li>
                            Phone: <a href="tel:+55-417-634-7071">(+233) 0242 38 8852</a>
                        </li>
                        
                    </ul>
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Useful Links</h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <ul class="links">
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>About Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Services</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Properties Details</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>My Account</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Properties Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Popular Posts</h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>


                    <div class="popular-posts">
                       
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <div class="Subscribe-box">
                        <p>Efie online is a classified website focusing exclusively on estate properties, apartments, and rooms for purchase and rental purposes.</p>
                        <form action="#" method="GET">
                            <p>
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                            </p>
                            <p>
                                <button type="submit" name="submitNewsletter" class="btn btn-block button-theme">
                                    Subscribe
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <p class="copy">© 2020 <a href="#">Efie Online</a> </p>
            </div>
        </div>
    </div>
</footer>
<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="/">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-submenu.j')}}s"></script>
<script src="{{asset('assets/js/rangeslider.js')}}"></script>
<script src="{{asset('assets/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollUp.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/leaflet.js')}}"></script>
<script src="{{asset('assets/js/leaflet-providers.js')}}"></script>
<script src="{{asset('assets/js/leaflet.markercluster.js')}}"></script>
<script src="{{asset('assets/js/dropzone.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.filterizr.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
<script src="{{asset('assets/js/maps.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
 
    @yield('scripts')
</html>
