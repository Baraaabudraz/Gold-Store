@extends('frontend.parent-new')
@section('title',trans('home_trans.Profile'))
@section('content')
    <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">{{trans('home_trans.My Dashboard')}}</h3>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li><a href="{{route('home')}}">{{trans('home_trans.Home')}}</a></li>
                <li>/</li>
                <li class="c-state_active">{{trans('home_trans.Profile')}}</li>

            </ul>
        </div>
    </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->

    <div class="container">
        <div class="c-layout-sidebar-menu c-theme ">
            <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
            <div class="c-sidebar-menu-toggler">
                <h3 class="c-title c-font-uppercase c-font-bold">{{trans('home_trans.Profile')}}</h3>
                <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                    <span class="c-line"></span> <span class="c-line"></span> <span class="c-line"></span>
                </a>
            </div>

            <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                <li class="c-dropdown c-open">
                    <a href="javascript:;" class="c-toggler">{{trans('home_trans.Profile')}}<span class="c-arrow"></span></a>
                    <ul class="c-dropdown-menu">
                        <li class="c-active">
                            <a href="{{route('profile.index')}}">{{trans('home_trans.My Dashboard')}}</a>
                        </li>
                        <li class="">
                            @if(Auth::guard('user')->check())
                                <a href="{{ route('profile.edit',$users->id) }}">{{trans('home_trans.Edit Profile')}}</a>
                            @else
                            <a href="{{route('profile.edit_industry',Auth::id())}}">{{trans('home_trans.Edit Profile')}}</a>
                            @endif
                        </li>
                        @auth('user')
                            <li class="">
                                <a href="{{route('show-orders',$users->id)}}">{{trans('home_trans.Orders')}}</a>
                            </li>
                        @endauth
                    </ul>
                </li>
            </ul><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
        </div>
        <div class="c-layout-sidebar-content ">
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
            @auth('user')
            <div class="c-content-title-1">
                <h3 class="c-font-uppercase c-font-bold">{{trans('home_trans.My Dashboard')}}</h3>
                <div class="c-line-left"></div>
                <section class="bg-light">
                        <div class="row">
                            <div class="col-lg-12 mb-4 mb-sm-5">
                                <div class="card card-style1 border-0">
                                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <img src="{{asset('images/admin/avatar2.png/')}}" alt="...">
                                            </div>
                                            <div class="col-lg-6 px-xl-10">
                                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                    <h3 class="h2 text-white mb-0" style="background-color:#0a6aa1; border-radius: 10px;  color: white;" align="center">{{auth()->user()->name}}</h3>
                                                </div>
                                                <ul class="list mb-1-9">
                                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><strong>{{trans('home_trans.User Name')}}:</strong></span>{{auth()->user()->user_name}}</li>
                                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><strong>{{trans('home_trans.Email')}}:</strong></span>{{auth()->user()->email}}</li>
                                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><strong>{{trans('home_trans.Country')}}:</strong></span>{{auth()->user()->country}}</li>
                                                    <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600"><strong>{{trans('home_trans.Phone Number')}}:</strong></span> {{auth()->user()->mobile}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </section>
            </div>
            @else
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">{{trans('home_trans.My Dashboard')}}</h3>
                        <div class="c-line-left"></div>
                        <section class="bg-light">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <img src="{{asset('cms/img/industry.png')}}" style="height: 200px"  alt="...">
                                                </div>
                                                <div class="col-lg-6 px-xl-10">
                                                    <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-white mb-0" style="background-color:#0a6aa1; border-radius: 10px;  color: white;" align="center">{{auth()->user()->name}}</h3>
                                                    </div>
                                                    <ul class="list mb-1-9">

                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"> <strong>{{trans('home_trans.Email')}}: </strong></span>{{auth()->user()->email}}</li>
                                                        {{--                                                @php--}}
                                                        {{--                                                    $data = json_decode(auth()->user()->address,true);--}}
                                                        {{--                                                @endphp--}}

                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><strong>{{trans('home_trans.Address')}}: </strong></span>{{auth()->user()->address}}</li>


                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><strong>{{trans('home_trans.Industrial Area')}}: </strong></span>{{auth()->user()->industrial_area}}</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600"><strong>{{trans('home_trans.Phone Number')}}: </strong></span>{{auth()->user()->industry_phone}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>

                </div>
            @endauth

            </div><!-- END: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
            <!-- END: PAGE CONTENT -->
        </div>
@endsection
