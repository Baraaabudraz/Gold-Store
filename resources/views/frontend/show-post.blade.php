@extends('frontend.parent')
@section('title')
    {{$posts->name}}
@endsection
@section('content')
        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
        <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">{{$posts->name}}</h3>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li><a href="{{route('home')}}"> {{trans('home_trans.Home')}}</a></li>
                    <li>/</li>
                    <li><a href="{{route('blogs')}}">{{trans('home_trans.News')}}</a></li>


                </ul>
            </div>
        </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: BLOG LISTING -->
        <div class="c-content-box c-size-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="c-content-blog-post-1-view">
                            <div class="c-content-blog-post-1">
                                <div class="c-media">
                                    <div class="c-content-media-2">
                                        <img class="c-content-media-2" src="{{url('images/post/',$posts->image)}}">
                                    </div>
                                </div>
                                <div class="c-title c-font-bold c-font-uppercase">
                                    <a href="#">{{$posts->name}}</a>
                                </div>
                                <div class="c-panel c-margin-b-30 mt-3">
                                    <div class="c-date"><span class="c-font-uppercase"> {{$posts->created_at->diffForHumans()}}</span></div>
                                    <div class="c-date">
                                        {{trans('home_trans.Section')}} : <span class="badge badge-success"> {{$posts->section->name}}</span>
                                    </div>
                                </div>
                                <div class="c-desc">
                                    <p>
                                  {{$posts->post}}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                        <form action="{{route('blogs')}}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control c-square c-theme-border" placeholder="{{trans('home_trans.Search')}}">
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
                                    <li class="active"><a href="#blog_popular_posts" data-toggle="tab"> {{trans('home_trans.Popular News')}}</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="blog_popular_posts">
                                        <ul class="c-content-recent-posts-1">
                                            @foreach($randomActivePosts as $post)
                                                <li>
                                                    <div class="c-image">
                                                        <img src="{{url('images/post/',$post->image)}}" class="img-responsive" alt=""/>
                                                    </div>
                                                    <div class="c-post">
                                                        <a href="{{route('show-post',$post->id)}}" class="c-title">
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

@endsection
