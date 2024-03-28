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
                    border: none;
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
                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                    z-index: 1;
                }

                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown-content a:hover {
                    background-color: #f1f1f1
                }

                .dropdown:hover .dropdown-content {
                    display: block;
                }

                .dropdown:hover .dropbtn {
                    color: #31bccb;
                }
            </style>
            <meta charset="utf-8"/>
            <title>{{trans('home_trans.Gold Store')}} | @yield('title')</title>
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
            <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
                  rel="stylesheet">

            <link
                href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all'
                rel='stylesheet' type='text/css'>

            <link href="{{asset('admin/assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet"
                  type="text/css"/>
            <link href="{{asset('admin/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
                  type="text/css"/>
            <link href="{{asset('admin/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
                  type="text/css"/>
            <link href="{{asset('admin/assets/plugins/animate/animate.min.css')}}" rel="stylesheet" type="text/css"/>
            <!-- END GLOBAL MANDATORY STYLES -->
            <link href="{{asset('admin/assets/plugins/revo-slider/css/settings.css')}}" rel="stylesheet"
                  type="text/css"/>
            <link href="{{asset('admin/assets/plugins/revo-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('admin/assets/plugins/revo-slider/css/navigation.css')}}" rel="stylesheet"
                  type="text/css"/>
            <link href="{{asset('admin/assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet"
                  type="text/css"/>
            <link href="{{asset('admin/assets/plugins/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet"
                  type="text/css"/>
            <link href="{{asset('admin/assets/plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet"
                  type="text/css"/>
            <link href="{{asset('admin/assets/plugins/slider-for-bootstrap/css/slider.css')}}" rel="stylesheet"
                  type="text/css"/>
            <!-- END: BASE PLUGINS -->

            @if(App::getLocale()=='ar')
                @notifyCss
                <link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/plugins-rtl.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/components-rtl.css')}}" id="style_components"
                      rel="stylesheet" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/themes/default-rtl.css')}}" rel="stylesheet"
                      id="style_theme" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/custom-rtl.css')}}" rel="stylesheet"
                      type="text/css"/>

            @else
                @notifyCss
                <link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
                      type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/components.css')}}" id="style_components"
                      rel="stylesheet" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/themes/default.css')}}" rel="stylesheet"
                      id="style_theme" type="text/css"/>
                <link href="{{asset('admin/assets/demos/default/css/custom.css')}}" rel="stylesheet" type="text/css"/>

            @endif

        </head>
        <body
            class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">

        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
            <div class="c-topbar c-topbar-light">
                <div class="container">
                    <!-- BEGIN: INLINE NAV -->
                    <nav class="c-top-menu c-pull-left">
                        <ul class="c-icons c-theme-ul">
                            <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-social-dribbble"></i></a></li>
                            <li class="hide"><span>Phone: +99890345677</span></li>
                        </ul>
                    </nav>
                    <!-- END: INLINE NAV -->
                    <!-- BEGIN: INLINE NAV -->
                    <nav class="c-top-menu c-pull-right">
                        <ul class="c-links c-theme-ul">
                            <li><a href="#">Help</a></li>
                            <li class="c-divider">|</li>
                            <li><a href="#">Contact</a></li>
                            <li class="c-divider">|</li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                        <ul class="c-ext c-theme-ul">
                            <li class="c-lang dropdown c-last">
                                @if(App::getLocale() == 'ar')
                                <a href="#">{{trans('home_trans.ar')}}</a>
                                @else
                                    <a href="#">{{trans('home_trans.en')}}</a>
                                @endif
                                <ul class="dropdown-menu pull-right" role="menu">
                                    @foreach(LaravelLocalization::getSupportedLocales()  as $localeCode => $properties)
                                    <li>
                                        <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="c-search hide">
                                <!-- BEGIN: QUICK SEARCH -->
                                <form action="#">
                                    <input type="text" name="query" placeholder="search..." value=""
                                           class="form-control" autocomplete="off">
                                    <i class="fa fa-search"></i>
                                </form>
                                <!-- END: QUICK SEARCH -->
                            </li>
                        </ul>
                    </nav>
                    <!-- END: INLINE NAV -->
                </div>
            </div>
            <div class="c-navbar">
                <div class="container">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="index.html" class="c-logo">
                                <img src="{{asset('admin/assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO"
                                     class="c-desktop-logo">
                                <img src="{{asset('admin/assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO"
                                     class="c-desktop-logo-inverse">
                                <img src="{{asset('admin/assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO"
                                     class="c-mobile-logo">
                            </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button class="c-search-toggler" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="c-cart-toggler" type="button">
                                <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span>
                            </button>
                        </div>
                        <!-- END: BRAND -->
                        <!-- BEGIN: QUICK SEARCH -->
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value=""
                                   class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                        <!-- END: QUICK SEARCH -->
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- BEGIN: MEGA MENU -->
                        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li>
                                    <a href="{{route('home')}}" class="c-link dropdown-toggle">{{trans('home_trans.Home')}}<span class="c-arrow c-toggler"></span></a>
                                </li>
                                <li class="c-menu-type-classic">
                                    <a href="javascript:;" class="c-link dropdown-toggle">الاقسام<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Headers<span class="c-arrow c-toggler"></span></a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="home-header-1.html">Home Header v1</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-1-ext.html">Home Header v1 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-2.html">Home Header v2</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-2-ext.html">Home Header v2 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-3.html">Home Header v3</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-4.html">Home Header v4</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-4-ext.html">Home Header v4 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-5.html">Home Header v5</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-5-ext.html">Home Header v5 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-6.html">Home Header v6</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-6-ext.html">Home Header v6 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-7.html">Home Header v7</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-8.html">Home Header v8</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-1.html">Inner Header v1</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-1-ext.html">Inner Header v1 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-2.html">Inner Header v2</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-2-ext.html">Inner Header v2 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-3.html">Inner Header v3</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-4.html">Inner Header v4</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-5.html">Inner Header v5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Sidebar Menu<span class="c-arrow c-toggler"></span></a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="sidebar-menu-1.html">Sidebar Menu v1</a>
                                                </li>
                                                <li>
                                                    <a href="sidebar-menu-2.html">Sidebar Menu v2</a>
                                                </li>
                                                <li>
                                                    <a href="sidebar-menu-static.html">Expanded Static Sidebar Menu</a>
                                                </li>
                                                <li>
                                                    <a href="sidebar-menu-right.html">Right Sidebar Menu</a>
                                                </li>
                                                <li>
                                                    <a href="sidebar-menu-fluid.html">Sidebar Menu In Fluid Layout</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Footers<span class="c-arrow c-toggler"></span></a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="footer-1.html#footer">Footer 1</a>
                                                </li>
                                                <li>
                                                    <a href="footer-2.html#footer">Footer 2</a>
                                                </li>
                                                <li>
                                                    <a href="footer-3.html#footer">Footer 3</a>
                                                </li>
                                                <li>
                                                    <a href="footer-4.html#footer">Footer 4</a>
                                                </li>
                                                <li>
                                                    <a href="footer-5.html#footer">Footer 5</a>
                                                </li>
                                                <li>
                                                    <a href="footer-6.html#footer">Footer 6</a>
                                                </li>
                                                <li>
                                                    <a href="footer-7.html#footer">Footer 7</a>
                                                </li>
                                                <li>
                                                    <a href="footer-8.html#footer">Footer 8</a>
                                                </li>
                                                <li>
                                                    <a href="footer-9.html#footer">Footer 9</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Breadcrumbs<span class="c-arrow c-toggler"></span></a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="breadcrumbs-default.html">Breadcrumbs - Default</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-subtitle.html">Breadcrumbs - Sub Title</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-1.html">Breadcrumbs - Bg Image V1</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-2.html">Breadcrumbs - Bg Image V2</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-3.html">Breadcrumbs - Bg Image V3</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-4.html">Breadcrumbs - Bg Image V4</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-5.html">Breadcrumbs - Bg Image V5</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-6.html">Breadcrumbs - Bg Image V6</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-7.html">Breadcrumbs - Bg Image V7</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-8.html">Breadcrumbs - Bg Image V8</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-9.html">Breadcrumbs - Bg Image V9</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-10.html">Breadcrumbs - Bg Image V10</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Cookies Notification Bar<span
                                                    class="c-arrow c-toggler"></span></a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="component-cookies-1.html">Full Width - Top</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-2.html">Full Width - Bottom</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-3.html">Boxed - Dark Square</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-4.html">Boxed - Theme Color Rounded</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-5.html">Boxed - Aligned Top Left</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-6.html">Boxed - Aligned Top Right</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-7.html">Boxed - Aligned Bottom Left</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-8.html">Boxed - Aligned Bottom Right</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="component-smooth-scroll.html">Smooth Scroll Links</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Mega Menu<span class="c-arrow c-toggler"></span></a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="megamenu-light.html">Mega Menu - Light</a>
                                                </li>
                                                <li>
                                                    <a href="megamenu-dark.html">Mega Menu - Dark</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="page-extended-portfolio.html">Multi Level Menu<span
                                                    class="c-arrow c-toggler"></span></a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#">Example Sub Menu<span
                                                            class="c-arrow c-toggler"></span></a>
                                                    <ul class="dropdown-menu c-pull-left">
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="#">Example Sub Menu<span
                                                                    class="c-arrow c-toggler"></span></a>
                                                            <ul class="dropdown-menu c-pull-left">
                                                                <li>
                                                                    <a href="#">Example Link</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Example Link</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Example Link</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Example Link</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="c-link dropdown-toggle">المنتجات<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Page Samples 1</h3>
                                                </li>
                                                <li>
                                                    <a href="page-about-1.html">About Us 1</a>
                                                </li>
                                                <li>
                                                    <a href="page-about-2.html">About Us 2</a>
                                                </li>
                                                <li>
                                                    <a href="page-about-3.html">About Us 3</a>
                                                </li>
                                                <li>
                                                    <a href="page-about-4.html">About Us 4</a>
                                                </li>
                                                <li>
                                                    <a href="page-team.html">Meet The Team</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Page Samples 2</h3>
                                                </li>
                                                <li>
                                                    <a href="page-contact-1.html">Contact Us 1</a>
                                                </li>
                                                <li>
                                                    <a href="page-contact-2.html">Contact Us 2</a>
                                                </li>
                                                <li>
                                                    <a href="page-contact-3.html">Contact Us 3</a>
                                                </li>
                                                <li>
                                                    <a href="page-faq.html">FAQ</a>
                                                </li>
                                                <li>
                                                    <a href="page-faq-2.html">FAQ 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Gallery Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="page-product-launch.html">Product Launch</a>
                                                </li>
                                                <li>
                                                    <a href="page-lightbox-gallery.html">Lightbox Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="page-fullwidth-gallery.html">Full Width Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="page-masonry-gallery.html">Masonry Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="page-index-gallery.html">Gallery Index</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Portfolio Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="page-4col-portfolio.html">4 Columns Portfolio</a>
                                                </li>
                                                <li>
                                                    <a href="page-2col-portfolio.html">2 Columns Portfolio</a>
                                                </li>
                                                <li>
                                                    <a href="page-masonry-portfolio.html">Masonry Portfolio</a>
                                                </li>
                                                <li>
                                                    <a href="page-extended-portfolio.html">Extended Portfolio</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Blog Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="page-blog-list.html">Blog List View</a>
                                                </li>
                                                <li>
                                                    <a href="page-blog-grid.html">Blog Grid View</a>
                                                </li>
                                                <li>
                                                    <a href="page-blog-post.html">Blog Single Post</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li>
                                    <a href="javascript:;" class="c-link dropdown-toggle">الأخبار<span
                                            class="c-arrow c-toggler"></span></a>


                                    <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth"
                                        style="min-width: auto">
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Shop Pages 1</h3>
                                                </li>
                                                <li>
                                                    <a href="shop-home-1.html" target="_blank">Shop Home 1</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-2.html">Shop Home 2</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-3.html">Shop Home 3</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-4.html">Shop Home 4</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-5.html">Shop Home 5</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-6.html">Shop Home 6</a>
                                                </li>
                                                <li class="c-active">
                                                    <a href="shop-home-7.html">Shop Home 7</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-8.html" target="_blank">Shop Home 8</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Shop Pages 2</h3>
                                                </li>
                                                <li>
                                                    <a href="shop-product-list.html">Product List</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-grid.html">Product Grid</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-search.html">Product Search</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-details.html">Product Details 1</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-details-2.html">Product Details 2</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-details-3.html">Product Details 3</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-details-4.html">Product Details 4</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-comparison.html">Product Comparison</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Shop Pages 3</h3>
                                                </li>
                                                <li>
                                                    <a href="shop-product-wishlist.html">Wish List</a>
                                                </li>
                                                <li>
                                                    <a href="shop-customer-account.html">Customer Login/Register</a>
                                                </li>
                                                <li>
                                                    <a href="shop-customer-dashboard.html">Customer Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="shop-order-history.html">Order History</a>
                                                </li>
                                                <li>
                                                    <a href="shop-order-history-2.html">Order History 2</a>
                                                </li>
                                                <li>
                                                    <a href="shop-cart.html">Shopping Cart</a>
                                                </li>
                                                <li>
                                                    <a href="shop-cart-empty.html">Shopping Cart(empty)</a>
                                                </li>
                                                <li>
                                                    <a href="shop-checkout.html">Checkout</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Shop Pages 4</h3>
                                                </li>
                                                <li>
                                                    <a href="shop-checkout-complete.html">Checkout Complete</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-1.html">Shop Components 1</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-2.html">Shop Components 2</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-3.html">Shop Components 3</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-4.html">Shop Components 4</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-5.html">Shop Components 5</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-6.html">Shop Components 6</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-7.html">Shop Components 7</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li>
                                    <a href="javascript:;" class="c-link dropdown-toggle">{{trans('home_trans.Who are we ?')}}<span
                                            class="c-arrow c-toggler"></span></a>


                                    <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                                    <div
                                        class="dropdown-menu c-menu-type-mega c-visible-desktop c-pull-right c-menu-type-fullwidth"
                                        style="min-width: auto">
                                        <ul class="nav nav-tabs c-theme-nav">
                                            <li class="active">
                                                <a href="#megamenu_jango_components" data-toggle="tab">Jango
                                                    Components</a>
                                            </li>
                                            <li>
                                                <a href="#megamenu_base_components" data-toggle="tab">Base
                                                    Components</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="megamenu_jango_components">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tabbed-contents.html">Tabbed
                                                                    Contents</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-1.html">Parallax Blocks
                                                                    1</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-2.html">Parallax Blocks
                                                                    2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-3.html">Parallax Blocks
                                                                    3</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features.html">Feature Blocks</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features-2.html">Feature Blocks 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features-3.html">Feature Blocks 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-latest-works.html">Latest Works</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-latest-items.html">Latest Items</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-tiles.html">Tiles</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-services.html">Services</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-blog-elements.html">Blog Elements</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-counters.html">Counters</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-bars.html">Engage Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-isotope.html">Isotope Gallery</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-isotope-grid.html">Isotope Grid</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-pricing-tables-1.html">Pricing Tables
                                                                    1</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-pricing-tables-2.html">Pricing Tables
                                                                    2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-testimonials.html">Testimonials</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-testimonials-2.html">Testimonials
                                                                    2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-clients.html">Clients</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-abouts.html">About Blocks</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-dividers.html">Dividers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-steps.html">Steps</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-app-showcase.html">App Showcase</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-team.html">Team</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-headings.html">Headings</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-accordions.html">Accordion
                                                                    Contents</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-progress-bars-2.html">Animated
                                                                    Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-subscribe-form-1.html">Subscribe Form
                                                                    Bars</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="megamenu_base_components">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-lists.html">Lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-blockquotes.html">Blockquotes</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-navs.html">Navigations</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-fontawesome-icons.html">Fontawesome
                                                                    Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-simpleline-icons.html">Simple Line
                                                                    Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-glyphicons-icons.html">Glyphicons
                                                                    Icons</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-custom-icons.html">Custom Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-business-custom-icons.html">Custom
                                                                    Business Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-social-icons.html">Social Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-media-embeds.html">Media Embeds</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-labels-badges.html">Labels &
                                                                    Badges</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-colors.html">UI Colors</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-buttons.html">Buttons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-form-controls.html">Form Controls</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-tables.html">Tables</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-modals.html">Modals</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tabs.html">Tabs</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-paginations.html">Paginations</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-panels.html">Panels</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-progress-bars.html">Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-alerts.html">Alerts</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                                    <!-- BEGIN: MOBILE VERSION OF THE TAB MEGA MENU -->
                                    <ul class="dropdown-menu c-menu-type-mega c-visible-mobile">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Jango Components<span
                                                    class="c-arrow c-toggler"></span></a>
                                            <div class="dropdown-menu">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tabbed-contents.html">Tabbed
                                                                    Contents</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-1.html">Parallax Blocks
                                                                    1</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-2.html">Parallax Blocks
                                                                    2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-3.html">Parallax Blocks
                                                                    3</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features.html">Feature Blocks</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features-2.html">Feature Blocks 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features-3.html">Feature Blocks 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-latest-works.html">Latest Works</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-latest-items.html">Latest Items</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-tiles.html">Tiles</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-services.html">Services</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-blog-elements.html">Blog Elements</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-counters.html">Counters</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-bars.html">Engage Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-isotope.html">Isotope Gallery</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-isotope-grid.html">Isotope Grid</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-pricing-tables-1.html">Pricing Tables
                                                                    1</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-pricing-tables-2.html">Pricing Tables
                                                                    2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-testimonials.html">Testimonials</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-testimonials-2.html">Testimonials
                                                                    2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-clients.html">Clients</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-abouts.html">About Blocks</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-dividers.html">Dividers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-steps.html">Steps</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-app-showcase.html">App Showcase</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-team.html">Team</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-headings.html">Headings</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-accordions.html">Accordion
                                                                    Contents</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-progress-bars-2.html">Animated
                                                                    Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-subscribe-form-1.html">Subscribe Form
                                                                    Bars</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Base Components<span
                                                    class="c-arrow c-toggler"></span></a>
                                            <div class="dropdown-menu">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-lists.html">Lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-blockquotes.html">Blockquotes</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-navs.html">Navigations</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-fontawesome-icons.html">Fontawesome
                                                                    Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-simpleline-icons.html">Simple Line
                                                                    Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-glyphicons-icons.html">Glyphicons
                                                                    Icons</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-custom-icons.html">Custom Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-business-custom-icons.html">Custom
                                                                    Business Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-social-icons.html">Social Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-media-embeds.html">Media Embeds</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-labels-badges.html">Labels &
                                                                    Badges</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-colors.html">UI Colors</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-buttons.html">Buttons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-form-controls.html">Form Controls</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-tables.html">Tables</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-modals.html">Modals</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tabs.html">Tabs</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-paginations.html">Paginations</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-panels.html">Panels</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-progress-bars.html">Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-alerts.html">Alerts</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->

                                </li>


                                <li class="c-search-toggler-wrapper">
                                    <a href="#" class="c-btn-icon c-search-toggler"><i class="fa fa-search"></i></a>
                                </li>

                                <li class="c-cart-toggler-wrapper">
                                    <a href="{{route('cart.show')}}" class="c-btn-icon c-cart-toggler"><i
                                            class="icon-handbag c-cart-icon"></i> <span
                                            class="c-cart-number c-theme-bg">{{session()->has('cart')?session()->get('cart')->totalQty:'0'}}</span></a>
                                </li>
                                @guest('user')
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#login-form"
                                       class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold"><i
                                            class="icon-user"></i> {{trans('home_trans.Sign In')}}</a>
                                </li>
                                @endguest
                                @if(Auth::guard('user')->check())
                                <li class="c-menu-type-classic">
                                    <a href="javascript:;" class="c-link dropdown-toggle"> {{ Auth::guard('user')->user()->name }} <span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        @if(auth('user')->check())
                                            <li class="dropdown-submenu">
                                            <a href="{{route('profile.index')}}">{{trans('home_trans.Profile')}}</a>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a href="{{route('show-orders',auth('user')->id())}}">{{trans('home_trans.Orders')}}</a>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a href="{{route('logout','user')}}">{{trans('home_trans.Log Out')}}</a>
                                            </li>
                                        @endif
                                    </ul>
                            @endif
                        </nav>
                        <!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->

                    </div>
                    <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                    <!-- BEGIN: CART MENU -->
                    <div class="c-cart-menu">
                        <div class="c-cart-menu-title">
                            <p class="c-cart-menu-float-l c-font-sbold">{{session()->has('cart')?session()->get('cart')->totalQty:'0'}} item(s)</p>
                            <p class="c-cart-menu-float-r c-theme-font c-font-sbold">${{session()->has('cart')?session()->get('cart')->totalPrice:'0'}} </p>
                        </div>
                        <ul class="c-cart-menu-items">
                            @php
                            $i=1
                            @endphp
                            @if(session()->has('cart'))
                            @foreach(session()->get('cart')->items as $pro_cart)
                            <li>
                                <div class="c-cart-menu-close">
                                    <form action="{{route('cart.remove',$pro_cart['id'])}}" method="post">
                                        @csrf
                                    <button class="c-theme-link btn btn-close">×</button>
                                    </form>
                                </div>

                                <img src="{{asset('images/product/'.json_decode($pro_cart['image'])[0])}}"/>
                                <div class="c-cart-menu-content">
                                    <p>{{$i++}} - <span class="c-item-price c-theme-font">${{$pro_cart['price']}}</span></p>
                                    <a href="shop-product-details-2.html" class="c-item-name c-font-sbold">{{$pro_cart['name']}}</a>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                        <div class="c-cart-menu-footer">
                            <a href="{{route('cart.show')}}"
                               class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
                            <a href="shop-checkout.html"
                               class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
                        </div>
                        @else
                            <div class="c-cart-menu-items">
                                    <div class="c-cart-menu-content c-center">
                                        <i class="fa fa-frown-o c-font-dark c-font-50 c-font-thin "></i>
                                        <h2 class="c-font-thin c-center">{{trans('home_trans.Your Shopping Cart is Empty')}}</h2>
{{--                                        <a href="{{route('home')}}" class="btn c-btn btn-lg c-btn-dark c-btn-square c-font-white c-font-bold c-font-uppercase">{{trans('home_trans.Continue Shopping')}}</a>--}}
                                    </div>
                            </div>
                        @endif
                    </div>
                    <!-- END: CART MENU --><!-- END: LAYOUT/HEADERS/QUICK-CART -->
                </div>
            </div>
        </header>
        <!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->

        <!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                        <p>To recover your password please fill in your email address</p>
                        <form>
                            <div class="form-group">
                                <label for="forget-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="forget-email"
                                       placeholder="Email">
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                        class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">
                                    Submit
                                </button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal"
                                   data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal"
                           class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
        <div class="modal fade c-content-login-form" id="signup-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                        <p>Please fill in below form to create an account with us</p>
                        <form>
                            <div class="form-group">
                                <label for="signup-email" class="hide">Email</label>
                                <input type="email" name="email" class="form-control input-lg c-square" id="signup-email"
                                       placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="signup-username" class="hide">Username</label>
                                <input name="user_name" class="form-control input-lg c-square" id="signup-username"
                                       placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="signup-fullname" class="hide">Fullname</label>
                                <input name="name" class="form-control input-lg c-square" id="signup-fullname"
                                       placeholder="Fullname">
                            </div>
                            <div class="form-group">
                                <label for="signup-country" class="hide">Country</label>
                                <select class="form-control input-lg c-square" name="country" id="country">
                                    <option value="1" hidden="" disabled="" selected="">الدولة</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan">Libyan</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                    <option value="Moldova">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                        class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">
                                    Signup
                                </button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal"
                                   data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/USER/SIGNUP-FORM -->
        <!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
        <div class="modal fade c-content-login-form" id="login-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                        <p>Let's make today a great day!</p>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="login-email" class="hide">Email</label>
                                <input type="email" name="email" class="form-control input-lg c-square" id="login-email" placeholder="Email">
                                <span class="text-danger">@error('email'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="login-password" class="hide">Password</label>
                                <input type="password" name="password" class="form-control input-lg c-square" id="login-password" placeholder="Password">
                                <span class="text-danger">@error('password'){{$message}} @enderror</span>

                            </div>
                            <div class="form-group">
                                <div class="c-checkbox">
                                    <input type="checkbox" id="login-rememberme" class="c-check">
                                    <label for="login-rememberme" class="c-font-thin c-font-17">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                        class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">
                                    Login
                                </button>
                                <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form"
                                   data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                            </div>
                            <div class="clearfix">
                                <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                                    <span>or signup with</span>
                                </div>
                                <ul class="c-content-list-adjusted">
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                            Twitter
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                            <i class="fa fa-facebook"></i>
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-google">
                                            <i class="fa fa-google"></i>
                                            Google
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal"
                           class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/USER/LOGIN-FORM -->

        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page" style="margin-top: 155px;">
            @yield('content')
        </div>

        <!-- END: PAGE CONTAINER -->

        <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
        <a name="footer"></a>
        <footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">

            <div class="container">

                <div class="c-prefooter c-bg-white">

                    <div class="c-head">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-left">
                                    <div class="socicon">
                                        <a href="#"
                                           class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips"
                                           data-original-title="Facebook" data-container="body"></a>
                                        <a href="#"
                                           class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-twitter tooltips"
                                           data-original-title="Twitter" data-container="body"></a>
                                        <a href="#"
                                           class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-youtube tooltips"
                                           data-original-title="Youtube" data-container="body"></a>
                                        <a href="#"
                                           class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-tumblr tooltips"
                                           data-original-title="Tumblr" data-container="body"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="c-right">
                                    <h3 class="c-title c-font-uppercase c-font-bold">Download Mobile App</h3>
                                    <div class="c-icons">
                                        <a href="#"
                                           class="c-font-30 c-font-green-1 socicon-btn c-bg-grey-1-hover socicon-android tooltips"
                                           data-original-title="Android" data-container="body"></a>
                                        <a href="#"
                                           class="c-font-30 c-font-grey-3 socicon-btn c-bg-grey-1-hover socicon-apple tooltips"
                                           data-original-title="Apple" data-container="body"></a>
                                        <a href="#"
                                           class="c-font-30 c-font-blue-3 socicon-btn c-bg-grey-1-hover socicon-windows tooltips"
                                           data-original-title="Windows" data-container="body"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="c-line"></div>

                    <div class="c-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <ul class="c-links c-theme-ul">
                                    <li><a href="#">About Jango</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Promotions</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                                <ul class="c-links c-theme-ul">
                                    <li><a href="#">Blogs</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Stats</a></li>
                                </ul>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-title c-font-uppercase c-font-bold">Latest Tweets</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <div class="c-twitter">
                                    <a class="twitter-timeline"
                                       href="https://twitter.com/themehats"
                                       data-tweet-limit="2"
                                       data-chrome="noheader nofooter noscrollbar noborders transparent">
                                        Loading tweets by @themehats...
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-title c-font-uppercase c-font-bold">Contact Us</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <p class="c-address c-font-16">
                                    25, Lorem Lis Street, Orange <br/> California, US <br/> Phone: 800 123 3456
                                    <br/> Fax: 800 123 3456 <br/> Email: <a href="mailto:info@jango.com"><span
                                            class="c-theme-color">info@jango.com</span></a>
                                    <br/> Skype: <a href="#"><span class="c-theme-color">jango</span></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="c-line"></div>

                    <div class="c-foot">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-font-uppercase c-font-bold">About <span
                                            class="c-theme-font">JANGO</span></h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <p class="c-text c-font-16 c-font-regular">Tolerare unus ducunt ad brevis buxum. Est
                                    alter buxum, cesaris. Eheu, lura! Racanas crescere in emeritis oenipons! Ubi est
                                    rusticus repressor? Lixa grandis clabulare est. Eposs tolerare.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-font-uppercase c-font-bold">Subscribe to Newsletter</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <div class="c-line-left hide"></div>
                                <form action="#">
                                    <div class="input-group input-group-lg c-square">
                                        <input type="text"
                                               class="form-control c-square c-font-grey-3 c-border-grey c-theme"
                                               placeholder="Your Email Here"/>
                                        <span class="input-group-btn">
					            	<button
                                        class="btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16"
                                        type="button">Subscribe</button>
					        	</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="c-postfooter c-bg-dark-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-col">
                            <p class="c-copyright c-font-grey">2015 &copy; JANGO
                                <span class="c-font-grey-3">All Rights Reserved.</span>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 c-col">
                            <ul class="list-unstyled list-inline pull-right">
                                <li><img class="img-responsive"
                                         src="{{asset('admin/assets/base/img/content/payments/light/1.png')}}"
                                         width="60"/></li>
                                <li><img class="img-responsive"
                                         src="{{asset('admin/assets/base/img/content/payments/light/2.png')}}"
                                         width="60"/></li>
                                <li><img class="img-responsive"
                                         src="{{asset('admin/assets/base/img/content/payments/light/22.png')}}"
                                         width="60"/></li>
                                <li><img class="img-responsive"
                                         src="{{asset('admin/assets/base/img/content/payments/light/5.png')}}"
                                         width="60"/></li>
                                <li><img class="img-responsive"
                                         src="{{asset('admin/assets/base/img/content/payments/light/6.png')}}"
                                         width="60"/></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- END: LAYOUT/FOOTERS/FOOTER-6 -->

        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

        @notifyJs
        <script src="{{asset('admin/assets/global/plugins/excanvas.min.js')}}"></script>

        @yield('scripts')
        <script src="{{asset('admin/assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/jquery.easing.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/reveal-animate/wow.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js')}}"
                type="text/javascript"></script>


        <script src="{{asset('admin/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/owl-carousel/owl.carousel.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/counterup/jquery.waypoints.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/counterup/jquery.counterup.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/fancybox/jquery.fancybox.pack.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/typed/typed.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/js-cookie/js.cookie.js')}}" type="text/javascript"></script>

        <script src="{{asset('admin/assets/base/js/components.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/base/js/components-shop.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/base/js/app.js')}}" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                App.init(); // init core
            });
        </script>

        <script src="{{asset('admin/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')}}"
                type="text/javascript"></script>
        <script
            src="{{asset('admin/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"
            type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js')}}"
                type="text/javascript"></script>
        <!-- END: THEME SCRIPTS -->

        <!-- BEGIN: PAGE SCRIPTS -->
        <script src="{{asset('admin/assets/demos/default/js/scripts/revo-slider/shop-slider-4.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/isotope/isotope.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/isotope/imagesloaded.pkgd.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/plugins/isotope/packery-mode.pkgd.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('admin/assets/demos/default/js/scripts/pages/isotope-grid.js')}}"
                type="text/javascript"></script>
        <!-- END: PAGE SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
        </body>
        </html>
