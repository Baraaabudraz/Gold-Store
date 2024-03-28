@extends('frontend.parent-new')
@section('title',trans('home_trans.Cart'))
@section('content')
	<!-- BEGIN: PAGE CONTAINER -->
		<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
	<div class="container">
		<div class="c-page-title c-pull-left">
			<h3 class="c-font-uppercase c-font-sbold">{{trans('home_trans.Cart')}}</h3>
			<h4 class="">{{trans('home_trans.Shopping Cart')}}</h4>
		</div>
		<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
															<li><a href="{{route('home')}}">{{trans('home_trans.Home')}}</a></li>
			<li>/</li>
															<li class="c-state_active">{{trans('home_trans.Cart')}}</li>

		</ul>
	</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
		<!-- BEGIN: PAGE CONTENT -->
		<!-- BEGIN: CONTENT/SHOPS/SHOP-CART-1 -->
<div class="c-content-box c-size-lg">
	<div class="container">
        @if($cart)
		<div class="c-shop-cart-page-1">
			<div class="row c-cart-table-title">
				<div class="col-md-2 c-cart-image">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">{{trans('home_trans.Image')}}</h3>
				</div>
				<div class="col-md-4 c-cart-desc">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">{{trans('home_trans.Description')}}</h3>
				</div>

				<div class="col-md-1 c-cart-qty">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">{{trans('home_trans.Quantity')}}</h3>
				</div>
				<div class="col-md-2 c-cart-price">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">{{trans('home_trans.Unit Price')}}</h3>
				</div>
				<div class="col-md-1 c-cart-total">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">{{trans('home_trans.Total')}}</h3>
				</div>
				<div class="col-md-1 c-cart-remove"></div>
			</div>
			<!-- BEGIN: SHOPPING CART ITEM ROW -->
                @foreach($cart->items as $product)
			<div class="row c-cart-table-row">
				<h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">{{$product['name']}}</h2>
				<div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
					<img src="{{url('images/product/',json_decode($product['image'])[0])}}"/>
				</div>
				<div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
					<h3><a href="shop-product-details-2.html" class="c-font-bold c-theme-link c-font-22 c-font-dark">{{$product['name']}}</a></h3>
					<p>{{$product['description']}}</p>
				</div>
				<div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">QTY</p>
					<div class="c-input-group c-spinner">
                        <form action="{{route('cart.update',$product['id'])}}" method="post">
                            @csrf
					    <input type="text" class="form-control c-item-1" name="qty" value="{{$product['qty']}}">
					    <div class="c-input-group-btn-vertical">
					    	<button class="btn btn-default" type="button" data_input="c-item-1" data-maximum="10"><i class="fa fa-caret-up"></i></button>
					    	<button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-down"></i></button>
					    </div>
                            <button class="btn c-btn-grey-2 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-circle"><i class="fa fa-sync"></i>update</button>
                        </form>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">{{trans('home_trans.Unit Price')}}</p>
					<p class="c-cart-price c-font-bold">${{$product['price']}}</p>
				</div>
				<div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">{{trans('home_trans.Total')}}</p>
					<p class="c-cart-price c-font-bold">${{$cart->totalPrice}}</p>
				</div>
				<div class="col-md-1 col-sm-12 c-cart-remove">
                    <form action="{{route('cart.remove',$product['id'])}}" method="post">
                        @csrf
                        <button class="btn btn-danger">{{trans('home_trans.Remove item from Cart')}}</button>
                    </form>
				</div>
			</div>
                @endforeach
			<!-- END: SHOPPING CART ITEM ROW -->
			<!-- BEGIN: SUBTOTAL ITEM ROW -->
			<div class="row">
				<div class="c-cart-subtotal-row c-margin-t-20">
					<div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">{{trans('home_trans.Total')}}</h3>
					</div>
					<div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-bold c-font-16">${{$cart->totalPrice}}</h3>
					</div>
				</div>
			</div>
			<!-- END: SUBTOTAL ITEM ROW -->
			<!-- BEGIN: SUBTOTAL ITEM ROW -->
{{--			<div class="row">--}}
{{--				<div class="c-cart-subtotal-row">--}}
{{--					<div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">--}}
{{--						<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Shipping Fee</h3>--}}
{{--					</div>--}}
{{--					<div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">--}}
{{--						<h3 class="c-font-bold c-font-16">$15.00</h3>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
			<!-- END: SUBTOTAL ITEM ROW -->
			<!-- BEGIN: SUBTOTAL ITEM ROW -->
			<div class="row">
				<div class="c-cart-subtotal-row">
					<div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Grand Total</h3>
					</div>
					<div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-bold c-font-16">$261.00</h3>
					</div>
				</div>
			</div>
			<!-- END: SUBTOTAL ITEM ROW -->
			<div class="c-cart-buttons">
				<a href="#" class="btn c-btn btn-lg c-btn-red c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">{{trans('home_trans.Continue Shopping')}}</a>
				<a href="#" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Checkout</a>
			</div>
		</div>
	</div>
    @else
        <div class="c-content-box c-size-lg">
            <div class="container">
                <div class="c-shop-cart-page-1 c-center">
                    <i class="fa fa-frown-o c-font-dark c-font-50 c-font-thin "></i>
                    <h2 class="c-font-thin c-center">{{trans('home_trans.Your Shopping Cart is Empty')}}</h2>
                    <a href="{{route('home')}}" class="btn c-btn btn-lg c-btn-dark c-btn-square c-font-white c-font-bold c-font-uppercase">{{trans('home_trans.Continue Shopping')}}</a>
                </div>
            </div>
        </div>
    @endif
</div><!-- END: CONTENT/SHOPS/SHOP-CART-1 -->

<!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
<div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
	<div class="container">
		<div class="c-content-title-4">
			<h3 class="c-font-uppercase c-center c-font-bold c-line-strike"><span class="c-bg-white">{{trans('home_trans.Most popular')}}</span></h3>
		</div>
		<div class="row">
			<div data-slider="owl">
				<div class="owl-carousel owl-theme c-theme owl-small-space c-owl-nav-center" data-rtl="true" data-items="4" data-slide-speed="8000">
					@foreach($products as $product)
                    <div class="item">
						<div class="c-content-product-2 c-bg-white c-border">
							<div class="c-content-overlay">
                                @if($product->created_at >= \Illuminate\Support\Carbon::now()->subDay(4))
                                    <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">{{trans('home_trans.New')}}</div>
                                @endif
{{--								<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>--}}
								<div class="c-overlay-wrapper">
									<div class="c-overlay-content">
										<a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
									</div>
								</div>
								<div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{url('images/product/',json_decode($product->image)[0])}});"></div>
							</div>
							<div class="c-info">
								<p class="c-title c-font-18 c-font-slim">{{$product->name}}</p>
								<p class="c-price c-font-16 c-font-slim">${{$product->price}} &nbsp;
{{--									<span class="c-font-16 c-font-line-through c-font-red">$600</span>--}}
								</p>
							</div>
							<div class="btn-group btn-group-justified" role="group">
								<div class="btn-group c-border-top" role="group">
									<a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
								</div>
								<div class="btn-group c-border-left c-border-top" role="group">
									<a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">{{trans('home_trans.Add to Cart')}}</a>
								</div>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div><!-- END: CONTENT/SHOPS/SHOP-2-2 -->

<!-- BEGIN: CONTENT/STEPS/STEPS-3 -->
<div class="c-content-box c-size-md c-theme-bg">
    <div class="container">
        <div class="c-content-step-3 c-font-white">
            <div class="row">
                <div class="col-md-4 c-steps-3-block">
                    <i class="fa fa-truck"></i>
                    <div class="c-steps-3-title">
                        <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Free shipping</h2>
                        <em>Express delivery withing 3 days</em>
                    </div>
                    <span>&nbsp;</span>
                </div>
                <div class="col-md-4 c-steps-3-block">
                    <i class="fa fa-gift"></i>
                    <div class="c-steps-3-title">
                        <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Daily Gifts</h2>
                        <em>3 Gifts daily for lucky customers</em>
                    </div>
                    <span>&nbsp;</span>
                </div>
                <div class="col-md-4 c-steps-3-block">
                    <i class="fa fa-phone"></i>
                    <div class="c-steps-3-title">
                        <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">477 505 8877</h2>
                        <em>24/7 customer care available</em>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/STEPS/STEPS-3 -->

		<!-- END: PAGE CONTENT -->
	<!-- END: PAGE CONTAINER -->
@endsection

