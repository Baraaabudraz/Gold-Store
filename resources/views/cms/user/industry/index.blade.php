@extends('cms.layouts.master')
@section('title')
    {{trans('dashboard_trans.All Industries')}}
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{trans('dashboard_trans.Industries')}}</h1>
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

                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('admins.index')}}" class="text-muted text-hover-primary">{{trans('dashboard_trans.Industries')}}</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">{{trans('dashboard_trans.All Industries')}}</li>
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
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">{{trans('dashboard_trans.All Industries')}}</span>
            </h3>

        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!----------------------------------------------------------------------->
            <!--end::Alert-->
            <!--begin::Table container-->
            <div class="table-responsive">
                <table class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                        <thead>
                        <tr class="fw-bolder fs-6 text-gray-800 px-7">
                            <th>#</th>
{{--                            <th>Image</th>--}}
                            <th>{{trans('dashboard_trans.Name')}}</th>
                            <th>{{trans('dashboard_trans.Email')}}</th>
                            <th>{{trans('dashboard_trans.Phone')}}</th>
                            <th>{{trans('dashboard_trans.Address')}}</th>
{{--                            <th>{{trans('dashboard_trans.State')}}</th>--}}
{{--                            <th>{{trans('dashboard_trans.Salesperson Phone')}}</th>--}}
{{--                            <th>{{trans('dashboard_trans.Salesperson Email')}}</th>--}}
{{--                            <th>{{trans('dashboard_trans.Industrial Sector')}}</th>--}}
                            <th>{{trans('dashboard_trans.Products')}}</th>
                            <th>{{trans('dashboard_trans.Role')}}</th>
{{--                            <th>{{trans('dashboard_trans.Industrial Area')}}</th>--}}
                            <th>{{trans('dashboard_trans.Status')}}</th>
                            <th>{{trans('dashboard_trans.Actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($industries->count() > 0)
                            @foreach($industries as $key=>$industry)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$industry->name}}</td>
                                    <td>{{$industry->email}}</td>
                                    <td>{{$industry->industry_phone}}</td>
                                    <td>{{$industry->address}}</td>
{{--                                    <td>{{$industry->state}}</td>--}}
{{--                                    <td>{{$industry->salesperson_phone}}</td>--}}
{{--                                    <td>{{$industry->salesperson_email}}</td>--}}
{{--                                    <td>{{$industry->category->name}}</td>--}}
                                    <td><a href="{{route('products.industries',$industry->id)}}" type="button"><span
                                                    class="badge badge-info">{{$industry->product->count()}}-{{trans('dashboard_trans.product')}}/{{trans('dashboard_trans.s')}}</span></a>
                                    </td>
                                    <td>{{$industry->role->name}}</td>
{{--                                    <td>{{$industry->industrial_area}}</td>--}}
                                    <td>
                                        @if($industry->status =='Active')
                                            <span class="badge badge-success">{{$industry->status}}</span>
                                        @else
                                            <span class="badge badge-warning">{{$industry->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('industries.show',$industry)}}" class="btn btn-sm btn-light-success">
                                            <!--begin::Svg Icon | path: assets/media/icons/duotone/General/Visible.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.4"/>
                                                    <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="1"/>
                                                </svg>
                                            </span>
                                            {{trans('dashboard_trans.Show')}}
                                        </a>
                                        <a href="{{route('industries.edit' , $industry->id)}}" class="btn btn-sm btn-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
                                            <span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                         height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<path
                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"/>
																		<path
                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3"/>
																	</svg>
																</span>
                                            <!--end::Svg Icon-->{{trans('dashboard_trans.Edit')}}
                                        </a>


                                        <a href="#" onclick="confirmDelete (this, '{{ $industry->id }}')"
                                           class="btn btn-sm btn-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                            <span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path
                                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                fill="#000000" fill-rule="nonzero"/>
																			<path
                                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                fill="#000000" opacity="0.3"/>
																		</g>
																	</svg>
																</span>
                                            <!--end::Svg Icon-->{{trans('dashboard_trans.Delete')}}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <td>No created industry yet</td>
                        @endif
                        </tbody>
                    </table>
            </div>
            <div class="kt-pagination--circle float-end">
                <ul class="pagination">
                    {{$industries->links()}}
                </ul>
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
@endsection
@section('scripts')
    <script src="{{asset('/assets/js/axios.js')}}"></script>
    <script>
        function confirmDelete(app, id) {
            Swal.fire({
                title: '{{trans('dashboard_trans.Are sure of the deleting process?')}}',
                text: "{{trans('dashboard_trans.You wont be able to revert this!')}}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{trans('dashboard_trans.Delete')}}',
                cancelButtonText: '{{trans('dashboard_trans.Cancel')}}',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        deleteIndustries(app, id)
                    )
                }
            })
        }
        function deleteIndustries(app, id) {
            axios.delete('/cms/admin/industries/' + id)
                .then(function (response) {
                    // handle success

                    console.log(response);
                    app.closest('tr').remove();
                    showMessage(response.data)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                    showMessage(error.response.data);
                })
                .then(function () {
                    // always executed
                });
        }
        function showMessage(data) {
            let timerInterval
            Swal.fire({
                title: data.title,
                text: data.text,
                icon: data.icon,
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false,
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
        }
    </script>
@endsection
