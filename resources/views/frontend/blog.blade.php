@extends('frontend.parent')
@section('title',trans('home_trans.News'))
@section('style')
@endsection
@section('content')
<!-- BEGIN: PAGE CONTAINER -->

    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->

    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">{{trans('home_trans.News')}}</h3>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li><a href="{{route('home')}}">{{trans('home_trans.Home')}}</a></li>
                <li>/</li>
                <li><a href="#">{{trans('home_trans.News')}}</a></li>
            </ul>
        </div>
    </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: BLOG LISTING -->
    <div class="c-content-box c-size-md">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="c-content-blog-post-card-1-grid">
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-md-5">
                                <div class="c-content-blog-post-card-1 c-option-2 c-bordered">
                                    <div class="c-media c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="#"><i class="icon-link"></i></a>
                                                <a href="{{url('images/post/',$post->image)}}" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <img class="c-overlay-object img-responsive" src="{{url('images/post/',$post->image)}}" alt="" style="width: 500px" height="100">
                                    </div>
                                    <div class="c-body">
                                        <div class="c-title c-font-bold c-font-uppercase">
                                            <a href="{{route('show-post',$post->id)}}">{{$post->name}}</a>
                                        </div>
                                        <div class="c-author">
                                            <span class="c-font-uppercase">{{$post->created_at->diffForHumans()}}</span>
                                        </div>
                                        <p>
                                        {{Str::limit($post->post,50)}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="c-pagination">
                            <ul class="c-content-pagination c-theme">
                                {{$posts->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                    <form action="{{route('blogs')}}" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control c-square c-theme-border" placeholder="{{trans('home_trans.Search')}}">
                            <span class="input-group-btn">
                                <button class="btn c-theme-btn c-theme-border c-btn-square" type="submit">{{trans('home_trans.Search')}}!</button>
                            </span>
                        </div>
                    </form>

                    <div class="c-content-ver-nav">
                        <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                            <h3 class="c-font-bold c-font-uppercase">{{trans('home_trans.Sections')}}</h3>
                            <div class="c-line-left c-theme-bg"></div>
                        </div>
                        <ul class="c-menu c-arrow-dot1 c-theme">
                            @foreach($sections as $section)
                            <li><a href="#">{{$section->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="c-content-tab-1 c-theme c-margin-t-30">
                        <div class="nav-justified">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a href="#blog_recent_posts" data-toggle="tab"> {{trans('home_trans.Latest News')}}</a></li>
                                <li><a href="#blog_popular_posts" data-toggle="tab"> {{trans('home_trans.Popular News')}}</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="blog_recent_posts">
                                    <ul class="c-content-recent-posts-1">
                                        @foreach($posts as $post)
                                        <li>
                                            <div class="c-image">
                                                <img src="{{url('images/post/',$post->image)}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="c-post">
                                                <a href="" class="c-title">
                                                   {{$post->name}}
                                                </a>
                                                <div class="c-date">{{$post->created_at->diffForHumans()}}</div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="tab-pane" id="blog_popular_posts">
                                    <ul class="c-content-recent-posts-1">
                                        @foreach($randomActivePosts as $post)
                                        <li>
                                            <div class="c-image">
                                                <img src="{{url('images/post/',$post->image)}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="c-post">
                                                <a href="" class="c-title">
                                                   {{$post->name}}
                                                </a>
                                                <div class="c-date">{{$post->created_at->diffForHumans()}}</div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- END: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                </div>
            </div>
        </div>
    </div>
    <!-- END: BLOG LISTING  -->

    <!-- END: PAGE CONTENT -->

<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            App.init(); // init core
        });
    </script>
@endsection
