@extends('layout.carmaster')
@section('main')
<style>
    td[data-field="Fahrzeugname"]{
        cursor: pointer;
        color: blue;
    }
    .m-btn--icon.btn-sm.m-btn--icon-only{
        color: #9e9e9e !important;
        border-color: #adadad !important;

    }
    .m-btn--icon.btn-sm.m-btn--icon-only:hover{
        color: #00c5dc !important;
        background-color: transparent;
        background-image: none;
        border-color: #00c5dc !important;
    }
    .btn.m-btn.btn-sm.m-btn--icon-only{
        color: #9e9e9e !important;


    }
    .btn.m-btn.btn-sm.m-btn--icon-only:hover{
        color: #00c5dc !important;


    }


    .pagination{
        -webkit-box-pack: center!important;
        -ms-flex-pack: center!important;
        justify-content: center!important;
        margin-top: 12px;
    }
    .m-datatable__pager.m-datatable--paging-loaded{
        padding-bottom:12px;
    }
</style>
<!-- BEGIN: main body -->
<div class="m-subheader">
        <div class="row div-group animated fadeIn">
            <div class="col-md-12 " >
                <div class="m-portlet__body" >
                    <div class="row">
                        <div class="col-md-12">
                            <!--begin: Search Form -->
                                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                    <div class="row align-items-center">
                                        <div class="col-xl-12 order-2 order-xl-1">
                                            <div class="form-group m-form__group row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="m-input-icon m-input-icon--left search-input-a">
                                                        <input type="text" class="form-control m-input m-input--solid" placeholder="Suchen..." id="generalSearch">
                                                        <span class="m-input-icon__icon m-input-icon__icon--left">
                                                            <span>
                                                                <i class="la la-search"></i>
                                                            </span>
                                                        </span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--end: Search Form -->

                        </div>
                        <!--begin: Datatable -->
                        <div class="col-md-12" >
                            <table class="m-datatable" id="html_table" width="100%" style="border-radius:14px !important;padding-bottom:12px;" >
                                <thead>
                                    <tr>
                                        {{-- <th title="Field #1"> </th> --}}
                                        <th title="Field #2">Created_Time</th>
                                        <th title="Field #3">Project_Name</th>
                                        <th title="Field #4">Project_Number</th>
                                        <th title="Field #6">Contract_Date</th>
                                        <th title="Field #6">Job_No</th>
                                        <th title="Field #6">G702</th>
                                        <th title="Field #6">G703</th>
                                        <th title="Field #6">Del</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    @if(empty($items))
                                        <tr> No data! </tr>
                                    @else
                                        @foreach ($items as $item)
                                            <tr>
                                                {{-- <td>
                                                    <a href="{{url('selectone')."/".$carone->id}}" class="btn m-btn btn-sm m-btn--icon-only">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </td> --}}
                                                <td >{{$item->created_time}}</td>
                                                <td>{{$item->project_name}}</td>
                                                <td>{{$item->project_number}}</td>

                                                <td>{{$item->contract_date}}</td>
                                                <td>{{$item->job_no}}</td>
                                                <td>
                                                <a href="{{url('/g702/'.$item->id)}}" class="btn btn-primary m-btn m-btn--icon m-btn--icon-only">
                                                        <i class="fa fa-print"></i>
                                                    </a>

                                                </td>
                                                <td>
                                                    <a href="{{url('/g703/'.$item->id)}}" class="btn btn-brand m-btn m-btn--icon m-btn--icon-only">
                                                        <i class="fa fa-print"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{url('/delete_item/'.$item->id)}}" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>


                                                {{-- <td> @if( isset($carone->b_made) && $carone->b_made == 1) Verkaufte @else Unverkaufte @endif</td> --}}
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>




                </div>
            </div>


        </div>
    </div>
    <br><br>
    <!-- END: main body -->

@endsection
@section('script')
<script>
$(document).ready(function(){
        toastr.options = {
            "closeButton": false,
            "debug": true,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "10000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            };
    })

@if(session()->has('message'))
toastr.success("{{ session()->get('message') }}");
@endif


</script>
<script src="{{asset('public/assets/cars/app/js/dashboard.js')}}"></script>
<script src="{{asset('public/assets/cars/demo/default/custom/components/datatables/base/carlist.js')}}"></script>
<script src={{asset('public/assets/cars/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js')}} type="text/javascript"></script>
<script src={{asset('public/assets/cars/demo/default/custom/components/forms/widgets/bootstrap-select.js')}}></script>
@endsection
