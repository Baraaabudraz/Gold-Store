@extends('frontend.parent-new')
@section('title',trans('home_trans.Wishlist'))
@section('content')
		<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
	<div class="container">
		<div class="c-page-title c-pull-left">
			<h3 class="c-font-uppercase c-font-sbold">{{trans('home_trans.Wishlist')}}</h3>
			<h4 class="">{{trans('home_trans.My wishlist products')}}</h4>
		</div>
		<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
															<li><a href="{{route('home')}}">{{trans('home_trans.Home')}}</a></li>
			<li>/</li>
															<li class="c-state_active">{{trans('home_trans.Wishlist')}}</li>

		</ul>
	</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
		<div class="container">
			<div class="c-layout-sidebar-menu c-theme ">
			<!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
<div class="c-sidebar-menu-toggler">
	<h3 class="c-title c-font-uppercase c-font-bold">My Profile</h3>
	<a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
		<span class="c-line"></span> <span class="c-line"></span> <span class="c-line"></span>
	</a>
</div>

                <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                    <li class="c-dropdown c-open">
                        <a href="javascript:;" class="c-toggler">{{trans('home_trans.Profile')}}<span class="c-arrow"></span></a>
                        <ul class="c-dropdown-menu">
                            <li class="">
                                <a href="{{route('profile.index')}}">{{trans('home_trans.My Dashboard')}}</a>
                            </li>
                            <li class="">
                                <a href="{{ route('profile.edit',$users->id) }}">{{trans('home_trans.Edit Profile')}}</a>
                            </li>
                            @auth('user')
                                <li class="">
                                    <a href="{{route('show-orders',$users->id)}}">{{trans('home_trans.Orders')}}</a>
                                </li>
                            @endauth
                            <li class="c-active">
                                <a href="{{route('wishlist.show',$users->id)}}">{{trans('home_trans.Wishlist')}}</a>
                            </li>
                        </ul>
                    </li>
                </ul><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
			</div>
			<div class="c-layout-sidebar-content ">
			<!-- BEGIN: PAGE CONTENT -->
			<div class="c-content-title-1">
	<h3 class="c-font-uppercase c-font-bold">{{trans('home_trans.My wishlist products')}}</h3>
	<div class="c-line-left"></div>
</div>
                @if(session()->has('wishList'))
<div class="c-shop-wishlist-1">
	<div class="c-border-bottom hidden-sm hidden-xs">
		<div class="row">
		<div class="col-md-3">
			<h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">{{trans('home_trans.Products')}}</h3>
		</div>
		<div class="col-md-5">
			<h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">{{trans('home_trans.Description')}}</h3>
		</div>
		<div class="col-md-2">
			<h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">{{trans('home_trans.Price')}}</h3>
		</div>
	</div>
	</div>
	<!-- BEGIN: PRODUCT ITEM ROW -->
	<div class="c-border-bottom c-row-item">

        @foreach($wishList->items as $product)
        <div class="row">
			<div class="col-md-3 col-sm-12">
				<div class="c-content-overlay">
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{route('show-product',$product['id'])}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">{{trans('home_trans.View')}}</a>
						</div>
					</div>
					<div class="c-bg-img-top-center c-overlay-object" data-height="height">
						<img width="100%" class="img-responsive" src="{{asset('images/product/'.json_decode($product['image'])[0])}}">
					</div>
				</div>
			</div>
			<div class="col-md-5 col-sm-8">
				<ul class="c-list list-unstyled">
					<li class="c-margin-b-25"><a href="shop-product-details-2.html" class="c-font-bold c-font-22 c-theme-link">{{$product['name']}}</a></li>
					<li class="c-margin-b-10">{{$product['description']}}</li>
					<li class="c-margin-t-40">
						<div class="form-group" role="group">
							<a href="{{route('add.cart',$product['id'])}}" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold"><i class="fa fa-shopping-cart"></i>{{trans('home_trans.Add to Cart')}}</a>

                            <form action="{{route('wishlist.remove',$product['id'])}}" method="post">
                                @csrf
                            <button class="btn btn-sm btn-danger c-btn-square c-btn-uppercase c-btn-bold">{{trans('home_trans.Remove')}}</button>
                            </form>
                        </div>
					</li>
				</ul>
			</div>
			<div class="col-md-2 col-sm-2">
				<p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">{{trans('home_trans.Price')}}</p>
				<p class="c-font-sbold c-font-uppercase c-font-18">${{$product['price']}}</p>
			</div>
		</div>
        @endforeach
	</div>
	<!-- END: PRODUCT ITEM ROW -->
</div>			<!-- END: PAGE CONTENT -->
			</div>
            @else
                <div class="c-content-box c-size-lg">
                    <div class="container">
                        <div class="c-shop-cart-page-1 c-center">
                            <i class="fa fa-frown-o c-font-dark c-font-50 c-font-thin "></i>
                            <h2 class="c-font-thin c-center">{{trans('home_trans.Your Wishlist is Empty')}}</h2>
                            <a href="{{route('home')}}" class="btn c-btn btn-lg c-btn-dark c-btn-square c-font-white c-font-bold c-font-uppercase">{{trans('home_trans.Home')}}</a>
                        </div>
                    </div>
                </div>
            @endif
		</div>

		<!-- END: LAYOUT/BASE/BOTTOM -->
@endsection
