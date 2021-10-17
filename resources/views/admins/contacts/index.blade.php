{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<!--begin::Advance Table Widget 5-->
<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">{{$page_title}}</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
        </h3>
        <div class="card-toolbar">
            <!--begin::Button-->
            <a href="" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                        version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path
                                d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>New Record
            </a>
            <!--end::Button-->
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-0">
        <!--begin::Search Form-->
        <div class="mb-7">
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-8">
                    <div class="row align-items-center">
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="Search..."
                                    id="kt_datatable_search_query" />
                                <span>
                                    <i class="flaticon2-search-1 text-muted"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="d-flex align-items-center">
                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                <select class="form-control" id="kt_datatable_search_status">
                                    <option value="">All</option>
                                    <option value="1">Active</option>
                                    <option value="2">Draft</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="d-flex align-items-center">
                                <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                <select class="form-control" id="kt_datatable_search_type">
                                    <option value="">All</option>
                                    <option value="1">Online</option>
                                    <option value="2">Retail</option>
                                    <option value="3">Direct</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                    <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                </div>
            </div>
        </div>
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                <thead>
                    <tr class="text-uppercase">
                        <th class="pl-0" style="width: 40px">
                            <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                <input type="checkbox" value="1" />
                                <span></span>
                            </label>
                        </th>
                        <th style="min-width: 120px">Name</th>
                        <th style="min-width: 120px">Phone Number</th>
                        <th style="min-width: 120px">Email</th>
                        <th style="min-width: 120px">message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                    <tr>
                        <td class="pl-0 py-6">
                            <label class="checkbox checkbox-lg checkbox-inline">
                                <input type="checkbox" value="1" />
                                <span></span>
                            </label>
                        </td>
                        <td>
                            <span
                                class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$message->data['name']}}</span>

                        </td>

                        <td>
                            <span
                                class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$message->data['phone_number']}}</span>
                        </td>

                        <td>
                            <span
                                class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$message->data['email']}}</span>
                        </td>
                        <td>
                            <span
                                class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$message->data['message']}}</span>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>


    <!-- Modal-->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body" style="height: 300px;">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Advance Table Widget 5-->
@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/widgets.js')}}"></script>
@endsection