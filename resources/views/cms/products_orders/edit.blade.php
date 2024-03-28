@extends('layouts.master')

@section('title')
    {{'تعديل بيانات المُصدر'}}
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">تعديل بيانات المصدر</h1>
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
                    <a href="{{route('exporters.index')}}" class="text-muted text-hover-primary">المُصدرين</a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">تعديل بيانات المصدر</li>
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

                    <!-------------------------------Form---------------------------------------->
                    <!--begin:Form-->
                    <!--------------------- this is out takbeeees ---------------------------->
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">تعديل البيانات</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-5">يمكنك تصفح قائمة المصدرين من
                            <a href="{{ route('exporters.index') }}" class="fw-bolder link-primary">هنا</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <form method="POST" action="{{ route('exporters.update' , $exporter) }}" enctype="multipart/form-data" class="w-100 position-relative mb-3">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-md-12 mb-10" style="border:1px ">
                                <div class="row">
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="required fs-6 fw-bold mb-2">اسم الجهة المصدرة</label>
                                        <input class="form-control form-control-solid" data-placeholder="إختر الجهة المصدرة" name="name" value="{{$exporter->name}}"/>
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">اسم المدير العام</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="قم بإدخال اسم المدير العام للجهة المصدرة"></i>
                                        </label>
                                        <input class="form-control form-control-solid" placeholder="أدخل اسم المدير العام هنا" name="director" value="{{$exporter->director}}" />
                                        @error('director')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">رقم السجل</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="قم بإدخال رقم السجل للجهة المصدرة"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="number" class="form-control form-control-solid" placeholder="ادخل رقم السجل هنا" name="record_number" value="{{$exporter->record_number}}"/>
                                        @error('record_number')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">رقم الهاتف</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="قم بإدخال رقم الهانف الخاص بالجهة المصدرة"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="tel" class="form-control form-control-solid" placeholder="ادخل رقم الهاتف هنا" name="tel" value="{{$exporter->tel}}"/>
                                        @error('tel')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">اسم المصرف</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="قم بإدخال اسم المصرف الخاص بالجهة المصدرة"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                               placeholder="ادخل اسم المصرف هنا" name="bank_name" value="{{$exporter->bank_name}}"/>
                                        @error('bank_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">رقم الحساب المصرفي (IBAN)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="قم بإدخال رقم الحساب المصرفي الخاص بالجهة المصدرة"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                               placeholder="ادخل رقم الحساب هنا" name="IBAN" value="{{$exporter->IBAN}}"/>
                                        @error('IBAN')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 ">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">شعار المصدر</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="أرفق شعار الجهة المصدرة"></i>
                                        </label>
                                        <br>
                                        <!--end::Label-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                             style="background-image: url({{asset('assets/media/avatars/dummy.png')}});object-fit: cover">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-400px h-300px"
                                                 style="background-image: url({{asset('exporters-logos/'.$exporter->logo)}});object-fit: cover"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-white shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="تغيير الصورة">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="logo" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-white shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="حذف الصورة">
                                                                    <i class="bi bi-x fs-2"></i>
                                                                </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-white shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="حذف الصورة">
                                                                    <i class="bi bi-x fs-2"></i>
                                                                </span>
                                            <!--end::Remove-->
                                            <br>
                                            @error('logo')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6 ">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">ختم المصدر</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="أرفق شعار الجهة المصدرة"></i>
                                        </label>
                                        <br>
                                        <!--end::Label-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                             style="background-image: url({{asset('assets/media/avatars/dummy.png')}});object-fit: cover">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-400px h-300px"
                                                 style="background-image: url({{asset('exporters-signatures/'.$exporter->signature)}});object-fit: cover"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-white shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="تغيير الصورة">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="signature" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-white shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="حذف الصورة">
                                                                    <i class="bi bi-x fs-2"></i>
                                                                </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-white shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="حذف الصورة">
                                                                    <i class="bi bi-x fs-2"></i>
                                                                </span>
                                            <!--end::Remove-->
                                            <br>
                                            @error('signature')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-center py-6 px-9">
                            <a href="{{ route('exporters.index') }}" class="btn btn-white btn-active-light-primary me-2">إلغاء</a>

                            <button type="submit" class="addUserBtn1 btn btn-success me-2">حفظ التعديل
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>

                    <hr>
                    <!--------------------- this is out takbeeees ---------------------------->


                    <!----------------------------------------------------------------------->


                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 6-->

        </div>


    </div>
    <!--end::Card-->

@endsection
