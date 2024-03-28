@extends('frontend.parent-new')
@section('title',trans('home_trans.Orders'))
@section('content')
    <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">{{trans('home_trans.Orders')}}</h3>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li><a href="{{route('home')}}">{{trans('home_trans.Home')}}</a></li>
                <li>/</li>
                <li class="c-state_active">{{trans('home_trans.Orders')}}</li>

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
                        <li class="c-about">
                            <a href="{{route('profile.index')}}">{{trans('home_trans.My Dashboard')}}</a>
                        </li>
                        <li class="">
                            <a href="{{route('profile.edit',Auth::id())}}">{{trans('home_trans.Edit Profile')}}</a>
                        </li>
                        <li class="c-active">
                            <a href="#">{{trans('home_trans.Orders')}}</a>
                        </li>
                    </ul>
                </li>
            </ul><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
<!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
        </div>
        <div class="c-layout-sidebar-content ">
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
            <div class="c-content-title-1">
                <h3 class="c-font-uppercase c-font-bold">{{trans('home_trans.Orders list')}}</h3>
            </div>
            <div class="row c-margin-b-40 c-order-history-2">
                <div class="row c-cart-table-title">
                    <div class="col-md-2 c-cart-image">
                        <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">{{trans('home_trans.Image')}}</h3>
                    </div>

                    <div class="col-md-2 c-cart-desc">
                        <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">{{trans('home_trans.Product Name')}}</h3>
                    </div>
                    <div class="col-md-2 c-cart-desc">
                        <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">{{trans('home_trans.Industry Name')}}</h3>
                    </div>
                    <div class="col-md-2 c-cart-qty">
                        <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">{{trans('home_trans.Quantity')}}</h3>
                    </div>
                    <div class="col-md-2 c-cart-date">
                        <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">{{trans('home_trans.Date Order')}}</h3>
                    </div>
                </div>
                <!-- BEGIN: ORDER HISTORY ITEM ROW -->
                @foreach($order as $orders)
                <div class="row c-cart-table-row">
                    <h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">Item 1</h2>
                    <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                        <img src="{{url('images/product/'.json_decode($orders->product->image)[0])}}"/>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 c-cart-ref">
                        <p>{{$orders->product->name}}</p>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 c-cart-ref">
                        <p>{{$orders->product->industry->name}}</p>
                    </div>

                    <div class="clearfix col-md-2 col-sm-3 col-xs-6 c-cart-price">
                        <p class="c-cart-price c-font-bold">{{$orders->quantity}}</p>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 c-cart-qty">
                        <p>{{$orders->created_at}}</p>
                    </div>
                </div>
                @endforeach
                <!-- END: ORDER HISTORY ITEM ROW -->
                <div class="pager">
                    {{$order->links()}}
                </div>
            </div>

            <!-- END: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
            <!-- END: PAGE CONTENT -->
        </div>
    </div>
@endsection
