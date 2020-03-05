@extends('layout.carmaster')
@section('main')
<style>
.input-group .form-control, .input-group-addon, .input-group-btn {
    display: flex;
    align-items: center;
    border-top: white;
    border-right: white;
    border-left: white;
    padding-left: 0px;
    border-radius: 0px;
}
.input-group .form-control, .input-group-addon, .input-group-btn {
    display: flex;
    align-items: center;
    border-top: white;
    border-right: white;
    border-left: white;
}
.input-group-addon{
    color: #000000 !important;
    border-color: #ffffff;
    background-color: #ffffff !important;
    border-bottom: 1px solid #ebedf2 !important;
}
.form-control.m-input{
    text-align:left ;
}

.m-input-icon.m-input-icon--left .form-control{
    padding-left:1rem !important;
}

.m-input-icon.m-input-icon--left .form-control.with-icon{
    padding-left:2.5rem !important;
}
.select2-dropdown.select2-dropdown--above{
    width:100% !important;
}
</style>

<!-- BEGIN: main body -->
<div class="m-subheader">
        <div class="row">
            <!-- begin : fahrzeug info -->
            <div class=" col-md-12 animated fadeIn">
                <br>
                <div class="m-portlet m-portlet--tabs shadow-group">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-tools">
                                <ul class="nav nav-tabs m-tabs-line m-tabs-line--primary m-tabs-line--2x" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab" aria-expanded="true">
                                            New AIA
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <br>

                    <div class="m-portlet__body" style="padding-top:10px;padding-bottom: 1px;">
                        {{-- start : creating one car --}}
                        <form action="{{url('/createAia')}}" method="POST" id="create-aia" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <!-- start :G702/G703 -->
                                <div class="row">
                                    <div class="col">
                                        <h3>AIA G702/G703</h3>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group m-form__group">
											<label class="form-label label-top-title">
												Project Name
											</label>
											<div class="m-input-icon m-input-icon--left">
												<input type="text" name='project_name' class="form-control m-input" placeholder="">
											</div>
										</div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group m-form__group">
											<label class="form-label label-top-title">
												Contractors Job Number
											</label>
											<div class="m-input-icon m-input-icon--left">
												<input type="text"  max='12'   name="contract_number" class="form-control m-input head-no" placeholder="">
											</div>
										</div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group m-form__group">
											<label class="form-label label-top-title">
												Agreement Number
											</label>
											<div class="m-input-icon m-input-icon--left">
												<input type="text" max="15" name="agreement_number" class="form-control m-input  head-no" placeholder="">
											</div>
										</div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group m-form__group">
											<label class="form-label label-top-title">
												Contract For
											</label>
											<div class="m-input-icon m-input-icon--left">
												<input type="text"  name="contract_for" class="form-control m-input" placeholder="">
											</div>
										</div>
                                    </div>

                                </div>




                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group m-form__group">
											<label class="form-label label-top-title">
												Application Number
											</label>
											<div class="m-input-icon m-input-icon--left">
												<input type="text" name="project_number" class="form-control m-input head-no" placeholder="">
											</div>
										</div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group m-form__group">
											<label class="form-label label-top-title">
												Period From
                                            </label>
                                            <div class="input-group date" id="m_datepicker_3" style="border: 1px solid #57596226;">
												<input type="text" name="period_from" class="form-control m-input" readonly="" value="" style="border-bottom:none;padding-left:1rem;">
												<span class="input-group-addon">
													<i class="la la-calendar"></i>
												</span>
                                            </div>


										</div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group m-form__group">
											<label class="form-label label-top-title">
												Period To
                                            </label>
                                            <div class="input-group date" id="m_datepicker_3" style="border: 1px solid #57596226;">
												<input type="text" name="period_to" class="form-control m-input" readonly="" value="" style="border-bottom:none;padding-left:1rem;">
												<span class="input-group-addon">
													<i class="la la-calendar"></i>
												</span>
                                            </div>


										</div>
                                    </div>

                                </div>





                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group m-form__group">
											<label class="form-label label-top-title">
												Contract Date
                                            </label>
                                            <div class="input-group date" id="m_datepicker_3" style="border: 1px solid #57596226;">
												<input type="text" name="contract_date" class="form-control m-input" readonly="" value="" style="border-bottom:none;padding-left:1rem;">
												<span class="input-group-addon">
													<i class="la la-calendar"></i>
												</span>
                                            </div>


										</div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group m-form__group">
											<label class="form-label label-top-title">
												Architect Job No.
											</label>
											<div class="m-input-icon m-input-icon--left">
												<input type="text" name="job_no" mix='11' class="form-control m-input head-no" placeholder="">
											</div>
										</div>
                                    </div>

                                </div>
                            <!-- END : G702/G703 -->
                            <hr>
                            <!-- start : G702 -->
                            <div class="row">
                                <div class="col">
                                    <h3>G702</h3>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group m-form__group">
                                        <label class="form-label label-top-title" style="font-weight:800;">
                                            To Type
                                        </label>
                                        <div class="m-input-icon m-input-icon--left">
                                            <select class="form-control m-input" name="to_type" id="to_type">
                                                <option value="1">
                                                    Owner
                                                </option>
                                                <option value="2">
                                                    Contractor
                                                </option>
                                                <option value="3">
                                                    Subcontractor
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group m-form__group">
                                        <label class="form-label label-top-title">
                                            To Name
                                        </label>
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text"  name='to_name' class="validate-leng form-control m-input" placeholder="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group m-form__group">
                                        <label class="form-label label-top-title">
                                            To Address
                                        </label>
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="to_address1" class="validate-leng form-control m-input" placeholder="">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group m-form__group">

                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="to_address2" class="form-control m-input" placeholder="">
                                        </div>
                                    </div> --}}

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group m-form__group">

                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="to_city" class="form-control m-input to-add-validate" placeholder="">
                                        </div>
                                        <label class="form-label label-bottom-title">
                                            City
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group m-form__group">

                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="to_state" class="form-control m-input to-add-validate" placeholder="">
                                        </div>
                                        <label class="form-label label-bottom-title">
                                            State/Province
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group m-form__group">

                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="to_zip" class="form-control m-input to-add-validate" placeholder="">
                                        </div>
                                        <label class="form-label label-bottom-title">
                                            Zip/Postal
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group m-form__group" id="countries-group">
                                        <select class="form-control" name="to_country" id="countries" style="width:100% !important;">
                                            @foreach($countries as $one)
                                                <option value={{$one->code}} data-capital={{$one->capital}}>{{$one->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="exampleSelect1">
                                            Country
                                        </label>
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group m-form__group">
                                        <label class="form-label label-top-title" style="font-weight:800;">
                                            From type
                                        </label>
                                        <div class="m-input-icon m-input-icon--left">
                                            <select class="form-control m-input" name="from_type" id="from_type">
                                                <option value="1">
                                                    Owner
                                                </option>
                                                <option value="2">
                                                    Contractor
                                                </option>
                                                <option value="3">
                                                    Subcontractor
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group m-form__group">
                                        <label class="form-label label-top-title">
                                            From Name
                                        </label>
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="from_name" class="validate-leng form-control m-input" placeholder="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group m-form__group">
                                        <label class="form-label label-top-title">
                                            From Address
                                        </label>
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="from_address1" class="validate-leng form-control m-input" placeholder="">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group m-form__group">

                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="from_address2" class="form-control m-input" placeholder="">
                                        </div>
                                    </div> --}}

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group m-form__group">

                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="from_city" class="form-control m-input from-add-validate" placeholder="">
                                        </div>
                                        <label class="form-label label-bottom-title">
                                            City
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group m-form__group">

                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="from_state" class="form-control m-input from-add-validate" placeholder="">
                                        </div>
                                        <label class="form-label label-bottom-title">
                                            State/Province
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group m-form__group">

                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" name="from_zip" class="form-control m-input from-add-validate" placeholder="">
                                        </div>
                                        <label class="form-label label-bottom-title">
                                            Zip/Postal
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group m-form__group" id="countries2-group">

                                        <select class="form-control" name="from_country" id="countries2" style="width:100% !important;">
                                            @foreach($countries as $one)
                                                <option value={{$one->code}} data-capital={{$one->capital}}>{{$one->name}}</option>
                                            @endforeach
                                          </select>
                                        <label for="exampleSelect1">
                                            Country
                                        </label>
                                    </div>

                                </div>

                            </div>


                        <!-- END : creating one -->
                        <hr>
                        {{-- Start : G703 --}}
                        <div class="row">
                            <div class="col-md-12"><h3>G703</h3></div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group m-form__group">
                                    <label class="form-label label-top-title">
                                        Retainage
                                    </label>
                                    <div class="m-input-icon m-input-icon--left">
                                        <input type="text" name="retainage" class="form-control m-input text-left with-icon" required>
                                        <span class="m-input-icon__icon m-input-icon__icon--left">
                                            <span>
                                                <i class="fa">%</i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- End : G703 --}}
                        {{-- Start : Repeater --}}
                        <div class="row">
                            <div class="col-md-12"><h3>Repeater</h3></div>
                        </div>
                        <div class="repeater-group">
                            <div class="repeater-item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group m-form__group">
                                            <label class="form-label label-top-title">
                                                Description of Work
                                            </label>
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" name="work_description[]" class="form-control m-input text-left" >
                                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                                    <span>
                                                        <i class="fa "></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group m-form__group">
                                            <label class="form-label label-top-title">
                                                Scheduled Value
                                            </label>
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" value="0" name="scheduled_value[]" class="form-control m-input text-left with-icon" >
                                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                                    <span>
                                                        <i class="fa ">$</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group m-form__group">
                                            <label class="form-label label-top-title">
                                                Previous Period Value
                                            </label>
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" value="0" name="period_value[]" class="form-control m-input text-left" >
                                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                                    <span>
                                                        <i class="fa "></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group m-form__group">
                                            <label class="form-label label-top-title">
                                                Percentage to Bill this period
                                            </label>
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" value="0" name="bill_percentage[]" class="form-control m-input text-left with-icon" >
                                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                                    <span>
                                                        <i class="fa">%</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row" >
                                    <div class="col-md-1 col-sm-3 add-item">
                                        <a href="" class="btn btn-primary btn-sm m-btn  m-btn m-btn--icon m-btn--pill add-btn-group">
                                            <span>
                                                <i class="fa fa-plus-circle"></i>
                                                <span>
                                                    Add
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-md-1 col-sm-3 remove-item">
                                        <a href="" class="btn btn-danger m-btn btn-sm 	m-btn m-btn--icon m-btn--pill remove-btn-group">
                                            <span>
                                                <i class="fa fa-minus-circle"></i>
                                                <span>
                                                    Remove
                                                </span>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12"><h3>Change order</h3></div>
                        </div>

                        <div class="o_repeater-group">
                            <div class="o_repeater-item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group m-form__group">
                                            <label class="form-label label-top-title">
                                                Description of Work
                                            </label>
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" name="o_work_description[]" class="form-control m-input text-left" >
                                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                                    <span>
                                                        <i class="fa "></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group m-form__group">
                                            <label class="form-label label-top-title">
                                                Scheduled Value
                                            </label>
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" value="0" name="o_scheduled_value[]" class="form-control m-input text-left with-icon" required >
                                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                                    <span>
                                                        <i class="fa ">$</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group m-form__group">
                                            <label class="form-label label-top-title">
                                                Previous Period Value
                                            </label>
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" name="o_period_value[]" value="0" class="form-control m-input text-left" >
                                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                                    <span>
                                                        <i class="fa "></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group m-form__group">
                                            <label class="form-label label-top-title">
                                                Percentage to Bill this period
                                            </label>
                                            <div class="m-input-icon m-input-icon--left">
                                                <input value="0" type="text" name="o_bill_percentage[]" class="form-control m-input text-left with-icon" required>
                                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                                    <span>
                                                        <i class="fa">%</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row" >
                                    <div class="col-md-1 col-sm-3 o_add-item">
                                        <a href="" class="btn btn-primary btn-sm m-btn  m-btn m-btn--icon m-btn--pill add-btn-group">
                                            <span>
                                                <i class="fa fa-plus-circle"></i>
                                                <span>
                                                    Add
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-md-1 col-sm-3 o_remove-item">
                                        <a href="" class="btn btn-danger m-btn btn-sm 	m-btn m-btn--icon m-btn--pill remove-btn-group">
                                            <span>
                                                <i class="fa fa-minus-circle"></i>
                                                <span>
                                                    Remove
                                                </span>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>








                        {{-- End : repeater --}}
                        <br>
                        <div class="row">

                            <div class="col-md-4 text-left">
                                <a href="" class="btn btn-primary m-btn m-btn--icon m-btn--pill m-btn--air " id="create-aia-submit">
                                    <span>
                                        <i class="fa fa-send"></i>
                                        <span>
                                            Submit
                                        </span>
                                    </span>
                                </a>

                            </div>
                        </div>
                        <br>


                        </form>
                        {{-- end : creating one car --}}
                    </div>
                </div>

            </div>
            <!-- end : fahrzeug info -->


        </div>
    </div>
    <!-- END: main body -->

@endsection
@section('script')
<script>
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
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    };
    @if(isset($msg) && $msg != null)
        toastr.error("{{isset($msg)?$msg:""}}");
    @endif

</script>
<script src="{{asset('public/assets/cars/app/js/dashboard.js')}}"></script>

<script src={{asset('public/assets/cars/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js')}} type="text/javascript"></script>
<script>
$(function(){
    $(document).on('click','.add-item',function(e){

        e.preventDefault();
        var repeater_group = $('.repeater-group'),
           current_item = $(this).parents('.repeater-item:first'),
        new_item = (current_item.clone()).appendTo(repeater_group);
        new_item.find('input').val('');
        $(this).closest('.repeater-item').find('.add-item').remove();
        //new_item.find('.add-item').remove();
    }).on('click','.remove-item',function(e){
        e.preventDefault();
        $(this).parents('.repeater-item:first').remove();

        return false;

    }).on('click','.o_add-item',function(e){

    e.preventDefault();
    var repeater_group = $('.o_repeater-group'),
    current_item = $(this).parents('.o_repeater-item:first'),
    new_item = (current_item.clone()).appendTo(repeater_group);
    new_item.find('input').val('');
    $(this).closest('.o_repeater-item').find('.o_add-item').remove();
    //new_item.find('.add-item').remove();
    }).on('click','.o_remove-item',function(e){
    e.preventDefault();
    $(this).parents('.o_repeater-item:first').remove();

    return false;

    });
});





$('#create-aia-submit').click(function(e){
    var retainage = $("input[name='retainage']").val();

    if(retainage/1 == retainage && retainage !=undefined && retainage !=""  ){
        e.preventDefault();
        $('#create-aia').submit();
    } else {
        e.preventDefault();
        toastr.error('Error! plear make sure the retainage.');
    }

})

function format(item, state) {
  if (!item.id) {
    return item.text;
  }
  var countryUrl = "https://lipis.github.io/flag-icon-css/flags/4x3/";
  var stateUrl = "https://oxguy3.github.io/flags/svg/us/";
  var url = state ? stateUrl : countryUrl;
  var img = $("<img>", {
    class: "img-flag",
    width: 26,
    src: url + item.element.value.toLowerCase() + ".svg"
  });
  var span = $("<span>", {
    text: " " + item.text
  });
  span.prepend(img);
  return span;
}

// $('#countries-group').hover(function(){

//     $("html, body").animate({ scrollTop: "900px" });

// });

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



$(".head-no").on('input', function () {
    var _this = $(this);
    var value = $(this).val();

    if ((value !== '') && (value.indexOf('.') === -1)) {
        if(value.length>11 ){
            _this.val(value.substring(0,11));
            toastr.error('Please input  less than 11 characters');

        }
    }
});

$("input[name='project_name']").on('input', function () {
    var _this = $(this);
    var value = $(this).val();
    if ((value !== '') && (value.indexOf('.') === -1)) {
        if(value.length>34 ){
            _this.val(value.substring(0,34));
            toastr.error('Please input  less than 35 characters');

        }
    }
});

$("input[name='contract_for']").on('input', function () {
    var _this = $(this);
    var value = $(this).val();
    if ((value !== '') && (value.indexOf('.') === -1)) {
        if(value.length>34 ){
            _this.val(value.substring(0,34));
            toastr.error('Please input  less than 35 characters');

        }
    }
});

$("input[name='to_zip']").on('input', function () {
    var _this = $(this);
    var value = $(this).val();
    if ((value !== '') && (value.indexOf('.') === -1)) {
        if(value.length>10 ){
            _this.val(value.substring(0,10));
            toastr.error('Please input  less than 10 characters');

        }
    }
});

$("input[name='from_zip']").on('input', function () {
    var _this = $(this);
    var value = $(this).val();
    if ((value !== '') && (value.indexOf('.') === -1)) {
        if(value.length>10 ){
            _this.val(value.substring(0,10));
            toastr.error('Please input  less than 10 characters');

        }
    }
});

$(".validate-leng").on('input', function () {
    var _this = $(this);
    var value = $(this).val();
    if ((value !== '') && (value.indexOf('.') === -1)) {
        if(value.length>34 ){
            _this.val(value.substring(0,35));
            toastr.error('Please input  less than 35 characters');

        }
    }
});


function to_longaddress(){
    var to_city = $("input[name='to_city']").val();
    var to_state = $("input[name='to_state']").val();
    var to_zip = $("input[name='to_zip']").val();
    var long_address = to_city + to_state + to_zip;
    if ((long_address !== '') && (long_address.indexOf('.') === -1)) {
        if(long_address.length>30 ){
            //_this.val(value.substring(0,30));
            toastr.error('Please input  less than 10 characters');
            return true;
        } else {
            return false;
        }
    }


}

function from_longaddress(){
    var to_city = $("input[name='from_city']").val();
    var to_state = $("input[name='from_state']").val();
    var to_zip = $("input[name='from_zip']").val();
    var long_address = to_city + to_state + to_zip;
    if ((long_address !== '') && (long_address.indexOf('.') === -1)) {
        if(long_address.length>30 ){
            //_this.val(value.substring(0,30));
            toastr.error('Please input  less than 10 characters');
            return true;
        } else {
            return false;
        }
    }

}



$(function(){
    $(document).on('input','.to-add-validate',function(e){
        _this = $(this);
        if(to_longaddress()){
            _this.val('');
        }

    }).on('input','.from-add-validate',function(e){
        _this = $(this);
        if(from_longaddress()){
            _this.val('');
        }


    });
});
@if($errors->any())
    toastr.error('Please make sure your scheduled value');
@endif



$(document).ready(function() {



  $("#countries").select2({

    templateResult: function(item) {
      return format(item, false);
    }
  });
  $("#countries2").select2({
    templateResult: function(item) {
      return format(item, false);
    }
  });

});


</script>
@endsection
