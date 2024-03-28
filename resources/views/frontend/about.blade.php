@extends('frontend.parent')
@section('title',trans('home_trans.Who are we ?'))
@section('content')

    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">{{trans('home_trans.Who are we ?')}}</h3>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li><a href="{{route('home')}}">{{trans('home_trans.Home')}}</a></li>
                <li>/</li>
                <li><a href="javascript:;">{{trans('home_trans.Who are we ?')}}</a></li>


            </ul>
        </div>
    </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: CONTENT/MISC/SERVICES-3 -->
    <div class="c-content-box c-size-md c-bg-white" style="background-image: url({{asset('admin/assets/base/img/content/backgrounds/bg-65.jpg')}})">
        <div class="container">
            <div class="c-content-feature-2-grid">
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-center c-font-bold">{{trans('home_trans.Who are we ?')}}</h3>
                    <div class="c-line-center"></div>
                </div>
                <div class="row">
                        <div class="c-content-feature-2 c-option-2 c-theme-bg-parent-hover" align="center">
                            <h3 class="c-font-uppercase c-title" align="center">{{trans('home_trans.Masnaaco')}}</h3>
                            <p class="c-font-uppercase c-font-bold">
                                {{trans('home_trans.We are your masnaaco platform, a leading platform of its kind in the region in terms of displaying factory products, the platform is designed according to the latest international standards, high-level technologies and support services.
    The factories bring together the different capabilities and competencies of the national industries, construction and development sector in the UAE under a unified and integrated platform, with the aim of improving the value of customers, shareholders, factories and other stakeholders.')}}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
