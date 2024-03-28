@extends('frontend.parent-new')
@section('title')
    {{$category->name}}
@endsection
@section('style')

@endsection
@section('content')
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">{{$category->name}}</h3>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li><a href="{{ route('home') }}">{{trans('home_trans.Home')}}</a></li>
                <li>/</li>
                <li class="c-state_active">{{$category->name}}</li>
            </ul>
        </div>
    </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
    <!-- BEGIN: PAGE CONTENT -->

    <div class="c-content-box c-size-md">
        <div class="container">
            <div class="cbp-panel">
                <div id="filters-container" class="cbp-l-filters-buttonCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item" style="border-radius: 10px;">
                        {{trans('home_trans.All')}}
                        <div class="cbp-filter-counter"></div>
                    </div>
                    @foreach($category->subcategory as $subcategory)
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item" style="border-radius: 10px;">
                            {{$subcategory->name}}
                            <div class="cbp-filter-counter"></div>
                        </div>
                    @endforeach
                </div>
                <div id="grid-container" class="cbp cbp-l-grid-masonry-projects">
                    @foreach($category->products as $product)
                        <div class="cbp-item" style="border: 5px #32c5d2 solid; border-radius: 15px">
                            <div class="cbp-caption" >
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{url('images/product/',json_decode($product->image)[0])}}"  width="300%" style="height: 280px" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="c-masonry-border"></div>
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="{{ route('show-product' , $product->id) }}" class=" cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">{{trans('home_trans.View')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('show-product' , $product->id) }}" class="cbp-singlePage cbp-l-grid-masonry-projects-title">{{$product->name}}</a>
                            <div class="cbp-l-grid-masonry-projects-desc">{{$product->category->name}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

    <script src="{{asset('admin/assets/plugins/jquery.min.js')}}" type="text/javascript" ></script>
    <script src="{{asset('admin/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript" ></script>
    <!-- BEGIN: LAYOUT PLUGINS -->
    <script src="{{asset('admin/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/demos/default/js/scripts/pages/masonry-gallery.js')}}" type="text/javascript"></script>

@endsection
