@extends('cms.layouts.master')

@section('title')
    {{trans('dashboard_trans.Edit Subcategory')}}
@endsection
@section('content')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend"
                 data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                 class="page-title d-flex align-items-center me-3">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{trans('dashboard_trans.Edit Subcategory')}}</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">{{trans('dashboard_trans.Home')}}</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <a href="#" class="text-muted text-hover-primary">{{trans('dashboard_trans.Subcategories')}}</a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">{{trans('dashboard_trans.Edit Subcategory')}}</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    @if(session()->has('alert-type'))
        <div class="alert {{session()->get('alert-type')}} alert-custom alert-notice alert-light-primary fade show" role="alert">
            <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text"> {{session()->get('message')}}</div>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="card">
            <form action="{{route('subcategories.update',$subcategories->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{trans('dashboard_trans.Edit Subcategory')}}</h6>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 mb-10" style="border:1px ">
                        <div class="row">
                        @foreach(config('lang') as $key=>$lang)
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Name')}} ({{$lang}})</label>
                            <input type="text" value="{{$subcategories->getTranslation('name',$key)}}" name="name[{{$key}}]" class="form-control @error('name') is-invalid @enderror " id="" aria-describedby="" placeholder="Enter name of category">
                            @error('name.',$key)
                                <span class="text-danger" role="alert">{{ $message }}</span>@enderror
                        </div>
                        @endforeach
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industrial Sectors')}}</label>
                            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                <option disabled hidden selected>{{trans('dashboard_trans.Industrial Sectors')}}</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if($subcategories->category_id == $category->id) selected @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                            <div class="card-footer d-flex justify-content-center py-6 px-9">
                                <button type="reset" class="btn btn-white btn-active-light-primary me-2">
                                    {{trans('dashboard_trans.Clear data')}}
                                </button>

                                <button type="submit" class="addUserBtn1 btn btn-success me-2">
                                    {{trans('dashboard_trans.Edit')}}
                                </button>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


@endsection

