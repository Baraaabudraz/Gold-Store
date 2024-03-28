@extends('layouts.master')

@section('title')
    {{'إضافة مُصدر جديد'}}
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">إضافة مُصدر جديد</h1>
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
                    <li class="breadcrumb-item text-dark">إضافة مُصدر جديد</li>
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
                    @if(session()->has('exporter-created'))
                    <!--begin::Alert-->
                    <div
                        class="alert alert-dismissible bg-light-success  d-flex flex-column flex-sm-row p-5 mb-10 ">
                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon-2hx svg-icon-success  me-4 mb-5 mb-sm-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.25" x="3" y="21" width="18" height="2" rx="1"
                                                      fill="#191213"></rect>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M4.08576 11.5L3.58579 12C3.21071 12.375 3 12.8838 3 13.4142V17C3 18.1045 3.89543 19 5 19H8.58579C9.11622 19 9.62493 18.7893 10 18.4142L10.5 17.9142L4.08576 11.5Z"
                                                      fill="#121319"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M5.5 10.0858L11.5858 4L18 10.4142L11.9142 16.5L5.5 10.0858Z"
                                                      fill="#121319"></path>
                                                <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M18.1214 1.70705C16.9498 0.535476 15.0503 0.535476 13.8787 1.70705L13 2.58576L19.4142 8.99997L20.2929 8.12126C21.4645 6.94969 21.4645 5.0502 20.2929 3.87862L18.1214 1.70705Z"
                                                      fill="#191213"></path>
                                            </svg>

                                        </span>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <!--begin::Title-->
                            <h5 class="mb-1">تمت العملية بنجاح</h5>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <span>تم حفظ البيانات بنجاح</span>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Close-->
                        <button type="button"
                                class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                                data-bs-dismiss="alert">
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M2.36899 6.54184C2.65912 4.34504 4.34504 2.65912 6.54184 2.36899C8.05208 2.16953 9.94127 2 12 2C14.0587 2 15.9479 2.16953 17.4582 2.36899C19.655 2.65912 21.3409 4.34504 21.631 6.54184C21.8305 8.05208 22 9.94127 22 12C22 14.0587 21.8305 15.9479 21.631 17.4582C21.3409 19.655 19.655 21.3409 17.4582 21.631C15.9479 21.8305 14.0587 22 12 22C9.94127 22 8.05208 21.8305 6.54184 21.631C4.34504 21.3409 2.65912 19.655 2.36899 17.4582C2.16953 15.9479 2 14.0587 2 12C2 9.94127 2.16953 8.05208 2.36899 6.54184Z"
                                                          fill="#12131A"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M8.29289 8.29289C8.68342 7.90237 9.31658 7.90237 9.70711 8.29289L12 10.5858L14.2929 8.29289C14.6834 7.90237 15.3166 7.90237 15.7071 8.29289C16.0976 8.68342 16.0976 9.31658 15.7071 9.70711L13.4142 12L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L12 13.4142L9.70711 15.7071C9.31658 16.0976 8.68342 16.0976 8.29289 15.7071C7.90237 15.3166 7.90237 14.6834 8.29289 14.2929L10.5858 12L8.29289 9.70711C7.90237 9.31658 7.90237 8.68342 8.29289 8.29289Z"
                                                          fill="#12131A"></path>
                                                </svg>
                                            </span>
                        </button>
                        <!--end::Close-->
                    </div>
                    <!--end::Alert-->
                    @endif
                    <!----------------------------------------------------------------------->

                    <!-------------------------------Form---------------------------------------->
                    <!--begin:Form-->
                    <!--------------------- this is out takbeeees ---------------------------->
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">إضافة مُصدر جديد</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-5">يمكنك تصفح قائمة المصدرين من
                            <a href="{{ route('exporters.index') }}" class="fw-bolder link-primary">هنا</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <form method="POST" action="{{ route('exporters.store') }}" enctype="multipart/form-data" class="w-100 position-relative mb-3">
                    @csrf
                        <div class="row">

                            <div class="col-md-12 mb-10" style="border:1px ">
                                <div class="row">
                                    <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">اسم الجهة المصدرة</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="قم بإدخال اسم بالجهة المصدرة"></i>
                                        </label>
                                        <input class="form-control form-control-solid" placeholder="أدحل اسم الجهة المصدرة هنا" name="name" value="{{old('name')}}" />
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
                                        <input class="form-control form-control-solid" placeholder="أدخل اسم المدير العام هنا" name="director" value="{{old('director')}}" />
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
                                        <input type="number" class="form-control form-control-solid" placeholder="ادخل رقم السجل هنا" name="record_number" value="{{old('record_number')}}"/>
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
                                        <input type="tel" class="form-control form-control-solid" placeholder="ادخل رقم الهاتف هنا" name="tel" value="{{old('tel')}}"/>
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
                                               placeholder="ادخل اسم المصرف هنا" name="bank_name" value="{{old('bank_name')}}"/>
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
                                               placeholder="ادخل رقم الحساب هنا" name="IBAN" value="{{old('IBAN')}}"/>
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
                                                 style="background-image: url({{asset('assets/media/avatars/dummy.png')}});object-fit: cover"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-white shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="تغيير الصورة">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="logo" accept="image/*"/>
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
                                                 style="background-image: url({{asset('assets/media/avatars/dummy.png')}});object-fit: cover"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-white shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="تغيير الصورة">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="signature" accept="image/*"/>
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
                            <button type="reset" class="btn btn-white btn-active-light-primary me-2">مسح
                                البيانات
                            </button>

                            <button type="submit" class="addUserBtn1 btn btn-success me-2">حفظ الإدخال
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>


                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 6-->

        </div>


    </div>
    <!--end::Card-->

@endsection
