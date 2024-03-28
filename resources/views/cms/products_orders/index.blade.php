@extends('cms.layouts.master')

@section('title')
{{trans('dashboard_trans.Products Orders')}}
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{trans('dashboard_trans.Products Orders')}}</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted text-hover-primary">{{trans('dashboard_trans.Home')}}</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>

                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted text-hover-primary">{{trans('dashboard_trans.Products Orders')}}</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">{{trans('dashboard_trans.All products orders')}}</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->


        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">{{trans('dashboard_trans.All products orders')}}</span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!----------------------------------------------------------------------->
            <!--end::Alert-->
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                    <thead>
                    <tr class="fw-bolder fs-6 text-gray-800 px-7">
                        <th class="">{{trans('dashboard_trans.User Order')}}</th>
                        <th class="">{{trans('dashboard_trans.Email')}}</th>
                        <th class="">{{trans('dashboard_trans.Phone')}}</th>
                        <th class="">{{trans('dashboard_trans.product')}}</th>
                        <th class="">{{trans('dashboard_trans.Quantity')}}</th>
                        <th class="">{{trans('dashboard_trans.Order Date')}}</th>
                        <th class="">{{trans('dashboard_trans.Actions')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        {{$order->user->name}}
                                    </div>
                                </div>
                            </td>
                            <td>{{$order->user->email}}</td>
                            <td>{{$order->user->mobile}}</td>
                            <td>
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="symbol symbol-30px me-5">--}}
{{--                                        <img src="{{url('images/product/'.$order->product->image)}}" class="" alt="">--}}
{{--                                    </div>--}}
                                    {{$order->product->name}}
                                </div>
                            </td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->created_at->diffForHumans()}}</td>
                            <td>
{{--                                <a href="{{route('orders.show' , $order)}}" class="btn btn-sm btn-light-success">--}}
{{--                                    <!--begin::Svg Icon | path: assets/media/icons/duotone/General/Visible.svg-->--}}
{{--                                    <span class="svg-icon svg-icon-3">--}}
{{--                                    <i class="fa fa-eye"></i>--}}
{{--                                        {{trans('dashboard_trans.Show')}}--}}
{{--                                    </span>--}}
{{--                                  </a>--}}
                                <a href="#"  onclick="confirmDelete (this, '{{ $order->id }}')"
                                   class="btn btn-sm btn-light-danger">
                                    <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                    <span class="svg-icon svg-icon-3">
                                                    <i class="fa fa-trash"></i>
                                                    {{trans('dashboard_trans.Delete')}}
                                                </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="kt-pagination--circle float-end">
                    <ul class="pagination">
                        {{$orders->links()}}
                    </ul>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
@endsection
@section('scripts')
    <script src="{{asset('/admin/js/axios.js')}}"></script>
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
                cancelButtonText: '{{trans('dashboard_trans.Cancel')}}'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        deleteOrder(app, id)
                    )
                }
            })
        }
        function deleteOrder(app, id) {
            axios.delete('/cms/admin/orders/' + id)
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

