@extends('frontend.parent-new')
@section('title')
    {{trans('home_trans.All Products')}}
@endsection
@section('content')
    <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">{{trans('home_trans.All Products')}}</h3>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li><a href="{{route('home')}}">{{trans('home_trans.Home')}}</a></li>
                <li>/</li>
                <li class="c-state_active">{{trans('home_trans.All Products')}}</li>

            </ul>
        </div>
    </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <div class="container">
        <div class="c-layout-sidebar-menu c-theme ">
            <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
            <div class="c-sidebar-menu-toggler">
                <h3 class="c-title c-font-uppercase c-font-bold">Navigation</h3>
                <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                    <span class="c-line"></span>
                    <span class="c-line"></span>
                    <span class="c-line"></span>
                </a>
            </div>

            <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                <li class="c-dropdown c-active c-open">
                    <a href="javascript:;" class="c-toggler">{{trans('home_trans.Category')}}<span class="c-arrow"></span></a>
                    <ul class="c-dropdown-menu">
                        @foreach($categories as $category)
                        <li class="c-line">
                            <a href="{{route('category.product',$category)}}">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
{{--                <li class="c-dropdown">--}}
{{--                    <a href="javascript:;" class="c-toggler">{{trans('home_trans.Industries')}}<span class="c-arrow"></span></a>--}}
{{--                    <ul class="c-dropdown-menu">--}}
{{--                        <li>--}}
{{--                            @foreach($industries as $industry)--}}
{{--                            <a href="#">{{$industry->name}}</a>--}}
{{--                            @endforeach--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>


        </div>
        <div class="c-layout-sidebar-content ">
            <div class="container-fluid">
            <form action="{{route('all-products')}}" method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control c-square c-theme-border" placeholder="{{trans('home_trans.Search')}}">
                    <span class="input-group-btn">
                                <button class="btn c-theme-btn c-theme-border c-btn-square" type="submit">{{trans('home_trans.Search')}}!</button>
                            </span>
                </div>
            </form>
            </div>
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
{{--            <div class="c-shop-result-filter-1 clearfix form-inline">--}}
{{--                <div class="c-filter">--}}
{{--                    <label class="control-label c-font-16">Show:</label>--}}
{{--                    <select class="form-control c-square c-theme c-input">--}}
{{--                        <option value="#?limit=24" selected="selected">24</option>--}}
{{--                        <option value="#?limit=25">25</option>--}}
{{--                        <option value="#?limit=50">50</option>--}}
{{--                        <option value="#?limit=75">75</option>--}}
{{--                        <option value="#?limit=100" selected>100</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div><!-- END: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->--}}
            <div class="c-margin-t-20"></div>
            <!-- BEGIN: CONTENT/SHOPS/SHOP-2-7 -->
            <div class="c-bs-grid-small-space">
                <div class="row">
                    @foreach($products as $product)

                    <div class="col-md-3 col-sm-6 c-margin-b-20">
                        <div class="c-content-product-2 c-bg-white c-border">
                            <div class="c-content-overlay">
                                @if($product->created_at >= \Illuminate\Support\Carbon::now()->subDay(4))
                                <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">{{trans('home_trans.New')}}</div>
                                @endif
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <a href="{{route('show-product',$product->id)}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">{{trans('home_trans.View')}}</a>
                                    </div>
                                </div>
                                <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('images/product/'.json_decode($product->image)[0])}});"></div>
                            </div>

                            <div class="btn-group btn-group-justified" role="group">
                                <div class="btn-group c-border-top" role="group">
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">{{$product->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div><!-- END: CONTENT/SHOPS/SHOP-2-7 -->

            <div class="c-margin-t-20"></div>
            <ul class="pager">
                {{$products->links()}}
            </ul>			<!-- END: PAGE CONTENT -->
        </div>
    </div>

@endsection
