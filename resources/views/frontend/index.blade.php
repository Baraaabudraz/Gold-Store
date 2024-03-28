@extends('frontend.parent')
@section('title')
    {{trans('home_trans.Home')}}
@endsection
@section('style')
@endsection
@section('content')
    <section class="c-layout-revo-slider c-layout-revo-slider-13" dir="ltr">
        <div class="tp-banner-container tp-fullscreen">
            <div class="tp-banner rev_slider" data-version="5.0">

                <ul>
                    @foreach($sliders as $key=>$slider)
                        <li class="{{$key   ==  0 ?'active' : ''}}" data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                            <img
                                alt=""
                                src="{{url('images/slider',$slider->image)}}"
                                data-bgposition="center center"
                                data-bgfit="cover"
                                data-bgrepeat="no-repeat"
                            >
                        </li>
                        <!--END -->
                    @endforeach
                    </ul>

                </div>
            </div>
        </section><!-- END: LAYOUT/SLIDERS/SHOP-REVO-SLIDER-1 -->

<!-- BEGIN: CONTENT/SHOPS/SHOP-1-1 -->
        <div class="c-content-box c-size-md c-overflow-hide c-bg-grey-1">
            <div class="c-content-title-4 c-theme">
                <h3 class="c-font-uppercase c-center c-font-bold c-line-strike"><span class="c-bg-grey-1"> {{trans('home_trans.Industrial Sectors')}}</span></h3>
            </div>
            <div class="row">
                <div data-slider="owl">
                    <div class="owl-carousel c-theme owl-reset-space c-owl-nav-center" data-rtl="true" data-items="4">
                        @foreach(App\Models\Category::all() as $category)
                        <div class="item" >
                            <div class="c-content c-content-overlay" style="border: 5px #32c5d2 solid; border-radius: 15px">
                                <div class="c-overlay-wrapper c-overlay-padding">
                                    <div class="c-overlay-content">
                                        <a href="{{route('category.product',$category->id)}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">{{trans('home_trans.View Products')}}</a>
                                    </div>
                                </div>
                                <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{url('/category/',$category->image)}});"></div>
                                <div class="c-overlay-border"></div>
                            </div>
                            <br>
                            <div align="center">
                                <label>{{$category->name}}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
<!-- END: CONTENT/SHOPS/SHOP-1-1 -->

<!-- BEGIN: CONTENT/SHOPS/SHOP-2-1 -->
<div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space c-bg-grey-1">
	<div class="container">
		<div class="c-content-title-4">
			<h3 class="c-font-uppercase c-center c-font-bold c-line-strike"><span class="c-bg-grey-1">{{trans('home_trans.New products')}}</span></h3>

        </div>

		<div class="row">
                @foreach($products as $product)
			<div class="col-md-3 col-sm-6 c-margin-b-20" >
				<div class="c-content-product-2 c-bg-white">
					<div class="c-content-overlay">
                        @if($product->created_at >= \Illuminate\Support\Carbon::now()->subDay(4))
                            <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">{{trans('home_trans.New')}}</div>
                        @endif
						<div class="c-overlay-wrapper">
							<div class="c-overlay-content">
								<a href="{{route('show-product',$product->id)}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square"> {{trans('home_trans.View')}}</a>
							</div>
						</div>
						<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{url('images/product/',json_decode($product->image)[0])}});"></div>
					</div>
					<div class="c-info" align="center">
						<a href="{{route('show-product',$product->id)}}" class="c-title c-font-20 c-font-slim">{{$product->name}}</a>
					</div>

				</div>
			</div>
            @endforeach
		</div>
	</div>
    @if($products->count() > 0)
    <div class="see" align="center">
        <p><a href="{{route('all-products')}}" class="btn btn-lg c-btn-green c-font-uppercase c-font-bold c-btn-circle c-btn-border-2x">{{trans('home_trans.See all Products')}}</a></p>
    </div>
    @endif
    <div class="clear"></div>
</div><!-- END: CONTENT/SHOPS/SHOP-2-1 -->

<!-- BEGIN: CONTENT/SHOPS/SHOP-3-2 -->
<div class="c-content-box c-size-lg c-no-padding c-overflow-hide c-bg-white">
	<div class="c-content-product-3 c-bs-grid-reset-space">
        @foreach($randomItemProducts as $product)
		<div class="row">
			<div class="col-md-4 col-sm-6" >
				<div class="c-wrapper c-theme-bg" style="height: 550px;">
					<div class="c-content c-border c-border-padding c-border-padding-left" >
						<h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">{{$product->name}}</h3>
						<p class="c-description c-font-17 c-font-white">{{ Str::limit($product->description,200)  }}</p>
						<h1 class="c-description c-font-17 c-font-white">{!!Str::limit($product->additional_info,100) !!}</h1>

						<a href="{{route('show-product',$product->id)}}" class="btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x">{{trans('home_trans.View')}}</a>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-6">
				<div class="c-content-overlay">
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{route('show-product',$product->id)}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square"> {{trans('home_trans.View')}}</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url({{url('images/product',json_decode($product->image)[0])}});"></div>
				</div>
			</div>
            @endforeach
		</div>
	</div>
</div><!-- END: CONTENT/SHOPS/SHOP-3-2 -->

<!-- BEGIN: CONTENT/MISC/PROMO-1-4 -->
{{--<div class="c-content-box c-size-lg c-bg-grey-1 c-no-bottom-padding">--}}
{{--	<div class="container">--}}
{{--		<div class="row">--}}
{{--			<div class="c-content-title-1 c-center c-margin-b-80">--}}
{{--				<h3 class="c-font-uppercase c-font-bold">Life Should be Great Rather Than Long</h3>--}}
{{--				<p class="c-font-uppercase c-font-grey-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam <br />nonummy et nibh euismod aliquam erat volutpat.</p>--}}
{{--				<a href="#" class="btn btn-lg c-theme-btn c-btn-square c-font-uppercase">Purchase</a>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}
{{--</div>--}}
<!-- END: CONTENT/MISC/PROMO-1-4 -->

<!-- BEGIN: CONTENT/SHOPS/SHOP-2-3 -->
<div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space" style="background-image: url({{asset('admin/assets/base/img/content/shop-backgrounds/135.jpg')}})">
	<div class="container">
	<div class="c-content-title-1">
		<h3 class="c-font-uppercase c-center c-font-bold"> {{trans('home_trans.Most popular')}}</h3>
		<div class="c-line-center c-theme-bg"></div>
	</div>
		<div class="row">
            @foreach($randomActiveProducts as $product)
			<div class="col-md-3 col-sm-6 c-margin-b-20">
				<div class="c-content-product-2 c-bg-white">
					<div class="c-content-overlay" >
                        @if($product->created_at >= \Illuminate\Support\Carbon::now()->subDay(4))
						<div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">{{trans('home_trans.New')}}</div>
						@endif
                            <div class="c-overlay-wrapper">
							<div class="c-overlay-content">
								<a href="{{route('show-product',$product->id)}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">{{trans('home_trans.View')}} </a>
							</div>
						</div>

						<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 330px; background-image: url({{url('images/product/',json_decode($product->image)[0])}});"></div>
					</div>
                    <div class="btn-group btn-group-justified" role="group">
                        <div class="c-info" align="center">
                            <a href="{{route('show-product',$product->id)}}" class="c-title c-font-20 c-font-slim">{{$product->name}}</a>
                        </div>
                    </div>
{{--                   --}}
{{--                    <div class="btn-group c-border-left c-border-top" role="group">--}}
{{--                        <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">طلب المنتج</a>--}}
{{--                    </div>--}}
{{--                    </div>--}}
				</div>

			</div>
            @endforeach
		</div>
	</div>
</div>
    <div class="c-content-box c-size-md c-bg-white">
        <div class="container">
            <!-- Begin: Testimonals 1 component -->
            <div class="c-content-client-logos-slider-1" data-slider="owl">
                <!-- Begin: Title 1 component -->
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold">{{trans('home_trans.Sponsors')}}</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <!-- End-->
                <!-- Begin: Owlcarousel -->
                <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="5" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="1"  data-auto-play="true" data-rtl="true" data-slide-speed="5000" data-auto-play-hover-pause="true">
                    @foreach($sponsors as $sponsor)
                        <div class="item">
                            <a href="#"><img src="{{url('images/sponsor/',$sponsor->image)}}" width="100" style="height: 100px;" alt=""/></a>
                        </div>
                    @endforeach
                </div>

                <!-- End-->
            </div>
            <!-- End-->
        </div>
    </div>

        <!-- END: CONTENT/SHOPS/SHOP-2-3 -->
		<!-- END: PAGE CONTENT -->

	<!-- END: PAGE CONTAINER -->

@endsection
@section('scripts')


@endsection
