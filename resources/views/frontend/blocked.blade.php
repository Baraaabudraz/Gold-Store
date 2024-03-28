@extends('frontend.parent')
@section('content')
    <div class="c-layout-page">
<div class="row ">
    <div class="text-center">
        <img src="" style="max-height: 100px;" class="mb-3">
        <h3 class="text-gray-800 font-weight-bold" style="font-family: 'Tajawal', sans-serif">Oopss!</h3>
        <p class="lead text-gray-800 mx-auto" style="font-family: 'Tajawal', sans-serif">{{trans('home_trans.Your account is (InActive), we will check your data!')}}</p>
        <a type="button" href="{{route('home')}}"  style="font-family: 'Tajawal', sans-serif">
            <button class="btn btn-secondary">
                ← {{trans('home_trans.Back')}}
            </button>
        </a>
    </div>

</div>
    </div>
    <div class="c-layout-page"></div>
@endsection
