@extends('frontend.parent-new')
@section('title')
    {{trans('home_trans.Home')}}
@endsection
@section('style')
@endsection
@section('content')
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: CONTENT/SHOPS/SHOP-6-2 -->
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

        <!-- BEGIN: CONTENT/ISOTOPE/GRID-3 -->
        <div class="c-content-box c-size-md c-bg-img-center" style="background-image: url({{asset('admin/assets/base/img/content/backgrounds/bg-82.jpg')}})">
            <div class="container">
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold c-font-white">Quick Shop</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <div class="c-content-isotope-grid c-opt-3">
                    @foreach($randomActiveProducts as $product)
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" data-height="height" style="height: 270px;" src="{{url('images/product/',json_decode($product->image)[0])}}"/>
                            <div class="c-content-isotope-overlay">
                                <div class="c-content-isotope-overlay-content">
                                    <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">{{$product->name}}</h3>
                                    <p class="c-content-isotope-overlay-price c-font-white c-font-bold">${{$product->price}}</p>
                                    <p class="c-content-isotope-overlay-desc c-font-white">{{$product->description}}</p>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">{{trans('home_trans.Add to Cart')}}</a>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div><!-- END: CONTENT/ISOTOPE/GRID-3 -->

        <!-- BEGIN: CONTENT/SHOPS/SHOP-1-6 -->
        <div class="c-content-box c-size-md">
            <div class="container">
                <div class="c-content-tab-5 c-theme">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills c-nav-tab c-arrow" role="tablist">
                        @foreach($categories as $category)
                        <li role="presentation" class="active">
                            <a class="c-font-uppercase" href="#" aria-controls="{{$category->id}}" role="tab" data-toggle="tab">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Tab panes -->

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="{{$category->id}}">
                            <div class="row">
                                @foreach($categories as $category)
                                <div class="col-sm-4">
                                    <div class="c-content c-content-overlay">
                                        <div class="c-overlay-wrapper c-overlay-padding">
                                            <div class="c-overlay-content">
                                                <a href="{{route('category.product',$category->id)}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">{{trans('home_trans.View')}}</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{url('category/',$category->image)}});"></div>
                                        <div class="c-overlay-border"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="row c-margin-t-30">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-1-6 -->

        <!-- BEGIN: CONTENT/SHOPS/SHOP-4-4 -->
        <div class="c-content-box c-no-padding c-overflow-hide c-bs-grid-reset-space">
            <div class="row">
                @foreach($randomItemProducts as $product)
                <div class="col-md-6 col-sm-6">
                    <div class="c-content-product-4">
                        <div class="col-md-6 col-sm-6">
                            <div class="c-wrapper">
                                <div class="c-side-image" style=" background-image: url({{url('images/product/',json_decode($product->image)[0])}});"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="c-content c-align-right">
                                <h3 class="c-title c-font-bold c-font-35 c-font-dark-1">{{$product->name}}</h3>
                                <p class="c-description c-font-20 c-font-regular">{{$product->description}}</p>
                                <p class="c-price c-font-60 c-font-thin c-font-dark-1">${{$product->price}}</p>
                                <a href="shop-product-details.html" class="btn btn-lg c-btn-dark-1 c-font-uppercase c-btn-square c-btn-border-1x">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($randomActiveProducts->take(1) as $product)
                <div class="col-md-6 col-sm-6">
                    <div class="c-content-product-4 c-bg-dark">
                        <div class="col-md-6 col-sm-6">
                            <div class="c-content c-align-left">
                                <h3 class="c-title c-font-bold c-font-35 c-font-white">{{$product->name}}</h3>
                                <p class="c-description c-font-20 c-font-white">{{$product->description}}</p>
                                <p class="c-price c-font-60 c-font-thin c-font-white">${{$product->price}}</p>
                                <a href="shop-product-details.html" class="btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x">BUY NOW</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="c-wrapper">
                                <div class="c-side-image" style=" background-image: url({{url('images/product/',json_decode($product->image)[0])}});"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-4-4 -->

        <!-- BEGIN: CONTENT/SHOPS/SHOP-2-5 -->
        <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space" style="background-image: url({{asset('admin/assets/base/img/content/shop-backgrounds/139.jpg')}})">
            <div class="container">
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-center c-font-bold">{{trans('home_trans.New products')}}</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-2 col-sm-6 c-margin-b-20">
                        <div class="c-content-product-2 c-bg-white">
                            <div class="c-content-overlay">
{{--                                <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>--}}
                                @if($product->created_at >= \Illuminate\Support\Carbon::now()->subDay(4))
                                <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                @endif
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <a href="{{route('show-product',$product->id)}}" class="btn btn-sm c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">{{trans('home_trans.View')}}</a>
                                    </div>
                                </div>
                                <div class="c-bg-img-top-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{url('images/product/',json_decode($product->image)[0])}});"></div>
                            </div>
                            <div class="c-info">
                                <p class="c-title c-font-17 c-font-slim">{{$product->name}}</p>
                                <p class="c-price c-font-14 c-font-slim">${{$product->price}} &nbsp;
{{--                                    <span class="c-font-14 c-font-line-through c-font-red">${{$product->price}}</span>--}}
                                </p>
                            </div>
                            <div class="btn-group btn-group-justified" role="group">
                                <div class="btn-group c-border-top" role="group">
                                    <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                </div>
                                <div class="btn-group c-border-left c-border-top" role="group">
                                    <a href="{{route('add.cart',$product->id)}}" id="{{$product->id}}" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if($products->count() > 0)
                    <div class="see" align="center">
                        <p><a href="{{route('all-products')}}" class="btn btn-lg c-btn-green c-font-uppercase c-font-bold c-btn-circle c-btn-border-2x">{{trans('home_trans.See all Products')}}</a></p>
                    </div>
                @endif
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-2-5 -->

        <!-- BEGIN: CONTENT/SHOPS/SHOP-3-2 -->
        <div class="c-content-box c-size-lg c-no-padding c-overflow-hide c-bg-white">
            <div class="c-content-product-3 c-bs-grid-reset-space">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="c-wrapper c-theme-bg" style="height: 550px;">
                            <div class="c-content c-border c-border-padding c-border-padding-left">
                                <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">With Theme Color</h3>
                                <p class="c-description c-font-17 c-font-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat.</p>
                                <p class="c-description c-font-17 c-font-white">Dolor sit amet, consectetuer adipiscing elit sed diam nonummy</p>
                                <p class="c-price c-font-55 c-font-white c-font-thin">$249</p>
                                <a href="shop-product-details.html" class="btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url({{asset('admin/assets/base/img/content/shop7/04.png')}});"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-3-2 -->

        <!-- BEGIN: CONTENT/MISC/PROMO-1-4 -->
{{--        <div class="c-content-box c-size-lg c-bg-grey-1 c-no-bottom-padding">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="c-content-title-1 c-center c-margin-b-80">--}}
{{--                        <h3 class="c-font-uppercase c-font-bold">Life Should be Great Rather Than Long</h3>--}}
{{--                        <p class="c-font-uppercase c-font-grey-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam <br />nonummy et nibh euismod aliquam erat volutpat.</p>--}}
{{--                        <a href="#" class="btn btn-lg c-theme-btn c-btn-square c-font-uppercase">Purchase</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- END: CONTENT/MISC/PROMO-1-4 -->

        <!-- BEGIN: CONTENT/SHOPS/SHOP-5-2 -->
        <div class="c-content-box c-size-md c-no-bottom-padding c-overflow-hide c-bs-grid-reset-space">
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold">Recent Promotions</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="c-content-product-5 c-content-overlay">
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <h3 class="c-title c-margin-tb-30 c-font-uppercase c-font-bold c-font-30 c-font-white c-padding-20">
                                            <span class="c-font-thin">Watch</span><br/>Collection
                                        </h3>
                                        <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Shop Now</a>
                                    </div>
                                </div>
                                <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 400px; background-image: url({{asset('admin/assets/base/img/content/shop3/59.jpg')}});"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="c-content-product-5 c-content-overlay">
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <h3 class="c-title c-margin-tb-30 c-font-uppercase c-font-bold c-font-30 c-font-white c-padding-20">
                                            <span class="c-font-thin">Sunglasses</span><br/>Collection
                                        </h3>
                                        <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Shop Now</a>
                                    </div>
                                </div>
                                <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 400px; background-image: url({{asset('admin/assets/base/img/content/shop3/26.jpg')}});"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="c-content-product-5">
                                <div class="c-bg-img-center c-center" style="height:400px;background-image: url({{asset('admin/assets/base/img/content/shop3/05.jpg')}})">
                                    <div class="c-wrapper c-center-vertical">
                                        <h3 class="c-title c-margin-tb-30 c-font-30 c-font-uppercase c-font-bold c-font-white">
                                            <span class="c-line"><span class="c-font-thin">New</span> Collection</span>
                                        </h3>
                                        <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square c-margin-t-20">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="c-content-product-5">
                        <div class="c-bg-img-center" style="height:800px;background-image: url({{asset('admin/assets/base/img/content/shop3/21.jpg')}})">
                            <div class="c-detail c-bg-dark c-bg-opacity-2">
                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Shop Now</a>
                                <h3 class="c-title c-font-uppercase c-font-bold c-font-white c-font-90">Promo</h3>
                                <p class="c-desc c-font-white c-font-17">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam dolore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-5-2 -->

        <!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
        <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
            <div class="container">
                <div class="c-content-title-4">
                    <h3 class="c-font-uppercase c-center c-font-bold c-line-strike"><span class="c-bg-white">Most Popular</span></h3>
                </div>
                <div class="row">
                    <div data-slider="owl">
                        <div class="owl-carousel owl-theme c-theme owl-small-space c-owl-nav-center" data-rtl="true" data-items="4" data-slide-speed="8000">
                            <div class="item">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('admin/assets/base/img/content/shop5/18.png')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-18 c-font-slim">Samsung Galaxy Note 4</p>
                                        <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                            <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('admin/assets/base/img/content/shop5/27.png')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-18 c-font-slim">Samsung Galaxy S4</p>
                                        <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                            <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('admin/assets/base/img/content/shop5/21.png')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-18 c-font-slim">Apple iPhone 5</p>
                                        <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                            <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                        <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('admin/assets/base/img/content/shop5/22.png')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-18 c-font-slim">HTC</p>
                                        <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                            <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('admin/assets/base/img/content/shop5/20.png')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-18 c-font-slim">Apple iPhone 6</p>
                                        <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                            <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red-2 c-font-uppercase c-font-white c-padding-10 c-font-13 c-font-bold">Hot</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('admin/assets/base/img/content/shop5/24.png')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-18 c-font-slim">Apple iPhone 6+</p>
                                        <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                            <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-2-2 -->
        <!-- END: PAGE CONTENT -->
@endsection
