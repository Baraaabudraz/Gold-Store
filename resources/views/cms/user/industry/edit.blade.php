@extends('cms.layouts.master')
@section('title')
    {{trans('dashboard_trans.Edit Industry')}}
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{trans('dashboard_trans.Edit Industry')}}</h1>
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
                    <li class="breadcrumb-item text-dark">{{trans('dashboard_trans.Edit Industry')}}</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    @if(session()->has('alert-type'))
        <div class="alert {{session()->get('alert-type')}} alert-custom alert-notice alert-light-primary fade show" role="alert">
            <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text"> {{session()->get('message')}}</div>
        </div>
    @endif
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
                        <h1 class="mb-3">{{trans('dashboard_trans.Edit Industry')}}</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-5">{{trans('dashboard_trans.You can browse the list of industries')}}
                            <a href="{{route('industries.index')}}" class="fw-bolder link-primary">{{trans('dashboard_trans.here')}}</a>.
                        </div>
                        <!--end::Description-->
                    </div>
        <form action="{{route('industries.update',$industries->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mb-10" style="border:1px ">
                    <div class="row">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between mb-7">
                            <h6 class="m-0 font-weight-bold text-primary">{{trans('dashboard_trans.General Information')}}</h6>
                        </div>
                        @foreach(config('lang') as $key => $lang)
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industry Name')}} ({{$lang}})</label>
                                <input type="text" name="name[{{$key}}]" value="{{$industries->getTranslation('name',$key)}}" class="form-control @error('name') is-invalid @enderror" required="">
                                @error('name.'.$key)
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        @endforeach

                        <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Address')}} </label>
                            <input type="text" name="address" value="{{$industries->address}}" class="form-control ">
                            @error('address')
                            <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.State')}}</label>
                                <select class="form-control input-lg c-square" name="state" id="state" >
                                    <option value="1" hidden disabled selected>{{trans('home_trans.State')}}</option>
                                    <option value="{{trans('home_trans.Abu dhabi')}}" @if($industries->state == trans('Abu dhabi')) selected @endif>{{trans('home_trans.Abu dhabi')}}</option>
                                    <option value="{{trans('home_trans.Dubai')}}" @if($industries->state == trans('home_trans.Dubai')) selected @endif>{{trans('home_trans.Dubai')}}</option>
                                    <option value="{{trans('home_trans.Sharjah')}}" @if($industries->state == trans('home_trans.Sharjah')) selected @endif>{{trans('home_trans.Sharjah')}}</option>
                                    <option value="{{trans('home_trans.Ajman')}}" @if($industries->state == trans('home_trans.Ajman')) selected @endif>{{trans('home_trans.Ajman')}}</option>
                                    <option value="{{trans('home_trans.Umm Al Quwain')}}" @if($industries->state == trans('home_trans.Umm Al Quwain')) selected @endif>{{trans('home_trans.Umm Al Quwain')}}</option>
                                    <option value="{{trans('home_trans.Ras al khaima')}}" @if($industries->state == trans('home_trans.Ras al khaima')) selected @endif>{{trans('home_trans.Ras al khaima')}}</option>
                                    <option value="{{trans('home_trans.Fujairah')}}" @if($industries->state == trans('home_trans.Fujairah')) selected @endif>{{trans('home_trans.Fujairah')}}</option>
                                </select>
                                @error('state')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industrial Area')}}</label>
                                <select class="form-control input-lg c-square" name="industrial_area"
                                        id="industrial_area">
                                    <option value="1" hidden disabled selected>{{trans('dashboard_trans.Industrial Area')}}</option>
{{--                                    <option value="Abu Dhabi Industrial City" @if($industries->industrial_area == 'Abu Dhabi Industrial City') selected @endif>مدينة ابو ظبي الصناعية</option>--}}
{{--                                    <option value="Khalifa Industrial City" @if($industries->industrial_area == 'Khalifa Industrial City') selected @endif>مدينة خليفة الصناعية</option>--}}
{{--                                    <option value="Tawazun Industrial Park" @if($industries->industrial_area == 'Tawazun Industrial Park') selected @endif>مجمع توازن الصناعي</option>--}}
{{--                                    <option value="Al Markaz" @if($industries->industrial_area == 'Al Markaz') selected @endif>المركز</option>--}}
{{--                                    <option value="Mafraq Industrial Area" @if($industries->industrial_area == 'Mafraq Industrial Area') selected @endif>منطقة المفرق الصناعية</option>--}}
{{--                                    <option value="Musaffah Industrial" @if($industries->industrial_area == 'Musaffah Industrial') selected @endif>مصفح الصناعية</option>--}}
{{--                                    <option value="Al Ain Industrial City" @if($industries->industrial_area == 'Al Ain Industrial City') selected @endif>مدينة العين الصناعية</option>--}}
{{--                                    <option value="Industrial Area" @if($industries->industrial_area == 'Industrial Area') selected @endif>المنطقة الصناعية</option>--}}
{{--                                    <option value="Nibras Al Ain Aerospace Park" @if($industries->industrial_area == 'Nibras Al Ain Aerospace Park') selected @endif>مجمع نبراس العين للطيران</option>--}}
{{--                                    <option value="Zayed Industrial City" @if($industries->industrial_area == 'Zayed Industrial City') selected @endif>مدينة زايد الصناعية</option>--}}
{{--                                    <option value="Al Ruwais Industrial City" @if($industries->industrial_area == 'Al Ruwais Industrial City') selected @endif>مدينة الرويس الصناعية</option>--}}
{{--                                    <option value="Dubai Industrial City" @if($industries->industrial_area == 'Dubai Industrial City') selected @endif>مدينة دبي الصناعية</option>--}}
{{--                                    <option value="Dubai World Central" @if($industries->industrial_area == 'Dubai World Central') selected @endif>دبي وورلد سنترال</option>--}}
{{--                                    <option value="Dubai Investments Park" @if($industries->industrial_area == 'Dubai Investments Park') selected @endif>مجمع دبي للإستثمار</option>--}}
{{--                                    <option value="Jebel Ali Industrial Area" @if($industries->industrial_area == 'Jebel Ali Industrial Area') selected @endif>منطقة جبل علي الصناعية</option>--}}
{{--                                    <option value="Al Quoz Industrial Area" @if($industries->industrial_area == 'Al Quoz Industrial Area') selected @endif>منطقة القوز الصناعية</option>--}}
{{--                                    <option value="Ras Al Khor Industrial Area" @if($industries->industrial_area == 'Ras Al Khor Industrial Area') selected @endif>منطقة رأس الخور الصناعية</option>--}}
{{--                                    <option value="Al Qusais Industrial Area" @if($industries->industrial_area == 'Al Qusais Industrial Area') selected @endif>منطقة القصيص الصناعية</option>--}}
{{--                                    <option value="Al Khabaisi" @if($industries->industrial_area == 'Al Khabaisi') selected @endif>الخبيصي</option>--}}
{{--                                    <option value="Jebel Ali Freezone" @if($industries->industrial_area == 'Jebel Ali Freezone') selected @endif>منطقة جبل علي الحرة</option>--}}
{{--                                    <option value="Dubai Maritime City" @if($industries->industrial_area == 'Dubai Maritime City') selected @endif>مدينة دبي الملاحية</option>--}}
{{--                                    <option value="Nadd Al Hamar" @if($industries->industrial_area == 'Nadd Al Hamar') selected @endif>ند الحمر</option>--}}
{{--                                    <option value="Umm Ramool" @if($industries->industrial_area == 'Umm Ramool') selected @endif>أم رمول</option>--}}
{{--                                    <option value="ALTTAY" @if($industries->industrial_area == 'ALTTAY') selected @endif>الطي</option>--}}
{{--                                    <option value="National Industries Park" @if($industries->industrial_area == 'National Industries Park') selected @endif>مجمع الصناعات الوطنية</option>--}}
{{--                                    <option value="Industrial Area" @if($industries->industrial_area == 'Industrial Area') selected @endif>المنطقة الصناعية – الشارقة</option>--}}
{{--                                    <option value="Sharjah International Airport Free Zone" @if($industries->industrial_area == 'Sharjah International Airport Free Zone') selected @endif>المنطقة الحرة بمطار الشارقة الدولي</option>--}}
{{--                                    <option value="Al Sajaa Industrial" @if($industries->industrial_area == 'Al Sajaa Industrial') selected @endif>الصجعة الصناعية</option>--}}
{{--                                    <option value="Emirates Industrial City" @if($industries->industrial_area == 'Emirates Industrial City') selected @endif>مدينة الإمارات الصناعية</option>--}}
{{--                                    <option value="Al Hamriyah Free Zone" @if($industries->industrial_area == 'Al Hamriyah Free Zone') selected @endif>المنطقة الحرة - الحمرية</option>--}}
{{--                                    <option value="Al Bataeh" @if($industries->industrial_area == 'Al Bataeh') selected @endif>البطائح</option>--}}
{{--                                    <option value="Al Dhaid" @if($industries->industrial_area == 'Al Dhaid') selected @endif>الذيد</option>--}}
{{--                                    <option value="Ajman Industrial" @if($industries->industrial_area == 'Ajman Industrial') selected @endif>عجمان الصناعية</option>--}}
{{--                                    <option value="Al Jerf Industrial" @if($industries->industrial_area == 'Al Jerf Industrial') selected @endif>الجرف الصناعية</option>--}}
{{--                                    <option value=" Free Zone" @if($industries->industrial_area == 'Free Zone') selected @endif>المنطقة الحرة</option>--}}
{{--                                    <option value="Umm Al Quwain Free Trade Zone Authority" @if($industries->industrial_area == 'Umm Al Quwain Free Trade Zone Authority') selected @endif>منطقة التجارة الحرة أم القيوين</option>--}}
{{--                                    <option value="Umm Al Quwain Industrial City Authority" @if($industries->industrial_area == 'Umm Al Quwain Industrial City Authority') selected @endif>هيئة ام القيوين الصناعية</option>--}}
{{--                                    <option value="Industrial Area(Umm Al Thuoob)" @if($industries->industrial_area == 'Industrial Area(Umm Al Thuoob)') selected @endif>المنطقة الصناعية الجديدة</option>--}}
{{--                                    <option value="Al Rafaah" @if($industries->industrial_area == 'Al Rafaah') selected @endif>الرفاعة</option>--}}
{{--                                    <option value="Umm Dera" @if($industries->industrial_area == 'Umm Dera') selected @endif>أم درع</option>--}}
{{--                                    <option value="Industrial Area(Old)" @if($industries->industrial_area == 'Industrial Area(Old)') selected @endif>المنطقة الصناعية القديمة</option>--}}
{{--                                    <option value="Umm Al Thuoob" @if($industries->industrial_area == 'Umm Al Thuoob') selected @endif>ام الثعوب</option>--}}
{{--                                    <option value="Al Hulaileh Industrial Area" @if($industries->industrial_area == 'Al Hulaileh Industrial Area') selected @endif>منطقة الحليلة الصناعية</option>--}}
{{--                                    <option value="Al Hamra Industrial Area" @if($industries->industrial_area == 'Al Hamra Industrial Area') selected @endif>منطقة الحمرا الصناعية</option>--}}
{{--                                    <option value="Al Ghail Industrial Area" @if($industries->industrial_area == 'Al Ghail Industrial Area') selected @endif>منطقة الغيل الصناعية</option>--}}
{{--                                    <option value="Al Rams" @if($industries->industrial_area == 'Al Rams') selected @endif>الرمس</option>--}}
{{--                                    <option value="Khor Khwair" @if($industries->industrial_area == 'Khor Khwair') selected @endif>خور خوير</option>--}}
{{--                                    <option value="Saqr Port" @if($industries->industrial_area == 'Saqr Port') selected @endif>ميناء صقر</option>--}}
{{--                                    <option value="Kadra" @if($industries->industrial_area == 'Kadra') selected @endif>كدرة</option>--}}
{{--                                    <option value="AL QUSAIDAT" @if($industries->industrial_area == 'AL QUSAIDAT') selected @endif>القصيدات</option>--}}
{{--                                    <option value="Industrial Area- Dibba Al Fujairah" @if($industries->industrial_area == 'Industrial Area- Dibba Al Fujairah') selected @endif>المنطقة الصناعية – دبا الفجيرة</option>--}}
{{--                                    <option value="Al Hayl" @if($industries->industrial_area == 'Al Hayl') selected @endif>منطقة الحيل</option>--}}
{{--                                    <option value="Thoban" @if($industries->industrial_area == 'Thoban') selected @endif>ثوبان</option>--}}
{{--                                    <option value="Industrial Area" @if($industries->industrial_area == 'Industrial Area') selected @endif>المنطقة الصناعية</option>--}}
{{--                                    <option value="Siji" @if($industries->industrial_area == 'Siji') selected @endif>منطقة سيجي</option>--}}
{{--                                    <option value="Other" @if($industries->industrial_area == 'Other') selected @endif>أخرى</option>--}}
                                </select>
                                @error('industrial_area')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                        <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industrial Sectors')}} </label>
                            <select class="form-control input-lg c-square" name="category_id" id="category_id">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" @if($industries->category_id == $category->id) selected @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industry Phone')}} </label>
                                <input type="tel" name="industry_phone" value="{{$industries->industry_phone}}"
                                       class="form-control @error('industry_phone') is-invalid @enderror ">
                                @error('industry_phone')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Website')}} </label>
                                <input type="url" name="website" value="{{$industries->website}}"
                                       class="form-control @error('website') is-invalid @enderror ">
                                @error('website')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Salesperson Email')}} </label>
                                <input type="email" name="salesperson_email" value="{{$industries->salesperson_email}}"
                                       class="form-control @error('salesperson_email') is-invalid @enderror ">
                                @error('salesperson_email')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Salesperson Phone')}} </label>
                                <input type="tel" name="salesperson_phone" value="{{$industries->salesperson_phone}}"
                                       class="form-control @error('salesperson_phone') is-invalid @enderror ">
                                @error('salesperson_phone')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Work Days')}}</label>
                                <input type="text" name="work_time" value="{{$industries->work_time}}"
                                       class="form-control @error('work_time') is-invalid @enderror ">
                                @error('work_time')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Industrial License')}}</label>
                                <input type="file" value="{{$industries->industrial_license}}" name="industrial_license" class="form-control  accept="/*">
                                @error('industrial_license')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">{{trans('dashboard_trans.Status')}}:</label>
                            <div class="col-lg-8 d-flex align-items-center">
                                <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                    <input class="form-check-input w-45px h-30px" name="status" @if($industries->status == 'Active') checked @endif type="checkbox" id="status_1">
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
                                <input type="email" name="email" value="{{$industries->email}}"
                                       class="form-control @error('email') is-invalid @enderror" required="">
                                @error('email')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Password')}}</label>
                                <input type="password" name="password"  class="form-control" required="">
                                @error('password')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">{{trans('dashboard_trans.Roles')}}</label>
                                <select class="form-control" name="role_id" required="">
                                    <option hidden disabled selected>Select Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}"
                                                @if($industries->role_id == $role->id) selected @endif>{{$role->name}}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                </div>
            </div>
                </div>
                <div class="card-footer d-flex justify-content-center py-6 px-9">
                    <button type="reset" class="btn btn-white btn-active-light-primary me-2">
                        {{trans('dashboard_trans.Clear data')}}
                    </button>
                    <button type="submit" class="addUserBtn1 btn btn-success me-2">
                        {{trans('dashboard_trans.Edit')}}
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#state').on('change', function() {
                $('#industrial_area').empty()
                var state = this.value;
                $.ajax({
                    url: "{{route('get_sections')}}",
                    type: "GET",
                    data: {
                        state: state
                    },
                    cache: false,
                    success: function(result){
                        $.each(result, function(key, modelName){
                            //Use the Option() constructor to create a new HTMLOptionElement.
                            var option = new Option(key, modelName);
                            //Convert the HTMLOptionElement into a JQuery object that can be used with the append method.
                            $(option).html(modelName);
                            $(option).val(modelName);
                            //Append the option to our Select element.
                            $("#industrial_area").append(option);

                        });
                    }
                });
            });
        });
    </script>
@endsection
