<!DOCTYPE html>
@if(App::getLocale() == 'ar')

    <html lang="ar" dir="rtl">
    @else
        <html lang="en" dir="ltr">
        @endif

        <head>
            <style>
                .dropbtn {

                    color: #000000;
                    font-weight: bold;
                    font-size: 14px;
                    border:none;
                    cursor: pointer;
                }

                .dropdown {
                    position: relative;
                    display: inline-block;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                }

                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown-content a:hover {background-color: #f1f1f1}

                .dropdown:hover .dropdown-content {
                    display: block;
                }

                .dropdown:hover .dropbtn {
                    color: #31bccb;
                }
            </style>
            <meta charset="utf-8"/>
            <title>{{trans('home_trans.Masnaaco')}} | @yield('title')</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            <meta http-equiv="Content-type" content="text/html; charset=utf-8">
            <meta content="" name="description"/>
            <meta content="" name="author"/>
            @yield('style')
            <link rel="shortcut icon" href="favicon.ico"/>

            <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/droid-arabic-kufi" type="text/css"/>

            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

            <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>

            <link href="{{asset('admin/assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/animate/animate.min.css')}}" rel="stylesheet" type="text/css"/>
            <!-- END GLOBAL MANDATORY STYLES -->
            <link href="{{asset('admin/assets/plugins/revo-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/revo-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/revo-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/slider-for-bootstrap/css/slider.css')}}" rel="stylesheet" type="text/css"/>
            <!-- END: BASE PLUGINS -->

            @if(App::getLocale()=='ar')
                @notifyCss
                <link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/plugins-rtl.css')}}" rel="stylesheet" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/components-rtl.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/themes/default-rtl.css')}}" rel="stylesheet" id="style_theme" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/custom-rtl.css')}}" rel="stylesheet" type="text/css"/>

            @else
                @notifyCss
                <link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/themes/default.css')}}" rel="stylesheet" id="style_theme" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/custom.css')}}" rel="stylesheet" type="text/css"/>

            @endif

        </head>
        <body class="c-layout-header-fixed c-layout-header-mobile-fixed c-shop-demo-1">

        <header class="c-layout-header c-layout-header-6 c-layout-header-default-mobile c-layout-header-shop-1" data-minimize-offset="80">
            <div class="c-topbar">
                <div class="container">
                    <nav class="c-top-menu">
                        <ul class="c-links c-theme-ul">
                            {{--                    <li><a href="#" class="c-font-dark c-font-uppercase c-font-bold"><i class="fa fa-heart-o"></i> Wishlist</a></li>--}}
                            @guest('industry')
                                @guest('admin')
                                    @if(Route::has('login'))
                                        @guest('user')
                                            <li><a href="{{route('selection')}}"  data-target="#login-form" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">{{trans('home_trans.Sign In')}}</a></li>
                                        @endif
                                    @endguest
                                @endguest
                            @endguest
                            @if(Auth::guard('user')->check())
                                <ul class="dropdown">
                                    <li class="dropbtn">
                                        {{ Auth::guard('user')->user()->name }}
                                    </li>
                                    <li class="dropdown-content">
                                        @if(auth('user')->check())
                                            <a href="{{route('profile.index')}}">{{trans('home_trans.Profile')}}</a>
                                            <a href="{{route('show-orders',auth('user')->id())}}">{{trans('home_trans.Orders')}}</a>
                                            <a href="{{route('logout','user')}}">{{trans('home_trans.Log Out')}}</a>
                                        @endif
                                    </li>
                                </ul>
                            @endif
                            @if(Auth::guard('industry')->check())
                                <ul class="dropdown">
                                    <li class="dropbtn">
                                        {{ Auth::guard('industry')->user()->name }}
                                    </li>
                                    <li class="dropdown-content">
                                        @if(auth('industry')->check())
                                            <a href="{{route('dashboard','industry')}}">{{trans('home_trans.Dashboard')}}</a>
                                            <a href="{{route('profile.index')}}">{{trans('home_trans.Profile')}}</a>
                                            <a href="{{route('logout','industry')}}">{{trans('home_trans.Log Out')}}</a>
                                        @endif
                                    </li>
                                </ul>
                            @endif
                            <li class="c-divider"></li>
                        </ul>
                        <ul class="c-ext  c-theme-ul">
                            <li class="c-lang dropdown c-last">
                                <a href="#">{{trans('home_trans.Language')}}</a>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    @foreach(LaravelLocalization::getSupportedLocales()  as $localeCode => $properties)
                                        <li class="active">
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="c-brand">
                        <a href="{{route('home')}}" class="c-logo">
                            <img src="{{asset('admin/img/logo.png')}}" style="height: 50px" width="120" alt="Masaneco" class="c-desktop-logo">
                            <img src="{{asset('admin/img/logo.png')}}" style="height: 50px" width="100" alt="Masaneco" class="c-desktop-logo-inverse">
                            <img src="{{asset('admin/img/logo.png')}}" style="height: 40px" width="95" alt="Masaneco" class="c-mobile-logo">
                        </a>
                        <button class="c-topbar-toggler" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                        <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </button>
                    </div>
                </div>
                <div class="c-shop-topbar-level-1  c-bg-grey-1 ">
                    <div class="container">
                        <!-- BEGIN: SHOP TOP LEVEL 1 -->

                        <!-- END: SHOP TOP LEVEL 1 -->
                    </div>
                </div>
            </div>
            <div class="c-navbar" style="background: #42759e !important;">
                <div class="container">
                    <div class="c-navbar-wrapper clearfix">
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                        <nav class="c-mega-menu c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li class="c-active">
                                    <a href="{{ route('home') }}" class="c-link">{{trans('home_trans.Home')}}
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="c-link dropdown-toggle">{{trans('home_trans.Industrial Sectors')}}
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="dropdown-menu   c-menu-type-mega c-menu-type-classic c-mega-menu-offers-mobile" >
                                        <li class="c-mega-menu-collections-col">
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                @foreach(\App\Models\Category::all() as $category)
                                                    <li>
                                                        <a href="{{route('category.product',$category->id)}}">{{$category->name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                    {{--                                    <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">--}}
                                    {{--                                        @foreach(\App\Models\Category::query()->limit(4)->get() as $category)--}}
                                    {{--                                            <li class="c-mega-menu-collections-col c-mega-menu-offers-desktop">--}}
                                    {{--                                                <ul class="dropdown-menu c-menu-type-inline c-mega-menu-offers-img-set">--}}
                                    {{--                                                    <li>--}}
                                    {{--                                                        <h3 class="c-mega-menu-shop-cat-title c-center c-font-bold c-font-uppercase">{{$category->name}}</h3>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="c-mega-menu-offers-img">--}}
                                    {{--                                                        <img src="{{url('category',$category->image)}}" width="100" style="height: 300px" class="c-offers-img-1"/>--}}
                                    {{--                                                        <div class="c-mega-menu-offers-overlay">--}}
                                    {{--                                                            <p class="c-mega-menu-offers-overlay-desc c-font-white"></p>--}}
                                    {{--                                                            <a href="{{route('category.product',$category->id)}}" class="btn c-btn-uppercase c-btn-border-2x c-btn-bold c-btn-white c-btn-square c-font-uppercase ">{{$category->name}}</a>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                </ul>--}}
                                    {{--                                            </li>--}}
                                    {{--                                        @endforeach--}}
                                    {{--                                    </ul>--}}
                                </li>
                                <li>
                                    <a href="{{route('blogs')}}" class="c-link">{{trans('home_trans.News')}}
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('about')}}" class="c-link ">{{trans('home_trans.Who are we ?')}}
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav c-theme-nav c-float-right">
                                <li class="c-search-toggler-wrapper">
                                    <a href="#" class="c-btn-icon c-search-toggler"><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            @include('notify::components.notify')
        </header>

        <div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                        <p>To recover your password please fill in your email address</p>
                        <form>
                            <div class="form-group">
                                <label for="forget-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="c-layout-page" style="margin-top: 155px;">
            @yield('content')
        </div>


        <a name="footer"></a>
        <footer class="c-layout-footer c-layout-footer-7" style="background-color: #0f2d46 !important;">
            <div class="container">
                <div class="c-prefooter">
                    <div class="c-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-left">
                                    <div class="socicon">
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips" data-original-title="Facebook" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-twitter tooltips" data-original-title="Twitter" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-instagram tooltips" data-original-title="Instagram" data-container="body"></a>
                                    </div>
                                </div>
                            </div>
                            {{--                    <div class="col-md-6">--}}
                            {{--                        <div class="c-right">--}}
                            {{--                            <h3 class="c-title c-font-uppercase c-font-bold">Download Mobile App</h3>--}}
                            {{--                            <div class="c-icons">--}}
                            {{--                                <a href="#" class="c-font-30 c-font-green-1 socicon-btn c-bg-grey-1-hover socicon-android tooltips" data-original-title="Android" data-container="body"></a>--}}
                            {{--                                <a href="#" class="c-font-30 c-font-grey-3 socicon-btn c-bg-grey-1-hover socicon-apple tooltips" data-original-title="Apple" data-container="body"></a>--}}
                            {{--                                <a href="#" class="c-font-30 c-font-blue-3 socicon-btn c-bg-grey-1-hover socicon-windows tooltips" data-original-title="Windows" data-container="body"></a>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                    </div>--}}
                        </div>
                    </div>

                    <div class="c-line"></div>

                    <div class="c-body">
                        <div class="row">
                            <div class="col-md-9 col-sm-6 col-xs-12">
                                <ul class="c-links c-theme-ul">
                                    <li><a href="{{route('about')}}">{{trans('home_trans.Who are we ?')}}</a></li>
                                    <li><a href="#">{{trans('home_trans.Shipping companies')}}</a></li>
                                    <li><a href="{{route('blogs')}}">{{trans('home_trans.News')}}</a></li>
                                </ul>
                                <ul class="c-links c-theme-ul">
                                    <li><a href="{{route('all-products')}}">{{trans('home_trans.Products')}}</a></li>
                                    <li><a href="#">{{trans('home_trans.Industrial Sectors')}}</a></li>

                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-title c-font-uppercase c-font-bold">{{trans('home_trans.Contact us')}}</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <p class="c-address c-font-16">{{trans('home_trans.Address')}}: Abu Dhabi
                                    <br/> {{trans('home_trans.Phone Number')}}: +971542733848 <br/> {{trans('home_trans.Email')}} <a href="info@masaneco.ae"><span class="c-theme-color">info@masaneco.ae</span></a>
                                    {{--                                    <br/> <a href="#"><span class="c-theme-color">{{trans('home_trans.Masnaaco')}}</span></a>--}}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{--                    <div class="c-line"></div>--}}

                    {{--                    <div class="c-foot">--}}
                    {{--                        <div class="row">--}}
                    {{--                            <div class="col-md-7">--}}
                    {{--                                <div class="c-content-title-1 c-title-md">--}}
                    {{--                                    <h3 class="c-title c-font-uppercase c-font-bold">{{trans('home_trans.About')}} <span class="c-theme-font">{{trans('home_trans.Masnaaco')}}</span></h3>--}}
                    {{--                                    <div class="c-line-left hide"></div>--}}
                    {{--                                </div>--}}
                    {{--                                <p class="c-text c-font-16 c-font-regular">{{trans('home_trans.We are your masnaaco platform, a leading platform of its kind in the region in terms of displaying factory products, the platform is designed according to the latest international standards, high-level technologies and support services.')}}</p>--}}
                    {{--                            </div>--}}

                    {{--                        </div>--}}
                    {{--                    </div>--}}

                </div>

            </div>

            <div class="c-postfooter c-bg-dark-2" style="background-color: #0d293f  !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-col">
                            <p class="c-copyright c-font-grey">2022 &copy; Masnaaco
                                <span class="c-font-grey-3">All Rights Reserved.</span>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 c-col">
                            <ul class="list-unstyled list-inline pull-right">
                                <li><img class="img-responsive" src="{{asset('admin/assets/base/img/content/payments/light/1.png')}}" width="60" /></li>
                                <li><img class="img-responsive" src="{{asset('admin/assets/base/img/content/payments/light/2.png')}}" width="60" /></li>
                                <li><img class="img-responsive" src="{{asset('admin/assets/base/img/content/payments/light/22.png')}}" width="60" /></li>
                                <li><img class="img-responsive" src="{{asset('admin/assets/base/img/content/payments/light/5.png')}}" width="60" /></li>
                                <li><img class="img-responsive" src="{{asset('admin/assets/base/img/content/payments/light/6.png')}}" width="60" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </footer>



        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div>


        @notifyJs
        <script src="{{asset('admin/assets/global/plugins/excanvas.min.js')}}"></script>

        @yield('scripts')
        <script src="{{asset('admin/assets/plugins/jquery.min.js')}}" type="text/javascript" ></script>
        <script src="{{asset('admin/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript" ></script>
        <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript" ></script>
        <script src="{{asset('admin/assets/plugins/jquery.easing.min.js')}}" type="text/javascript" ></script>
        <script src="{{asset('admin/assets/plugins/reveal-animate/wow.js')}}" type="text/javascript" ></script>
        <script src="{{asset('admin/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript" ></script>


        <script src="{{asset('admin/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/typed/typed.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/js-cookie/js.cookie.js')}}" type="text/javascript"></script>

        <script src="{{asset('admin/assets/base/js/components.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/base/js/components-shop.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/base/js/app.js')}}" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                App.init(); // init core
            });
        </script>

        <script src="{{asset('admin/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                var slider = $('.c-layout-revo-slider .tp-banner');

                var cont = $('.c-layout-revo-slider .tp-banner-container');

                var api = slider.show().revolution({
                    sliderType:"standard",
                    sliderLayout:"fullscreen",
                    responsiveLevels:[2048,1024,778,320],
                    gridwidth: [1240, 1024, 778, 320],
                    gridheight: [868, 768, 960, 720],
                    delay: 15000,
                    startwidth:1170,
                    startheight: App.getViewPort().height,

                    navigationType: "hide",
                    navigationArrows: "solo",

                    touchenabled: "on",
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        onHoverStop:"on",
                        arrows: {
                            style:"circle",
                            enable:true,
                            hide_onmobile:false,
                            hide_onleave:false,
                            tmp:'',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:30,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:30,
                                v_offset:0
                            }
                        }
                    },

                    spinner: "spinner2",

                    fullScreenOffsetContainer: '.c-layout-header',

                    shadow: 0,

                    disableProgressBar:"on",

                    hideThumbsOnMobile: "on",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "on",
                    hideArrowsOnMobile: "on",
                    hideThumbsUnderResolution: 0
                });
            }); //ready
        </script>
        </body>
        </html>
