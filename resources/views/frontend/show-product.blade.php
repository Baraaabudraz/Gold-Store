@extends('frontend.parent-new')
@section('title')
    {{$product->name}}
@endsection
@section('style')
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

    <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme CSS files as mentioned below (and change the theme property of the plugin) -->
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!-- BEGIN: PAGE CONTAINER -->
        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">{{$product->name}}</h3>
                    <h4 class="">{{$product->category->name}}</h4>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li><a href="{{route('home')}}">{{trans('home_trans.Home')}}</a></li>
                    <li>/</li>
                    <li class="c-state_active">{{$product->name}}</li>

                </ul>
            </div>
        </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->
        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
            <div class="container">
                <div class="c-shop-product-details-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c-product-gallery">
                                <div class="c-product-gallery-content">
                                    <div class="">
                                        <img src="{{url('images/product/'.json_decode($product->image)[0])}}" width="200%" style="height: 550px">
                                    </div>
                                </div>
                                <div class="row c-product-gallery-thumbnail">
                                    @foreach(json_decode($product->image) as $key => $image)
                                        @if($key != 0)
                                            <div class="col-xs-3 c-product-thumb">
                                                <img src="{{url('images/product/',$image)}}">
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c-product-meta">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-bold">{{$product->name}}</h3>
                                    <div class="c-line-left"></div>
                                </div>
                                <div class="c-product-badge">
                                    @if($product->created_at >= \Illuminate\Support\Carbon::now()->subDay(4))
                                    <div class="c-product-new">{{trans('home_trans.New')}}</div>
                                    @endif
                                </div>
                                <div class="c-product-review">
                                    @if($avgStarRating>0)
                                        <div class="c-product-rating">
                                            <?php $star = 1; while ($star <= $avgStarRating){ ?>
                                            <i class="fa fa-star c-font-red"></i>
                                                <?php $star++;}?>
                                        </div>
                                    @endif
                                        <div class="c-product-write-review">
                                            <h>({{$avgStarRating}})</h>
                                        </div>
                                </div>

                                <div class="c-product-short-desc">
                                 {{Str::limit($product->description,100)}}
                                </div>
                                <div class="c-content-title-3">
                                    @if(Auth::guard('user')->check())
                                        <div class="c-font-uppercase c-font-bold"> {{trans('home_trans.Company Name')}}: {{$product->industry->name}}</div>
{{--                                        <div class="c-font-uppercase c-font-bold"> {{trans('home_trans.Workdays')}}: {{$product->industry->work_time}}</div>--}}
                                        <div class="c-font-uppercase c-font-bold"> {{trans('home_trans.Company Email')}}: {{$product->industry->email}}</div>
                                        <div class="c-font-uppercase c-font-bold">  {{trans('home_trans.Salesperson Email')}}: {{$product->industry->salesperson_email}}</div>
                                    @elseif(Auth::guard('industry')->check())
                                        <div class="c-font-uppercase c-font-bold"> {{trans('home_trans.Company Name')}}: {{$product->industry->name}}</div>
{{--                                        <div class="c-font-uppercase c-font-bold"> {{trans('home_trans.Workdays')}}: {{$product->industry->work_time}}</div>--}}
                                        <div class="c-font-uppercase c-font-bold"> {{trans('home_trans.Company Email')}}: {{$product->industry->email}}</div>
                                        <div class="c-font-uppercase c-font-bold">  {{trans('home_trans.Salesperson Email')}}: {{$product->industry->salesperson_email}}</div>
                                    @else
                                        <div class="c-font-uppercase c-font-bold"> {{trans('home_trans.Company Name')}}: </div>
                                        @endif


                                </div>

{{--                                <div class="row c-product-variant">--}}
{{--                                    <div class="col-sm-12 col-xs-12">--}}
{{--                                        <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Size:</p>--}}
{{--                                        <div class="c-product-size">--}}
{{--                                            <select>--}}
{{--                                                <option value="S">S</option>--}}
{{--                                                <option value="M">M</option>--}}
{{--                                                <option value="L">L</option>--}}
{{--                                                <option value="XL">XL</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12 col-xs-12 c-margin-t-20">--}}
{{--                                        <div class="c-product-color">--}}
{{--                                            <p class="c-product-meta-label c-font-uppercase c-font-bold">Color:</p>--}}
{{--                                            <select>--}}
{{--                                                <option value="Red">Red</option>--}}
{{--                                                <option value="Black">Black</option>--}}
{{--                                                <option value="Beige">Beige</option>--}}
{{--                                                <option value="White">White</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="c-product-add-cart c-margin-t-20">
                                    <div class="row">
                                        <form action="{{ route('product_order') }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="c-input-group c-spinner">
                                                    <p class="c-product-meta-label c-product-margin-2 c-font-uppercase c-font-bold">{{trans('home_trans.Quantity')}}:</p>
                                                    <input type="text" name="quantity" class="form-control c-item-1" value="1">
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    <input type="hidden" name="industry_id" value="{{$product->industry_id}}">
                                                    <div class="c-input-group-btn-vertical">
                                                        <button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-up"></i></button>
                                                        <button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-down"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12 c-margin-t-20">
                                                <button type="submit" class="btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase">{{trans('home_trans.Price offer')}}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->

        <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
        <div class="c-content-box c-size-md c-no-padding">
            <div class="c-shop-product-tab-1" role="tabpanel">
                <div class="container">
                    <ul class="nav nav-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">{{trans('home_trans.Description')}}</a>
                        </li>
                        <li role="presentation">
                            <a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">{{trans('home_trans.Additional Information')}}</a>
                        </li>
                        <li role="presentation">
                            <a class="c-font-uppercase c-font-bold" href="#tab-3" role="tab" data-toggle="tab">{{trans('home_trans.review')}}</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                        <div class="c-product-desc c-center">
                            <div class="container">
                                <hr>
                                <p>
                                    {{$product->description}}
                                </p>
                            </div>
                        </div>
{{--                        <div class="c-product-desc c-bg-dark">--}}
{{--                            <div class="container">--}}
{{--                                <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <img src="../../assets/base/img/content/shop5/32.png"/>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="c-content-title-1">--}}
{{--                                        <h3 class="c-font-uppercase c-font-white c-font-bold">Incredibly Versatile</h3>--}}
{{--                                        <div class="c-line-left"></div>--}}
{{--                                    </div>--}}
{{--                                    <p class="c-font-grey">--}}
{{--                                        Lorem ipsum dolor sit amet, consectetuer--}}
{{--                                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore--}}
{{--                                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud--}}
{{--                                        exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo--}}
{{--                                        consequat. Lorem ipsum dolor sit amet, consectetuer--}}
{{--                                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore--}}
{{--                                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud--}}
{{--                                        exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo--}}
{{--                                        consequat.--}}
{{--                                    </p>--}}
{{--                                    <br>--}}
{{--                                    <button class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square">Add to Cart</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="c-product-desc c-bg-grey">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="c-content-title-1">--}}
{{--                                    <h3 class="c-font-uppercase c-font-bold c-right">High Quality</h3>--}}
{{--                                    <div class="c-line-right"></div>--}}
{{--                                </div>--}}
{{--                                <p class="c-right">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetuer--}}
{{--                                    adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore--}}
{{--                                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud--}}
{{--                                    exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo--}}
{{--                                    consequat. Lorem ipsum dolor sit amet, consectetuer--}}
{{--                                    adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore--}}
{{--                                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud--}}
{{--                                    exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo--}}
{{--                                    consequat.--}}
{{--                                </p>--}}
{{--                                <br>--}}
{{--                                <button class="btn c-float-r c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square">Add to Cart</button>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <img src="../../assets/base/img/content/shop5/31.png"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                <div class="container">
                    <p class="c-center">{{$product->additional_info}}</p><br>
                    <p class="c-center"></p><br/>
                </div>
                <div class="c-product-tab-meta-bg c-bg-grey c-center">
                    <div class="container">
                        <p class="c-product-tab-meta"><strong>{{trans('home_trans.Category')}}:</strong> <a href="{{route('category.product',$product->category->id)}}">{{$product->category->name}}</a></p>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-3">
                <div class="container">
                    <h3 class="c-font-uppercase c-font-bold c-font-22 c-center c-margin-b-40 c-margin-t-40">{{trans('home_trans.Reviews and ratings')}}</h3>
                    @foreach($product->comments as $comment)
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="c-user-avatar">
                                <img src="{{asset('images/admin/avatar2.png')}}"/>
                            </div>
                            <div class="c-product-review-name">
                                <h3 class="c-font-bold c-font-24 c-margin-b-5">{{$comment->user->name}}</h3>
                                <p class="c-date c-theme-font c-font-14">{{$comment->created_at->diffForHumans()}}</p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="c-product-rating c-right">
                                @if($comment->review == 1)
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star "></i>
                                    <i class="fa fa-star "></i>
                                    <i class="fa fa-star "></i>
                                    <i class="fa fa-star "></i>
                                @elseif($comment->review == 2)
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star "></i>
                                    <i class="fa fa-star "></i>
                                    <i class="fa fa-star "></i>
                                @elseif($comment->review == 3)
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star "></i>
                                    <i class="fa fa-star "></i>
                                @elseif($comment->review == 4)
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star "></i>
                                @elseif($comment->review == 5)
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star c-font-red"></i>
                                    <i class="fa fa-star c-font-red"></i>
                                @endif
                            </div>
                        </div>
                    </div>
                        <div class="c-product-review-content">
                            <p>
                                {{$comment->comment}}
                            </p>
                        </div>
                        <hr>
                    @endforeach
                    <div class="row c-product-review-input">
                        <form action="{{url('comments',$product->id)}}" method="POST">
                            @csrf
                            <div class="col-12 mt-2">
                                <h5 class="review-count">
                                    <h3>{{trans('home_trans.Product Rating')}}</h3>
                                    <input id="input-1" name="review" class="rating rating-loading" data-min="0" data-max="5" data-step="1">
                                </h5>
                            </div>
                            <h3 class="c-font-bold c-font-uppercase">{{trans('home_trans.Submit your review')}}</h3>
                            <div class="form-box form-group">
                                <textarea name="comment" id="comment" class="form-control form-control-custom"></textarea>
                            </div>
                            <button class="btn c-btn c-btn-square c-theme-btn c-font-bold c-font-uppercase c-font-white">{{trans('home_trans.Comment')}}</button>
                        </form>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    <!-- END: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
    <!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
    <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
        <div class="container">
            <div class="c-content-title-4">
                <h3 class="c-font-uppercase c-center c-font-bold c-line-strike"><span class="c-bg-white">{{trans('home_trans.You may like this')}}</span></h3>
            </div>
            <div class="row">
                <div data-slider="owl">
                    <div class="owl-carousel owl-theme c-theme owl-small-space c-owl-nav-center"  data-rtl="true" data-items="4" data-slide-speed="1000">
                     @foreach($category_products as $product)
                        <div class="item">
                            <div class="c-content-product-2 c-bg-white c-border">
                                <div class="c-content-overlay" >
                                    @if($product->created_at >= \Illuminate\Support\Carbon::now()->subDay(4))
                                        <div class="c-label c-bg-blue c-font-uppercase c-font-white c-font-13 c-font-bold">{{trans('home_trans.New')}}</div>
                                    @endif
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="{{route('show-product',$product->id)}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">{{trans('home_trans.View')}}</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{url('images/product/'.json_decode($product->image)[0])}});"></div>
                                </div>
                                <div class="c-info" role="group" align="center">
                                    <a href="{{route('show-product',$product->id)}}" class="c-title c-font-18 c-font-slim">{{$product->name}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/SHOPS/SHOP-2-2 -->
@endsection
@section('scripts')
    <script src="{{asset('admin/assets/plugins/zoom-master/jquery.zoom.min.js')}}" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js" type="text/javascript"></script>

    <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme JS files as mentioned below (and change the theme property of the plugin) -->
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.js"></script>

    <!-- optionally if you need translation for your language then include locale file as mentioned below (replace LANG.js with your own locale file) -->
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/locales/LANG.js"></script>
@endsection
