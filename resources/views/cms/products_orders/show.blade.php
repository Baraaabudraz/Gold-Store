@extends('cms.layouts.master')

@section('title')
  {{trans('dashboard_trans.Show Product')}}
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">عرض بيانات المصدر</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">الرئيسية</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <a href="#" class="text-muted text-hover-primary">المُصدرين</a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">عرض بيانات المصدر</li>
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
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">بيانات المُصدر</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-5">يمكنك تصفح قائمة المصدرين من
                            <a href="#" class="fw-bolder link-primary">هنا</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                        <div class="row">

                            <div class="col-md-12 mb-10" style="border:1px ">
                                <div class="row">
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">اسم الجهة المصدرة</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="اسم الجهة المصدرة"></i>
                                        </label>
                                        <input class="form-control form-control-solid" data-placeholder="إختر الجهة المصدرة" name="name" disabled value="" />
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required"> المدير العام</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title=" المدير العام للجهة المصدرة"></i>
                                        </label>
                                        <input class="form-control form-control-solid" name="director" value=""  disabled/>
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">رقم السجل</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="رقم السجل للجهة المصدرة"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="number" class="form-control form-control-solid" placeholder="ادخل رقم السجل هنا" name="record_number" disabled value=""/>
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">رقم الهاتف</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title=" رقم الهانف الخاص بالجهة المصدرة"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="tel" class="form-control form-control-solid" placeholder="ادخل رقم الهاتف هنا" name="tel" disabled value=""/>
                                    </div>

                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">اسم المصرف</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title=" اسم المصرف الخاص بالجهة المصدرة"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="bank_name" disabled value=""/>
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">رقم الحساب المصرفي (IBAN)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="رقم الحساب المصرفي الخاص بالجهة المصدرة"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                              name="IBAN" disabled value=""/>
                                    </div>
                                    <div class="col-md-6 ">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">ختم المصدر</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"></i>
                                        </label>
                                        <br>
                                        <!--end::Label-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                             style="background-image: url({{asset('assets/media/avatars/dummy.png')}});object-fit: cover">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-400px h-300px"
                                                 style="background-image: url({{asset('images/product/1665276155_Xander Davis.jpg/')}});object-fit: cover"></div>
                                            <!--end::Preview existing avatar-->
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 6-->

        </div>


    </div>
    <!--end::Card-->

@endsection
