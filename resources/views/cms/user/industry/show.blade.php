@extends('cms.layouts.master')
@section('title')
    {{trans('dashboard_trans.Show industry data')}}
@endsection
@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend"
                 data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                 class="page-title d-flex align-items-center me-3">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{trans('dashboard_trans.Show industry data')}}</h1>
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
                    <a href="#" class="text-muted text-hover-primary">{{trans('dashboard_trans.All Industries')}}</a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">{{trans('dashboard_trans.Show industry data')}}</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Card-->
    <div class="row g-5 g-xl-8">
        <div class="col-xl-12">
            <!--begin::List Widget 6-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0">
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0">
                    <!----------------------------------------------------------------------->
                    <!-------------------------------Form---------------------------------------->
                    <!--begin:Form-->
                    <!--------------------- this is out takbeeees ---------------------------->
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">{{trans('dashboard_trans.Show industry data')}}</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-5">{{trans('dashboard_trans.You can browse the list of industries')}}
                            <a href="{{route('industries.index')}}" class="fw-bolder link-primary">{{trans('dashboard_trans.here')}}</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                        <div class="row">
                            <div class="col-md-12 mb-10" style="border:1px ">
                                <div class="row">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between mb-7">
                                        <h6 class="m-0 font-weight-bold text-primary">{{trans('dashboard_trans.General Information')}}</h6>
                                    </div>

                                    <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industry Name')}}</label>
                                        <input type="text" disabled name="name" value="{{$industry->name}}" class="form-control @error('name') is-invalid @enderror" required="">
                                        @error('name')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                        <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Address')}} </label>
                                            <input type="text" disabled name="address" value="{{$industry->address}}" class="form-control ">
                                        </div>


                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.State')}}</label>
                                        <select disabled class="form-control input-lg c-square" name="state" id="state">
                                            <option disabled selected>{{$industry->state}}</option>
                                        </select>
                                        @error('state')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industrial Area')}}</label>
                                        <select disabled class="form-control input-lg c-square" name="industrial_area" id="industrial_area">
                                            <option disabled selected>{{$industry->industrial_area}}</option>
                                        </select>
                                        @error('industrial_area')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industrial Sectors')}} </label>
                                        <select disabled class="form-control input-lg c-square" name="category_id" id="category_id">
                                                <option value="{{$industry->category->id}}">{{$industry->category->name}}</option>
                                        </select>
                                        @error('category_id')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industry Phone')}} </label>
                                        <input type="tel" disabled name="industry_phone" value="{{$industry->industry_phone}}" class="form-control @error('industry_phone') is-invalid @enderror ">
                                        @error('industry_phone')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Website')}} </label>
                                        <input type="url" disabled name="website" value="{{$industry->website}}" class="form-control @error('website') is-invalid @enderror ">
                                        @error('website')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Salesperson Email')}} </label>
                                        <input type="email" disabled name="salesperson_email" value="{{$industry->salesperson_email}}"
                                               class="form-control @error('salesperson_email') is-invalid @enderror ">
                                        @error('salesperson_email')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Salesperson Phone')}} </label>
                                        <input type="tel" disabled name="salesperson_phone" value="{{$industry->salesperson_phone}}"
                                               class="form-control @error('salesperson_phone') is-invalid @enderror ">
                                        @error('salesperson_phone')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Work Days')}}</label>
                                        <input type="text" disabled name="work_time" value="{{$industry->work_time}}"
                                               class="form-control @error('work_time') is-invalid @enderror ">
                                        @error('work_time')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industrial License')}}</label>

                                        <iframe src="{{asset('attachment/industry/'.$industry->industrial_license)}}" width="50%" height="600">
                                            This browser does not support PDFs. Please download the PDF to view it:
                                        </iframe>

                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">{{trans('dashboard_trans.Status')}}:</label>
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                <input disabled  class="form-check-input w-45px h-30px" name="status" @if($industry->status == 'Active') checked @endif type="checkbox" id="status_1">
                                                <label class="form-check-label" for="status_1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between mb-7">
                                    <h6 class="m-0 font-weight-bold text-primary">{{trans('dashboard_trans.Login Information')}}</h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Email')}}</label>
                                        <input type="email" disabled name="email" value="{{$industry->email}}"
                                               class="form-control @error('email') is-invalid @enderror" required="">
                                        @error('email')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Password')}}</label>
                                        <input type="password" disabled name="password" class="form-control" required="">
                                        @error('password')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Roles')}}</label>
                                        <select disabled class="form-control" name="role_id" required="">
                                                <option value="{{$industry->role->id}}">{{$industry->role->name}}</option>
                                        </select>
                                        @error('role_id')
                                        <span class="text-danger" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

