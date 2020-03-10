@extends('layout.carmaster')
@section('main')
<style>
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
    text-align:right ;
}
.stock_sel{
    margin: 4px;
}
input::-webkit-calendar-picker-indicator {
  display: inherit ;
}

select::-ms-expand {
    display: none;
}

/* This is to remove the arrow of select element in IE */
select::-ms-expand {    display: none; }
select{
    -webkit-appearance: none;
    appearance: none;
}

/* Hide the list on focus of the input field */
datalist {
    display: none;
}
/* specifically hide the arrow on focus */
input::-webkit-calendar-picker-indicator {
    display: none;
}
/*@-moz-document url-prefix(){
    #s_company{border: 1px solid #CCC; border-radius: 4px; box-sizing: border-box; position: relative; overflow: hidden;}
  #s_company select { width: 110%; background-position: right 30px center !important; border: none !important;}
}*/
</style>
<!-- BEGIN: main body -->
<div class="m-subheader">
    <div class="row">
        <!-- begin : fahrzeug info -->
        <div class=" col-md-12 animated ">
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="m-portlet m-portlet--tabs">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-tools">
                                <ul class="nav nav-tabs m-tabs-line m-tabs-line--primary m-tabs-line--2x" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link @if(isset($tabconfirm) && $tabconfirm   == "cartab") active @endif " data-toggle="tab" href="#m_tabs_6_1" role="tab" aria-expanded="true">
                                            Fahrzeugdaten
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link @if(isset($tabconfirm) && $tabconfirm   == "sellingtab") active @endif " data-toggle="tab" href="#m_tabs_6_2" role="tab" aria-expanded="false">

                                            Ankauf
                                        </a>
                                    </li>
                                    @if($caroneinfo->s_made == 1 && $caroneinfo->s_made == 1)
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link @if(isset($tabconfirm) && $tabconfirm   == "buyingtab") active @endif" data-toggle="tab" href="#m_tabs_6_3" role="tab" aria-expanded="false">

                                            Verkauf
                                        </a>
                                    </li>
                                    @endif
                                    {{-- <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab" aria-expanded="false">
                                            <i class="la la-bell-o"></i>
                                            Logs
                                        </a>
                                    </li> --}}

                                </ul>

                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="tab-content">
                                <input type="hidden" name="car_id" id="car-id" value="{{$caroneinfo->id}}">
                                <!-- start : pane 1 -->
                                <div class="tab-pane @if(isset($tabconfirm) && $tabconfirm == "cartab")active @endif" id="m_tabs_6_1" role="tabpanel" aria-expanded="true">
                                    <div class="col-md-12">
                                        <form action="{{url("updatecar")}}" method="POST">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="hidden" id="c_id" name="c_id" value="{{$caroneinfo->id}}">
                                            <input type="hidden" name="c_name" value="{{$caroneinfo->c_name}}">
                                            <input type="hidden" name="c_finnumber" value="{{$caroneinfo->c_finnumber}}">
                                            <input type="hidden" name="c_shape" value="{{$caroneinfo->c_shape}}">

                                            <input type="hidden" id="b_saledate_cal" value="{{$caroneinfo->b_saledate_a}}">

                                            <div class="row">

                                                <div class="col-md-6 ">
                                                    <h4 style="">Allgemeine Daten</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group">
                                                        <span class="input-group-addon">
                                                            Fahrzeugname
                                                        </span>
                                                        <input type="text" maxlength="63"  name="c_name"  class="form-control m-input"  aria-describedby="basic-addon1" placeholder="Fahrzeugname" value="{{$caroneinfo->c_name}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group">
                                                        <span class="input-group-addon">
                                                            FIN
                                                        </span>
                                                        <input type="text" maxlength="63"  name="c_finnumber" class="form-control m-input"  aria-describedby="basic-addon1" placeholder="FIN" value="{{$caroneinfo->c_finnumber}}"  required >
                                                    </div>

                                                </div>
                                                <div class="col-md-2">
                                                    
                                                </div>
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group">
                                                        <span class="input-group-addon">
                                                            Aufbauvariante
                                                        </span>
                                                        <input type="text" maxlength="63"  name="c_shape" class="form-control m-input"  aria-describedby="basic-addon1" placeholder="Aufbauvariante" value="{{$caroneinfo->c_shape}}" >
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group">
                                                        <span class="input-group-addon">
                                                            Erstzulassung
                                                        </span>
                                                        <input type="text" name="c_r_date" class=" text-right form-control" value="{{$caroneinfo->c_r_date}}"  id="m_datepicker_1" readonly="" placeholder="Erstzulassung">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    
                                                </div>
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group mt-2" >
                                                        <div class="input-group m-input-group">
                                                            <span class="input-group-addon">
                                                                Kilometer
                                                            </span>
                                                            <input type="number" max="1000000000000000000000"  name="c_kilometer" class="form-control m-input" aria-describedby="basic-addon1" value="{{$caroneinfo->c_kilometer}}"  placeholder="Kilometer">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group mt-2" >
                                                        <div class="input-group m-input-group">
                                                            <span class="input-group-addon">
                                                                Kilowatt
                                                            </span>
                                                            <input type="number" max="1000000000000000000000"  name="c_kw" class="form-control m-input" aria-describedby="basic-addon1" value="{{$caroneinfo->c_kw}}"  placeholder="Kilowatt" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    
                                                </div>
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group mt-2" >
                                                        <div class="input-group m-input-group">
                                                            <span class="input-group-addon">
                                                                Farbe
                                                            </span>
                                                            <input type="text"  maxlength="63" name="c_color" class="form-control m-input" aria-describedby="basic-addon1" placeholder="Farbe" value="{{$caroneinfo->c_color}}"  >
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- tester 1 -->                                                
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group mt-2" >
                                                        <span class="input-group-addon">Vorbesitzer</span>
                                                        <input type="text"  maxlength="63" name="c_car_no" value="{{$caroneinfo->c_car_no}}"  class="form-control m-input" aria-describedby="basic-addon1" placeholder="Vorbesitzer" >
                                                    </div>
                                                </div>  
                                                <div class="col-md-2">
                                                    
                                                </div>                                              
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    &nbsp;
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <h4 style="">Ausstattungen oder Bemerkungen</h4>
                                                </div>
                                            </div>

                                            <div class="row">
                                                 <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group mt-2" >
                                                        <span class="input-group-addon">Ausstattung 1</span>
                                                        <input type="text" name="c_equip1" maxlength="63" class="form-control m-input" aria-describedby="basic-addon1" value="{{$caroneinfo->c_equip1}}"    placeholder="Ausstattung 1">
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group mt-2" >
                                                        <span class="input-group-addon">Ausstattung 2</span>
                                                        <input type="text" name="c_equip2" maxlength="63"  class="form-control m-input" aria-describedby="basic-addon1" value="{{$caroneinfo->c_equip3}}"    placeholder="Ausstattung 2">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    
                                                </div>
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group mt-2" >
                                                        <span class="input-group-addon">Ausstattung 3</span>
                                                        <input type="text" name="c_equip3" maxlength="63"  class="form-control m-input" aria-describedby="basic-addon1"  value="{{$caroneinfo->c_equip2}}"   placeholder="Ausstattung 3">
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group col-md-5">
                                                    <div class="input-group m-input-group mt-2" >
                                                        <span class="input-group-addon">Ausstattung 4</span>
                                                        <input type="text" name="c_equip4" maxlength="63"  class="form-control m-input" aria-describedby="basic-addon1"  value="{{$caroneinfo->c_equip4}}"   placeholder="Ausstattung 4">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9"></div>
                                                <div class="col-md-2">

                                                    <button type="submit" class="btn m-btn--pill    btn-primary m-btn m-btn--custom">
                                                        <span>
                                                            <i class="la la-save"></i>
                                                            <span>Speichern</span>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="{{url('alldelete/'.$caroneinfo->id)}}" class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only  m-btn--pill m-btn--air deletecar">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                    &nbsp;
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end : pane 1 -->
                                <!-- start : pane 2 -->
                                <div class="tab-pane  @if(isset($tabconfirm) && $tabconfirm   == "sellingtab") active @endif" id="m_tabs_6_2" role="tabpanel" aria-expanded="false">
                                    
                                        <div class="col-md-12">
                                            <form  method="POST" action="{{url('updateselling')}}">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input type="hidden" name="c_id" value="{{$caroneinfo->id}}">
                                                <input type="hidden" id="s_customer_confirm" name="b_customer_confirm" value="0">
                                               
                                                    <div class="row" >
                                                        <div class="col-md-6">  <h4 >Verkäufer</h4></div>
                                                         <div class="col-md-6"></div>

                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon company-style"  >
                                                                    Anrede
                                                                </span>
                                                                <select class="form-control m-input" dir="rtl" name="s_company" aria-describedby="option-error" aria-invalid="ture" id="s_company" 
                                                                @if(isset($caroneinfo->s_company))
                                                                    value="{{$caroneinfo->s_company}}"
                                                                @else
                                                                    value="" placeholder="Herr / Frau / Firma"
                                                                @endif
                                                                >
                                                                    <option value="1" @if(isset($caroneinfo->s_company) && $caroneinfo->s_company==1) selected @endif>
                                                                        Herr
                                                                    </option>
                                                                    <option value="2" @if(isset($caroneinfo->s_company) && $caroneinfo->s_company==2) selected @endif>
                                                                        Frau
                                                                    </option>
                                                                    <option value="3" @if(isset($caroneinfo->s_company) && $caroneinfo->s_company==3) selected @endif>
                                                                        Firma
                                                                    </option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon">
                                                                    Ankaufsdatum
                                                                </span>
                                                                <div class="input-group date" id="m_datepicker_3">
                                                                <input type="text"   class="form-control m-input "
                                                                @if(isset($caroneinfo->s_saledate))
                                                                  value="{{trim($caroneinfo->s_saledate)}}" @else value="{{date('d.m.Y')}}" @endif name="s_saledate" 

                                                                  id="s_saledate"  placeholder="DD.MM.YYYY"  >
                                                                    <span class="input-group-addon">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Vorname
                                                                </span>
                                                            <input type="text" id="s_f_name" class="form-control m-input"  aria-describedby="basic-addon1" name="s_f_name" value="{{$caroneinfo->s_f_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Nachname
                                                                </span>
                                                            <!-- <input type="text" class="form-control m-input"  aria-describedby="basic-addon1" name="s_s_name" value="" > -->
                                                            <input list="browsers" id="s_s_name" class="form-control m-input" name="s_s_name" value="{{$caroneinfo->s_s_name}}" id="s_s_name" required="">
                                                              <datalist id="browsers">
                                                                @foreach($address_list as $addressone)
                                                                    <option class="select_name" value="{{$addressone->second_name}}" data-addressid="{{$addressone->id}}">
                                                                @endforeach
                                                               
                                                              </datalist>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon">
                                                                    Geburtsdatum
                                                                </span>
                                                                <div class="input-group date" id="m_datepicker_3">
                                                                    <input type="text" id="s_birth" name="s_birth" class="form-control m-input"  name="s_birth" value="{{isset($caroneinfo->s_birth)?$caroneinfo->s_birth:''}}"   placeholder="DD.MM.YYYY"  >
                                                                    <span class="input-group-addon">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        
                                                        <div  class="form-group m-form__group col-md-4" >
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    E-mail
                                                                </span>
                                                            <input type="email" id="s_email" class="form-control m-input"  aria-describedby="basic-addon1" name="s_email" value="{{$caroneinfo->s_email}}" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Telefon
                                                                </span>
                                                                <input type="text" id="s_phonenum" class="form-control m-input" name="s_phonenum"   aria-describedby="basic-addon1" value="{{$caroneinfo->s_phonenum}}" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Telefax
                                                                </span>
                                                                <input type="text" id="s_fax" class="form-control m-input"  name="s_fax" aria-describedby="basic-addon1" value="{{$caroneinfo->s_fax}}" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Straße
                                                                </span>
                                                            <input type="text" id="s_street" class="form-control m-input"  aria-describedby="basic-addon1" name="s_street"  value="{{$caroneinfo->s_street}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Nummer
                                                                </span>
                                                            <input type="text" id="s_nummber" class="form-control m-input"  aria-describedby="basic-addon1"  name="s_nummber"  value="{{$caroneinfo->s_nummber}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Stadt
                                                                </span>
                                                            <input type="text" id="s_city" class="form-control m-input"  aria-describedby="basic-addon1" name="s_city" value="{{$caroneinfo->s_city}}" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Postleitzahl
                                                                </span>
                                                                <input type="text" id="s_postalcode" class="form-control m-input"  aria-describedby="basic-addon1" name="s_postalcode"  value="{{$caroneinfo->s_postalcode}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Adresszusatz
                                                                </span>
                                                            <input type="text" id="s_add1" class="form-control m-input"  aria-describedby="basic-addon1" value="{{$caroneinfo->s_add1}}" name="s_add1"  >
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Land
                                                                </span>
                                                            <input type="text" id="s_country" class="form-control m-input"  aria-describedby="basic-addon1"  @if (isset($caroneinfo->s_country))
                                                            value="{{$caroneinfo->s_country}}" 
                                                            @else  value="" @endif name="s_country"  >
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-4">
                                                            
                                                        </div>

                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Webseite
                                                                </span>
                                                            <input type="text" id="s_website" class="form-control m-input"  aria-describedby="basic-addon1" value="{{$caroneinfo->s_website}}" name="s_website"  >
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Steuernummer
                                                                </span>
                                                                <input type="text" id="s_tax" class="form-control m-input"  name="s_tax" aria-describedby="basic-addon1" value="{{$caroneinfo->s_tax}}">
                                                            </div>
                                                        </div>   
                                                        <div class="col-md-4">
                                                            
                                                        </div>                                                   
                                                     


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 ">
                                                            <h4 style=" padding-top:20px;">Notizen</h4>
                                                        </div>
                                                        <div class="col-md-6 ">
                                                        </div>
                                                        
                                                            <div class="form-group m-form__group col-md-4">
                                                                <div class="input-group m-input-group">
                                                                    <span class="input-group-addon" >
                                                                        Bemerkung 1
                                                                    </span>
                                                                <input type="text" class="form-control m-input"  aria-describedby="basic-addon1" name="s_note1"  value="{{$caroneinfo->s_note1}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group col-md-4">
                                                                <div class="input-group m-input-group">
                                                                    <span class="input-group-addon" >
                                                                        Bemerkung 2
                                                                    </span>
                                                                    <input type="text" class="form-control m-input"  aria-describedby="basic-addon1" name="s_note2" value="{{$caroneinfo->s_note2}}" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                
                                                            </div>
                                                            <div class="form-group m-form__group col-md-4">
                                                                <div class="input-group m-input-group">
                                                                    <span class="input-group-addon" >
                                                                        Abholung
                                                                    </span>
                                                                    <input type="text" class="form-control m-input"  aria-describedby="basic-addon1" name="s_pickup" value="{{$caroneinfo->s_pickup}}" >
                                                                </div>
                                                            </div>


                                                            <div class="form-group m-form__group col-md-4">
                                                                <div class="input-group m-input-group">
                                                                    <span class="input-group-addon" >
                                                                        Zahlung
                                                                    </span>
                                                                    <input type="text" class="form-control m-input"  aria-describedby="basic-addon1" name="s_payment" value="{{$caroneinfo->s_payment}}" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                
                                                            </div>

                                                        
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 ">
                                                            <h4 style=" padding-top:20px;">Ankaufpreis</h4>
                                                        </div>
                                                        <div class="col-md-6"></div>
                                                        <div class="col-md-3 left-padding-no">
                                                            <div class="input-group m-input-group col-md-12">
                                                                <span class="input-group-addon" >
                                                                    Netto in €
                                                                </span>
                                                                
                                                            <input type="text" data-type="currency"  class="form-control m-input" name="s_value"   id="s_value" aria-describedby="basic-addon1" @if(isset($caroneinfo->s_value) && $caroneinfo->s_value !=0 )value="@convert($caroneinfo->s_value)" @else value='0,00' @endif  min='0' >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-group m-input-group col-md-12 left-padding-no">
                                                                <span class="input-group-addon" >
                                                                    Mehrwertsteuer in €
                                                                </span>
                                                                <input type="text" data-type="currency"  name='s_must' id="s_must" class="form-control m-input"  aria-describedby="basic-addon1"
                                                                @if(isset($caroneinfo->s_vat_value) && $caroneinfo->s_vat_value != 0)
                                                                value="@convert($caroneinfo->s_vat_value)"
                                                                @else
                                                                value="0,00"
                                                                @endif

                                                                >
                                                            </div>



                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Brutto in €
                                                                </span>
                                                            <input type="text" data-type="currency"  id="s_brutto" class="form-control m-input"  aria-describedby="basic-addon1" name="s_total"
                                                            @if(isset($caroneinfo->s_total) && $caroneinfo->s_total != 0 )
                                                                    value="@convert($caroneinfo->s_total)"
                                                                @else
                                                                    value="0,00"
                                                                @endif >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon">
                                                                    Nettominderung in €
                                                                </span>
                                                                <input type="text" data-type="currency"  name="s_reduce" id="s_reduce" class="form-control m-input"
                                                                @if(isset($caroneinfo->s_net_reduce) && $caroneinfo->s_net_reduce != 0)
                                                                    value="@convert($caroneinfo->s_net_reduce)"
                                                                @else
                                                                    value="0,00"
                                                                @endif >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="row">
                                                                

                                                                <div class="col-4">
                                                                    <span class="m-switch m-switch--outline m-switch--icon m-switch--accent" style="padding-top: 10px">
                                                                        <label>
                                                                            <input type="checkbox" id="s_25a"
                                                                            @if($caroneinfo->s_25a == "1")
                                                                                checked='checked'
                                                                                data-sel = '1'

                                                                            @else

                                                                                data-sel = '0'
                                                                            @endif
                                                                            >
                                                                            <input type="hidden" id="s_25a_a" name="s_25a"
                                                                            @if($caroneinfo->s_25a == "1")
                                                                                value="1"
                                                                            @else
                                                                                value="0"
                                                                            @endif

                                                                            >
                                                                            <span></span>
                                                                        </label>
                                                                    </span>
                                                                </div>
                                                                <label class="col-8 col-form-label" style="margin-top: 10px">
                                                                    Ankauf nach §25a
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="row">
                                                                
                                                                <div class="col-3">
                                                                    <span class="m-switch m-switch--outline m-switch--icon m-switch--accent" style="padding-top: 10px">
                                                                        <label>
                                                                            <input type="checkbox"
                                                                            @if($caroneinfo->s_netto == "1")
                                                                                checked='checked'
                                                                                value="1"
                                                                                data-sel = '1'
                                                                            @else
                                                                                value='0'
                                                                                data-sel = '0'
                                                                            @endif

                                                                            id="s_netto">
                                                                            <input type="hidden" id="s_netto_a" name="s_netto"
                                                                            @if($caroneinfo->s_netto == "1")
                                                                                value="1"
                                                                            @else
                                                                                value="0"
                                                                            @endif
                                                                            >

                                                                            <span></span>
                                                                        </label>
                                                                    </span>
                                                                </div>
                                                                <label class="col-7 col-form-label" style="margin-top: 10px">
                                                                    MwSt. ausweisbar
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 ">
                                                            <h4 style=" padding-top:20px;">Sonstige Kosten</h4>
                                                        </div>
                                                        <div class="col-md-6"></div>
                                                        <div class="col-md-4 left-padding-no">
                                                            <div class="input-group m-input-group col-md-12">
                                                                <span class="input-group-addon" >
                                                                    Überführungsgebühren 
                                                                </span>
                                                            <input type="text" data-type="currency" class="form-control m-input" name="s_kosten1"  id="s_kosten1" aria-describedby="basic-addon1" @if(isset($caroneinfo->s_kosten1)) value="{{$caroneinfo->s_kosten1}}"  @else value='0,00' @endif> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="input-group m-input-group col-md-12">
                                                                <span class="input-group-addon" >
                                                                    Reparaturkosten 
                                                                </span>
                                                            <input type="text" data-type="currency" class="form-control m-input" name="s_kosten2"  id="s_kosten2" aria-describedby="basic-addon1" @if(isset($caroneinfo->s_kosten2)) value="{{$caroneinfo->s_kosten2}}"  @else value='0,00' @endif  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                        </div>
                                                        <div class="col-md-4 left-padding-no">
                                                            <div class="input-group m-input-group col-md-12">
                                                                <span class="input-group-addon" >
                                                                    An- und Abmeldung TÜV/ASU 
                                                                </span>
                                                            <input type="text" data-type="currency" class="form-control m-input" name="s_kosten3"  id="s_kosten3" aria-describedby="basic-addon1" @if(isset($caroneinfo->s_kosten3)) value="{{$caroneinfo->s_kosten3}}"  @else value='0,00' @endif  >
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-6">
                                                            <div class="input-group m-input-group col-md-12">
                                                                <span class="input-group-addon" >
                                                                    Zinssatz für ein Jahr Finanzierung 
                                                                </span>
                                                            <input type="text" class="form-control m-input" data-value="0" name="s_kosten4" data-type="currency"  id="s_kosten4" aria-describedby="basic-addon1" @if(isset($caroneinfo->s_kosten4)) value="{{$caroneinfo->s_kosten4}}"  @else value='0' @endif  >
                                                            </div>
                                                        </div> -->
                                                        <div class="col-md-6">
                                                            <div class="input-group m-input-group col-md-12">
                                                                <span class="input-group-addon" >
                                                                    Zinssatz für ein Jahr Finanzierung 
                                                                </span>
                                                            <input type="text" class="form-control m-input" data-value="0" name="s_kosten4"   id="s_kosten4" aria-describedby="basic-addon1" @if(isset($caroneinfo->s_kosten4)) value="{{$caroneinfo->s_kosten4}}"  @else value='0' @endif  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                        </div>
                                                        <div class="col-md-4 left-padding-no
                                                        ">
                                                            <div class="input-group m-input-group col-md-12">
                                                                <span class="input-group-addon" >
                                                                    Summe in €
                                                                </span>
                                                            <input type="text" data-type="currency" class="form-control m-input" name="s_kosten5"  id="s_kosten5" aria-describedby="basic-addon1" @if(isset($caroneinfo->s_kosten5)) value="{{$caroneinfo->s_kosten5}}"  @else value='' @endif  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="{{url('print/buy-invoice/'.$caroneinfo->id)}}">
                                                                <button type="button" class="btn m-btn--pill    btn-primary m-btn--wide">
                                                                    <span>
                                                                        <i class="fa fa-print"></i>
                                                                        <span>Kaufvertrag</span>
                                                                    </span>
                                                                </button>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4"></div>
                                                        <div class="col-md-2">
                                                            <!-- <a href="{{url('deleteselling/'.$caroneinfo->id)}}">
                                                                <button type="button" class="btn m-btn--pill    btn-outline-primary m-btn m-btn--custom m-btn--outline-2x">
                                                                    <span>
                                                                        <i class="la la-times-circle"></i>
                                                                        <span>Abbruch</span>
                                                                    </span>
                                                                </button>
                                                            </a> -->
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="submit" class="btn m-btn--pill    btn-primary m-btn--wide">
                                                                <span>
                                                                    <i class="la la-save"></i>
                                                                    <span>Speichern</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <a href="{{url('alldelete/'.$caroneinfo->id)}}" class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only  m-btn--pill m-btn--air deletecar">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </div>

                                                    </div>
                                                

                                            </form>

                                        </div>

                                    
                                </div>
                                <!-- end : pane 2 -->
                                <!-- start : pane 3 -->
                                @if(isset($caroneinfo->s_made) && $caroneinfo->s_made == 1)
                                <div class="tab-pane @if(isset($tabconfirm) && $tabconfirm   == "buyingtab") active @endif"" id="m_tabs_6_3" role="tabpanel" aria-expanded="false">
                                    <div class="col-md-12">
                                        <form method="POST" action="{{url("updatebuying")}}">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="hidden" name="c_id" value="{{$caroneinfo->id}}">
                                            <input type="hidden" id="b_customer_confirm" name="b_customer_confirm" value="0">

                                            <div class="row" >
                                                <div class="col-md-12">
                                                    <div class="row" >
                                                        <div class="col-md-6  ">
                                                            <h4 >Käufer</h4>
                                                        </div>
                                                        <div class="col-md-6">
                                                        </div>
                                                        <div class="col-md-2">
                                                            
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="row">
                                                                <div class="form-group m-form__group col-md-12">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Rechnungs-Nr.
                                                                        </span>
                                                                    <input type="text" class="form-control m-input" aria-describedby="basic-addon1"
                                                                    @if(isset($caroneinfo->b_invoice_num))
                                                                        value="{{$caroneinfo->b_invoice_num}}"
                                                                    @else 

                                                                    @endif name="b_invoice_num" id='b_invoice_num'  readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            @if(isset($caroneinfo->b_invoice_num))
                                                                <a id="invoice-change" href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" onclick="invoicechange();">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>

                                                            @else
                                                                <a id="invoice-gen" href="#" class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" onclick="invoiceGen();">
                                                                    <i class="fa fa-legal"></i>
                                                                </a>


                                                            @endif
                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                            
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">

                                                                        <span class="input-group-addon company-style"  >
                                                                            Anrede
                                                                        </span>
                                                                        <select class="form-control m-input" name="b_company" dir="rtl" id="b_company" aria-describedby="option-error" aria-invalid="ture"
                                                                         placeholder="Herr / Frau / Firma"
                                                                    
                                                                        >
                                                                            <option value="1"  @if(isset($caroneinfo->b_company) && $caroneinfo->b_company == 1) selected @endif >
                                                                                Herr
                                                                            </option>
                                                                            <option value="2" @if(isset($caroneinfo->b_company) && $caroneinfo->b_company == 2) selected @endif >
                                                                                Frau
                                                                            </option>
                                                                            <option value="3" @if(isset($caroneinfo->b_company) && $caroneinfo->b_company == 3) selected @endif >
                                                                                Firma
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon">
                                                                            Verkaufsdatum
                                                                        </span>
                                                                        <div class="input-group date" id="m_datepicker_3">
                                                                        <input type="text"   class="form-control m-input"  value="@if(isset($caroneinfo->b_saledate))  {{$caroneinfo->b_saledate}} @else {{date('d.m.Y')}} @endif" name="b_saledate" id="b_saledate"  placeholder="DD.MM.YYYY" required >
                                                                            <span class="input-group-addon">
                                                                                <i class="la la-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    
                                                                </div>
                                                                <!-- new line -->
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Vorname
                                                                        </span>
                                                                    <input type="text" id="b_f_name" class="form-control m-input"  aria-describedby="basic-addon1" name="b_f_name" value="{{$caroneinfo->b_f_name}}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Nachname
                                                                        </span>
                                                                  <!--   <input type="text" class="form-control m-input"  aria-describedby="basic-addon1" name="b_s_name" value="{{$caroneinfo->b_s_name}}" > -->

                                                                    <input list="browsers1" id="b_s_name" class="form-control m-input" name="b_s_name" value="{{$caroneinfo->b_s_name}}" required="">
                                                                      <datalist id="browsers1">
                                                                        @foreach($address_list as $addressone)
                                                                            <option class="select_name" value="{{$addressone->second_name}}" data-addressid="{{$addressone->id}}">
                                                                        @endforeach
                                                                       
                                                                      </datalist>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    
                                                                </div>
                                                                <!-- new line -->

                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon">
                                                                            Geburtsdatum
                                                                        </span>
                                                                        <div class="input-group date" id="m_datepicker_3">
                                                                            <input type="text" name="b_birth" class="form-control m-input"  name="b_birth" value="{{isset($caroneinfo->b_birth)?$caroneinfo->b_birth:""}}"  id="b_birth"  placeholder="DD.MM.YYYY"  >
                                                                            <span class="input-group-addon">
                                                                                <i class="la la-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            E-mail
                                                                        </span>
                                                                    <input type="text" id="b_email" class="form-control m-input"  aria-describedby="basic-addon1" name="b_email" value="{{$caroneinfo->b_email}}" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    
                                                                </div>
                                                                <!-- new line -->
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Telefon
                                                                        </span>
                                                                        <input type="text" id="b_phonenum" class="form-control m-input" name="b_phonenum"   aria-describedby="basic-addon1" value="{{$caroneinfo->b_phonenum}}" >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Telefax
                                                                        </span>
                                                                        <input type="text" id="b_fax" class="form-control m-input"  name="b_fax" aria-describedby="basic-addon1" value="{{$caroneinfo->b_fax}}" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    
                                                                </div>
                                                                <!-- new line -->
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Straße
                                                                        </span>
                                                                    <input type="text" id="b_street" class="form-control m-input"  aria-describedby="basic-addon1" name="b_street"  value="{{$caroneinfo->b_street}}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Nummer
                                                                        </span>
                                                                    <input type="text" id="b_nummer" class="form-control m-input"  aria-describedby="basic-addon1"  name="b_nummer" value="{{$caroneinfo->b_nummer}}" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    
                                                                </div>
                                                                <!-- new line -->
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Stadt
                                                                        </span>
                                                                    <input type="text" id="b_city" class="form-control m-input"  aria-describedby="basic-addon1" name="b_city" value="{{$caroneinfo->b_city}}" >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Postleitzahl
                                                                        </span>
                                                                        <input type="text" id="b_postalcode" class="form-control m-input"  aria-describedby="basic-addon1" name="b_postalcode"  value="{{$caroneinfo->b_postalcode}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    
                                                                </div>
                                                                <!-- new line -->
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Adresszusatz
                                                                        </span>
                                                                    <input id="b_add1" type="text" class="form-control m-input"  aria-describedby="basic-addon1" value="{{$caroneinfo->b_add1}}" name="b_add1"  >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Land
                                                                        </span>
                                                                    <input type="text" id="b_country" class="form-control m-input"  aria-describedby="basic-addon1" @if (isset($caroneinfo->b_country))
                                                                    value="{{$caroneinfo->b_country}}" 
                                                                    @else  value="" @endif name="b_country"  name="b_country"  >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    
                                                                </div>
                                                                <!-- new line -->
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Webseite
                                                                        </span>
                                                                    <input type="text" id="b_website" class="form-control m-input"  aria-describedby="basic-addon1" value="{{$caroneinfo->b_website}}" name="b_website"  >
                                                                    </div>
                                                                </div> 
                                                                <div class="form-group m-form__group col-md-4">
                                                                    <div class="input-group m-input-group">
                                                                        <span class="input-group-addon" >
                                                                            Steuernummer
                                                                        </span>
                                                                        <input type="text" id="b_tax" class="form-control m-input"  name="b_tax" aria-describedby="basic-addon1" value="{{$caroneinfo->b_tax}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    
                                                                </div>

                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 ">
                                                            <h4 style=" padding-top:20px;">Notizen</h4>
                                                        </div>
                                                        <div class="col-md-6 ">
                                                        </div>
                                                        <div class="form-group m-form__group col-md-4">
                                                                <div class="input-group m-input-group">
                                                                    <span class="input-group-addon" >
                                                                        Bemerkung 1
                                                                    </span>
                                                                <input type="text" class="form-control m-input"  aria-describedby="basic-addon1" name="b_note1"  value="{{$caroneinfo->b_note1}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group col-md-4">
                                                                <div class="input-group m-input-group">
                                                                    <span class="input-group-addon" >
                                                                        Bemerkung 2
                                                                    </span>
                                                                    <input type="text" class="form-control m-input"  aria-describedby="basic-addon1" name="b_note2" value="{{$caroneinfo->b_note2}}" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                
                                                            </div>
                                                            <div class="form-group m-form__group col-md-4">
                                                                <div class="input-group m-input-group">
                                                                    <span class="input-group-addon" >
                                                                        Abholung
                                                                    </span>
                                                                    <input type="text" class="form-control m-input"  aria-describedby="basic-addon1" name="b_pickup" value="{{$caroneinfo->b_pickup}}" >
                                                                </div>
                                                            </div>


                                                            <div class="form-group m-form__group col-md-4">
                                                                <div class="input-group m-input-group">
                                                                    <span class="input-group-addon" >
                                                                        Zahlung
                                                                    </span>
                                                                    <input type="text" class="form-control m-input"  aria-describedby="basic-addon1" name="b_payment" value="{{$caroneinfo->b_payment}}" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                
                                                            </div>
                                                       
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 ">
                                                            <h4 style=" padding-top:20px;">Verkaufspreis</h4>
                                                        </div>
                                                        <div class="col-md-6"></div>
                                                        <div class="col-md-3">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Netto in €
                                                                </span>
                                                            <input type="text" data-type="currency" class="form-control m-input" name="b_value"  id="b_value" aria-describedby="basic-addon1" @if(isset($caroneinfo->b_value) && $caroneinfo->b_value != '0') value="@convert($caroneinfo->b_value)" @else value='0,00' @endif  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-group m-input-group ">
                                                                <span class="input-group-addon" >
                                                                    Mehrwertsteuer in €
                                                                </span>
                                                                <input type="text" data-type="currency" name='b_must' id="b_must" class="form-control m-input"  aria-describedby="basic-addon1"
                                                                @if(isset($caroneinfo->b_vat_value) && $caroneinfo->b_vat_value !=0)
                                                                value="@convert($caroneinfo->b_vat_value)"
                                                                @else
                                                                value="0,00"
                                                                @endif

                                                                >
                                                            </div>



                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon" >
                                                                    Brutto in €
                                                                </span>
                                                            <input type="text" data-type="currency" id="b_brutto" class="form-control m-input"  aria-describedby="basic-addon1" name="b_total"  
                                                            @if(isset($caroneinfo->b_total) && $caroneinfo->b_total != 0) value="@convert($caroneinfo->b_total)" @else value="0,00" @endif>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-group m-input-group">
                                                                <span class="input-group-addon">
                                                                    Nettominderung in €
                                                                </span>
                                                                <input type="text" data-type="currency" id="b_netto_export" name="b_netto_export" class="form-control m-input"
                                                                @if(isset($caroneinfo->s_net_reduce))
                                                                    value="@convert($caroneinfo->s_net_reduce)"
                                                                @else
                                                                    value="0,00"
                                                                @endif >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <span class="m-switch m-switch--outline m-switch--icon m-switch--accent" style="padding-top: 10px">
                                                                        <label>
                                                                            <input type="checkbox" id="b_25a"
                                                                            @if($caroneinfo->b_25a == "1")
                                                                                checked='checked'
                                                                                data-sel = '1'

                                                                            @else

                                                                                data-sel = '0'
                                                                            @endif
                                                                            >
                                                                            <input type="hidden" id="b_25a_a" name="b_25a"
                                                                            @if($caroneinfo->b_25a == "1")
                                                                                value="1"
                                                                            @else
                                                                                value="0"
                                                                            @endif

                                                                            >
                                                                            <span></span>
                                                                        </label>
                                                                    </span>
                                                                </div>
                                                                <label class="col-5 col-form-label" style="margin-top: 10px">
                                                                    Verkauf nach §25a
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="row">
                                                               
                                                                <div class="col-3">
                                                                    <span class="m-switch m-switch--outline m-switch--icon m-switch--accent" style="padding-top: 10px">
                                                                        <label>
                                                                            <input type="checkbox"
                                                                            @if($caroneinfo->b_netto == "1")
                                                                                checked='checked'
                                                                                value="1"
                                                                                data-sel = '1'
                                                                            @else
                                                                                value='0'
                                                                                data-sel = '0'
                                                                            @endif

                                                                            id="b_netto">
                                                                            <input type="hidden" id="b_netto_a" name="b_netto"
                                                                            @if($caroneinfo->b_netto == "1")
                                                                                value="1"
                                                                            @else
                                                                                value="0"
                                                                            @endif
                                                                            >

                                                                            <span></span>
                                                                        </label>
                                                                    </span>
                                                                </div>
                                                                <label class="col-7 col-form-label" style="margin-top: 10px">
                                                                    MwSt. ausweisbar
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                    <br>

                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <!-- start : Notizen -->
                                                <div class="col-md-12">
                                                    <div class="m-portlet m-portlet--tabs">
                                                        <div class="m-portlet__head">
                                                            <div class="m-portlet__head-tools">
                                                                <ul class="nav nav-tabs m-tabs-line m-tabs-line--primary m-tabs-line--2x" role="tablist">
                                                                    <li class="nav-item m-tabs__item">
                                                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_4" role="tab">

                                                                            Rechnung
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item m-tabs__item">
                                                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_5" role="tab">

                                                                            Kaufvertrag
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="m-portlet__body">
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="m_tabs_6_4" role="tabpanel">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <h4>Vermerkungen</h4>
                                                                        </div>
                                                                        <div class="col-md-12 form-group m-form__group">
                                                                            <div class="input-group m-input-group">
                                                                               <!--  <span class="input-group-addon">Optionaler Text für Vermerkungen</span> -->
                                                                                <input type="text" class="form-control m-input text-left"  aria-describedby="basic-addon1" maxlength="63" name="b_record_desc1" value="{{$caroneinfo->b_record_desc1}}" placeholder="Optionaler Text für Vermerkungen" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 form-group m-form__group">
                                                                            <div class="input-group m-input-group">
                                                                                <input type="text" class="form-control m-input text-left"  aria-describedby="basic-addon1" maxlength="63" name="b_record_desc2" value="{{$caroneinfo->b_record_desc2}}" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 form-group m-form__group">
                                                                            <div class="input-group m-input-group">
                                                                                <input type="text" class="form-control m-input text-left"  aria-describedby="basic-addon1" maxlength="63" name="b_record_desc3" value="{{$caroneinfo->b_record_desc3}}" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 form-group m-form__group">
                                                                            <div class="input-group m-input-group">
                                                                                <input type="text" class="form-control m-input text-left"  aria-describedby="basic-addon1"  maxlength="63" name="b_record_desc4" value="{{$caroneinfo->b_record_desc4}}" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 form-group m-form__group">
                                                                            <div class="row">
                                                                                <div class="col-md-12  form-group m-form__group">
                                                                                    <div class="input-group m-input-group">
                                                                                        <span class="input-group-addon" >
                                                                                                Zoll Nr.
                                                                                        </span>
                                                                                        <input type="text"  maxlength="63" class="form-control m-input text-left"  name="b_record_customer_num" aria-describedby="basic-addon1" value="{{$caroneinfo->b_record_customer_num}} ">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-md-12  form-group m-form__group">
                                                                                    <div class="input-group m-input-group">
                                                                                        <span class="input-group-addon" >
                                                                                            Lieferdatum
                                                                                        </span>
                                                                                        <input type="text"  maxlength="63" class="form-control m-input  text-left"  name="b_record_delivery_date" aria-describedby="basic-addon1" value="{{$caroneinfo->b_record_delivery_date}}">
                                                                                    </div>
                                                                                </div>                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9"></div>
                                                                        <div class="col-md-2"> 
                                                                              <button type="button" class="btn m-btn--pill    btn-primary m-btn m-btn--custom m-btn--bolder  stock_sel" data-url="sell-private-invoice">
                                                                                <span>
                                                                                <i class=" fa flaticon-interface"></i>
                                                                                <span>
                                                                                    Privat
                                                                                </span>
                                                                            </span>
                                                                            </button>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                             <button type="button" class="btn m-btn--pill    btn-primary m-btn m-btn--custom m-btn--bolder  stock_sel" data-url="sell-netto-invoice">
                                                                                <span>
                                                                                <i class=" fa flaticon-list-1"></i>
                                                                                <span>
                                                                                    Netto Export
                                                                                </span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4"></div>
                                                                        <div class="col-md-4"></div>
                                                                        <div class="col-md-2"> 
                                                                             <button type="button" class="btn m-btn--pill    btn-primary m-btn m-btn--custom m-btn--bolder  stock_sel" data-url="sell-handler-invoice">
                                                                                    <span>
                                                                                    <i class=" fa flaticon-interface-6"></i>
                                                                                    <span>
                                                                                        Händler
                                                                                    </span>
                                                                                </span>
                                                                            </button>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <button type="button" class="btn m-btn--pill    btn-primary m-btn m-btn--custom m-btn--bolder  stock_sel" data-url="sell-eu-invoice">
                                                                                    <span>
                                                                                    <i class=" fa flaticon-list-1"></i>
                                                                                    <span>
                                                                                        Netto EU-Export
                                                                                    </span>
                                                                                </span>

                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <a href="{{url('deletebuying/'.$caroneinfo->id)}}">
                                                                                <button type="button" class="btn m-btn--pill    btn-outline-primary m-btn m-btn--custom m-btn--outline-2x deletecar">
                                                                                    <span><span> <i class="fa fa-trash-o"></i></span>
                                                                                    &nbsp;&nbsp;Abbruch</span>

                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                             <button type="submit" class="btn m-btn--pill    btn-primary m-btn m-btn--custom m-btn--bolder ">
                                                                                <span>
                                                                                    <i class="la la-save"></i></span>
                                                                                &nbsp;&nbsp;Speichern</span>
                                                                                <span> 
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="{{url('alldelete/'.$caroneinfo->id)}}" class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only  m-btn--pill m-btn--air deletecar">
                                                                                <i class="fa fa-trash-o"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="m_tabs_6_5" role="tabpanel">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <h4> Vermerkungen</h4>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">                                                                               
                                                                                <div class="col-md-10">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12  form-group m-form__group">
                                                                                            <div class="input-group m-input-group">
                                                                                               <!--  <span class="input-group-addon">Optionaler Text für Vermerkungen</span> -->
                                                                                                <input type="text" maxlength="63" class="form-control m-input text-left"  aria-describedby="basic-addon1" name="b_contract_desc1" value="{{$caroneinfo->b_contract_desc1}}" placeholder="Optionaler Text für Vermerkungen">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12 form-group m-form__group">
                                                                                            <div class="input-group m-input-group">
                                                                                                <input type="text" maxlength="63" class="form-control m-input  text-left"  aria-describedby="basic-addon1" name="b_contract_desc2" value="{{$caroneinfo->b_contract_desc2}}" >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12 form-group m-form__group">
                                                                                            <div class="input-group m-input-group">
                                                                                                <input type="text" maxlength="63" class="form-control m-input  text-left"  aria-describedby="basic-addon1" name="b_contract_desc3" value="{{$caroneinfo->b_contract_desc3}}" >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12 form-group m-form__group">
                                                                                            <div class="input-group m-input-group">
                                                                                                <input type="text" maxlength="63" class="form-control m-input  text-left"  aria-describedby="basic-addon1" name="b_contract_desc4" value="{{$caroneinfo->b_contract_desc4}}" >
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                       
                                                                               
                                                                        <div class="col-md-3  form-group m-form__group">
                                                                            <div class="input-group m-input-group">
                                                                                <span class="input-group-addon">Abholtermin</span>
                                                                                <input type="text" maxlength="63" class="form-control m-input text-left"  aria-describedby="basic-addon1" name="b_contract_schedule" value="{{$caroneinfo->b_contract_schedule}}" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9"></div>
                                                                                                                                          
                                                                        
                                                                        <div class="col-md-3 form-group m-form__group">
                                                                            <div class="input-group m-input-group">
                                                                                <span class="input-group-addon">Zahlungen</span>
                                                                                <input maxlength="63" type="text" class="form-control m-input text-left"  aria-describedby="basic-addon1" name="b_contract_payment" value="{{$caroneinfo->b_contract_payment}}" >
                                                                            </div>
                                                                        </div>
                                                                         <div class="col-md-9"></div>
                                                                           
                                                                        <div class="col-md-12" style="padding-top: 10px;">
                                                                            <div class="row">
                                                                                <div class="col-md-2 form-group m-form__group">
                                                                                    <a href="{{url('/print/kp-invoice/'.$caroneinfo->id)}}">
                                                                                    <button type="button" class="btn m-btn--pill    btn-primary m-btn m-btn--custom m-btn--bolder  m-btn m-btn--icon  " id="b_private_btn">
                                                                                        <span>
                                                                                            <i class=" fa flaticon-interface"></i>
                                                                                            <span>
                                                                                                Privat
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-2 form-group m-form__group">
                                                                                    <a href="{{url('/print/kh-invoice/'.$caroneinfo->id)}}">
                                                                                    <button type="button" class="btn m-btn--pill    btn-primary m-btn m-btn--custom m-btn--bolder  m-btn m-btn--icon" id="b_handler_btn">
                                                                                            <span>
                                                                                            <i class="fa flaticon-interface-6"></i>
                                                                                            <span>
                                                                                                Händler
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-2 form-group m-form__group">
                                                                                    <a href="{{url('/print/kne-invoice/'.$caroneinfo->id)}}">
                                                                                    <button type="button" class="btn m-btn--pill    btn-primary m-btn m-btn--custom m-btn--bolder  m-btn m-btn--icony" id="b_netto_export_btn">
                                                                                        <span>
                                                                                            <i class="fa flaticon-list-1"></i>
                                                                                            <span>
                                                                                                Netto Export
                                                                                            </span>
                                                                                        </span>

                                                                                    </button>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-1"></div>
                                                                                <div class="col-md-2">
                                                                                    <a href="{{url('deletebuying/'.$caroneinfo->id)}}">
                                                                                        <button type="button" class="btn m-btn--pill    btn-outline-primary m-btn m-btn--custom m-btn--outline-2x">
                                                                                            <span><span> <i class="la la-times-circle"></i></span>
                                                                                            &nbsp;&nbsp;Abbruch</span>

                                                                                        </button>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                     <button type="submit" class="btn m-btn--pill    btn-primary m-btn m-btn--custom m-btn--bolder ">
                                                                                        <span><span> <i class="la la-save"></i></span>
                                                                                        &nbsp;&nbsp;Speichern</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <a href="{{url('alldelete/'.$caroneinfo->id)}}" class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only  m-btn--pill m-btn--air deletecar">
                                                                                        <i class="fa fa-trash-o"></i>
                                                                                    </a>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end : Notizen -->                                                
                                            </div>

                                        </form>
                                        <form method="get" action="#" id="stock_form">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </form>
                                    </div>
                                </div>
                                @endif
                                <!-- end : pane 3 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end : fahrzeug info -->


    </div>
</div>
<!-- END: main body -->

@endsection
@section('script')
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script> -->
<script src="{{asset('public/assets/cars/app/js/dashboard.js')}}"></script>
{{-- <script src="{{asset('public/assets/cars/demo/default/custom/components/datatables/base/html-table.js')}}"></script> --}}

<script>




$(document).ready(function(){

$("#s_s_name").on('input', function (e) {
    e.preventDefault();
     var value = $(this).val();
    var addressid = $('#browsers [value="' + value + '"]').data('addressid');
    if(typeof(addressid) != "undefined" && addressid !== null) {
        //alert(addressid);
           $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': '{{csrf_token()}}',
              }
          });

           jQuery.ajax({
                  url: "{{ url('/getfulladdress') }}",
                  method: 'post',
                  data: {
                     addressid: addressid,
                     
                  },
                  success: function(result){
                        $('#s_company').val(result.company);
                        $('#s_f_name').val(result.first_name);
                        $('#s_s_name').val(result.second_name);
                        $('#s_birth').val(result.birth);
                        $('#s_phonenum').val(result.telephone);
                        $('#s_fax').val(result.telefax);
                        $('#s_website').val(result.website);
                        $('#s_email').val(result.email);
                        $('#s_street').val(result.street);
                        $('#s_nummber').val(result.nummer);
                        $('#s_postalcode').val(result.postalcode);
                        $('#s_city').val(result.city);
                        $('#s_country').val(result.country);
                        $('#s_add1').val(result.address);
                        $('#s_tax').val(result.tax);
                        $('#s_customer_confirm').val('1');
                  }});
    }
   
});

$("#b_s_name").on('input', function (e) {
    e.preventDefault();
     var value = $(this).val();
    var addressid = $('#browsers1 [value="' + value + '"]').data('addressid');
    if(typeof(addressid) != "undefined" && addressid !== null) {
        //alert(addressid);
           $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': '{{csrf_token()}}',
              }
          });
           jQuery.ajax({
                  url: "{{ url('/getfulladdress') }}",
                  method: 'post',
                  data: {
                     addressid: addressid,
                     
                  },
                  success: function(result){
                        $('#b_company').val(result.company);
                        $('#b_f_name').val(result.first_name);
                        $('#b_s_name').val(result.second_name);
                        $('#b_birth').val(result.birth);
                        $('#b_phonenum').val(result.telephone);
                        $('#b_fax').val(result.telefax);
                        $('#b_website').val(result.website);
                        $('#b_email').val(result.email);
                        $('#b_street').val(result.street);
                        $('#b_nummer').val(result.nummer);
                        $('#b_postalcode').val(result.postalcode);
                        $('#b_city').val(result.city);
                        $('#b_country').val(result.country);
                        $('#b_add1').val(result.address);
                        $('#b_tax').val(result.tax);
                        $('#b_customer_confirm').val('1');
                  }});
    }
   
});
    // Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});

$('#s_reduce').focusout(function(){
    _this = $(this);
    c_value= _this.val(); 
    $('#b_netto_export').val(c_value+',00');

});

$('#b_netto_export').focusout(function(){
    _this = $(this);
    c_value= _this.val(); 
    $('#s_reduce').val(c_value+',00');

});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(",") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(",");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val =  left_side + "," + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val =  input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ",00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}







    $('.deletecar').click(function(event){
        _this = $(this);
        if(confirm('Möchten Sie dieses Auto löschen?')){

        } else {    
            event.preventDefault();
        }

    });

    $('.stock_sel').click(function(event){
        event.preventDefault();
        let _ = $(this);
        var default_url = "{{url('/')}}";
        var currnt_url = default_url +'/print/'+ _.data('url') + '/'+$('#car-id').val();
        console.log(currnt_url);
        $('#stock_form').attr('action',currnt_url.trim());
        $('#stock_form').submit();
    });

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

    

    $('#b_vat_verified').click(function(){
        //console.log($(this).data('sel'));
        var me = $(this);
        var vat = $('#b_vat_verified_a').val();
        if($(this).data('sel') == 0){
            me.data('sel','1');
            $('#b_vat_verified_a').val('1');
            var must =  $('#b_value').val() * $('#b_vat_percent').val() / 100
            $('#b_must').val(must);
            $('#b_brutto').val(($('#b_value').val()/1) + (must/1));
        } else {
            me.data('sel','0');
            $('#b_vat_verified_a').val('0');
            $('#b_must').val('0');
            $('#b_brutto').val($('#b_value').val());
        }
    })

    $('#s_25a').on('click',function(){
        //console.log($(this).data('sel'));
        var me = $(this);
        let vat = $('#s_25a_a').val();
        if(vat == 0){
            me.data('sel','1');
            $('#s_25a_a').val('1');
            me.attr('checked','checked');
            $('#s_netto').trigger('click');


        } else {
            me.data('sel','0');
            $('#s_25a_a').val('0');
            me.removeAttr('checked');
            $('#s_netto').trigger('click');
        }
         console.log(vat);
    });

    $('#s_netto').on('click',function(){
        // console.log($(this).data('sel'));
        var me = $(this);
        let vat = $('#s_netto_a').val();
        if(vat == 0){
            me.data('sel','1');
            $('#s_netto_a').val('1');
            me.attr('checked','checked');
            $('#s_25a').trigger('click');
        } else {
            me.data('sel','0');
            $('#s_netto_a').val('0');
            me.removeAttr('checked');
            $('#s_25a').trigger('click');
        }
        console.log(vat);
    });



    $('#b_25a').click(function(){
        // console.log($(this).data('sel'));
        var me = $(this);
        var vat = $('#b_25a_a').val();
        if(vat == 0){
            me.data('sel','1');
            $('#b_25a_a').val('1');
            me.attr('checked','checked');
            $('#b_netto').trigger('click');
        } else {
            me.data('sel','0');
            $('#b_25a_a').val('0');
            me.removeAttr('checked');
            $('#b_netto').trigger('click');

        }
    });

    $('#b_netto').click(function(){
        // console.log($(this).data('sel'));
        var me = $(this);
        var vat = $('#b_netto_a').val();
        if($(this).data('sel') == 0){
            me.data('sel','1');
            $('#b_netto_a').val('1');
            me.attr('checked','checked');
            $('#b_25a').trigger('click');

        } else {
            me.data('sel','0');
            $('#b_netto_a').val('0');
            me.removeAttr('checked');
            $('#b_25a').trigger('click');
        }
    });

    function get_integer(_this){
        var index = _this.indexOf(',');
         var number = _this.substring(0,index);
         return number;
    }

    function get_decimal(_this){

        var index = _this.indexOf(',');
         var decimal = _this.substring(index+1,_this.length);
         //var decimal = (decimal.length == 2)? decimal:decimal+'0';  
         return parseInt(decimal)/100;       
    }

    function cal_total(){
        
        // console.log(decimal);
        var  s_kosten1_n = changeToNum(get_integer($('#s_kosten1').val()+''))/1;  
        var  s_kosten2_n = changeToNum(get_integer($('#s_kosten2').val()+''))/1;  
        var  s_kosten3_n = changeToNum(get_integer($('#s_kosten3').val()+''))/1;     
        var s_kosten4_n =  parseInt(get_kosten4())/1;
        var  s_kosten1_c = get_decimal($('#s_kosten1').val()+''); 
        var  s_kosten2_c = get_decimal($('#s_kosten2').val()+'');
        var  s_kosten3_c = get_decimal($('#s_kosten3').val()+''); 
        console.log(s_kosten1_n);
         console.log(s_kosten2_n);
         console.log(s_kosten3_n);
        var s_kosten4_c = (get_kosten4()/1-parseInt(get_kosten4())/1).toFixed(2)/1;
        var total_value = s_kosten1_n+s_kosten2_n+s_kosten3_n+s_kosten4_n+s_kosten1_c+s_kosten2_c+s_kosten3_c+s_kosten4_c;
        //console.log(s_kosten4_n);
        total_value = total_value.toFixed(2)+'';
         var index = total_value.indexOf('.');
         var number = total_value.substring(0,index);
         var decimal = total_value.substring(index+1,total_value.length);
          decimal = (decimal.length == 2)? decimal:decimal+'0';  
         console.log(changeToText(number)+','+decimal);


         $('#s_kosten5').val(changeToText(number)+','+decimal);
    }



    $('#s_kosten1').focusout(function(){
        cal_total();
     
    });
    $('#s_kosten2').focusout(function(){
        cal_total();
    });
    $('#s_kosten3').focusout(function(){
        cal_total();
    });

    $('#s_kosten4').focusout(function(){
       cal_total();
    });

    function get_kosten4(){
        var b_saledate = $('#b_saledate_cal').val();
        var Difference_In_Days = 0;
        if(b_saledate == ''){
            var d = new Date();

            var month = d.getMonth()+1;
            var day = d.getDate();

            var current_date = d.getFullYear() + '/' +
                (month<10 ? '0' : '') + month + '/' +
                (day<10 ? '0' : '') + day;

            //console.log(current_date);
          
            var date1 = new Date(current_date); 
            var date_2_ready = $('#s_saledate').val().split('.');
            var date_2 = date_2_ready['2']+"-"+date_2_ready['1']+"-"+date_2_ready['0'];
            console.log(date_2);

            var date2 = new Date(date_2);
            //console.log(date_2_ready); 
              
            // To calculate the time difference of two dates 
            var Difference_In_Time =  date1.getTime() -date2.getTime();
           
              
            // To calculate the no. of days between two dates 
            Difference_In_Days = Math.round(Difference_In_Time / (1000 * 3600 * 24)); 
            Difference_In_Days = (Difference_In_Days<0)?'0':Difference_In_Days;
              
            console.log('diffent days'+Difference_In_Days);
            

            //console.log(brotto);
            //var percent = $('#s_kosten4').val();
        } else {
           
            var date1 = new Date(b_saledate);
            var date_2_ready = $('#s_saledate').val().split('.');
            var date_2 = date_2_ready['2']+"-"+date_2_ready['1']+"-"+date_2_ready['0'];
            console.log(date1);
            var date2 = new Date(date_2);
            var Difference_In_Time =  date1.getTime() -date2.getTime();
            // To calculate the no. of days between two dates 
            Difference_In_Days = Math.round(Difference_In_Time / (1000 * 3600 * 24)); 
            Difference_In_Days = (Difference_In_Days<0)?'0':Difference_In_Days;
            console.log('diffent days'+Difference_In_Days);

        }
        var brotto = changeToNum($('#s_brutto').val());


        s_kosten4=  brotto /100/365*Difference_In_Days*$('#s_kosten4').val();
        return s_kosten4.toFixed(2);
        


    }




    $('#s_saledate').change(function(){

    cal_total();

    })

    $('#s_brutto').focusout(function(){

    cal_total();
    
    });

    function changeToNum(mytext){
        var changeText = mytext+'';
         return changeText.split('.').join("").replace(',','.')/1;
    }

    function changeToText(input_val) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  
  var input_val = input_val+'';
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  // var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(",") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(",");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val =  left_side + "," + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val =  input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ",00";
    }
  }

  return input_val;
}
});

// START : invoice number generating
function invoiceGen(){
    var c_id = $('#c_id').val();
    var gen_btn = $('#invoice-gen');


    if(confirm('Möchten Sie die Rechnungsnummer erstellen?')){
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': '{{csrf_token()}}',
          }
        });
           
        jQuery.ajax({
          url: "{{ url('/invoicegen') }}",
          method: 'post',
          data: {
             carid: c_id,
             
          },
          success: function(result){
            if(result.flag=='true'){

                toastr.success("erfolgreich!");
                //console.log(result.invoicenum);
                $('#b_invoice_num').val(result.invoicenum);
                gen_btn.css('display','none');

            } else {
                toastr.error("<div style='color:white'>Fehler!<div>");
            }

                
          }});

    }else {

    }

}


function invoicechange(){
    var c_id = $('#c_id').val();
    var gen_btn = $('#invoice-change');
    
    // if(CryptoJS.AES.encrypt(encryptText,"/"))
    var confirmpass = prompt('Bitte überprüfen Sie das Passwort');
    console.log(confirmpass);
    if(confirmpass==""){
        toastr.error("<div style='color:white'>Fehler!<div>");
        return;
    }else {

        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': '{{csrf_token()}}',
          }
        });
           
        jQuery.ajax({
          url: "{{ url('/confirmpass') }}",
          method: 'post',
          data: {
             password: confirmpass,
             
          },
          success: function(result){
            

            if(result.flag=='true'){
                // toastr.success(result.msg);
                var invoicenum = prompt('Bitte geben Sie die neue Rechnungsnummer ein.');
                if(invoicenum !=""){
                    var c_id = $('#c_id').val();

                     $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': '{{csrf_token()}}',
                      }
                    });
                       
                    jQuery.ajax({
                      url: "{{ url('/invoicechange') }}",
                      method: 'post',
                      data: {
                         invoicenum: invoicenum,
                         carid: c_id,
                         
                      },
                      success: function(result){
                        if(result.flag =='true'){

                            toastr.success(result.msg);
                           
                            $('#b_invoice_num').val(result.invoicenum);
                           

                        } else {
                            toastr.error("<div style='color:white'>"+result.msg+"<div>");

                          

                        }

                            
                      }
                  });

                }
                

            } else {
                toastr.error("<div style='color:white'>"+result.msg+"<div>");

                // console.log(result.invoicenum);

            }

                
          }
      });      
    }
}

// TOP : invoice number generating





@if($success = 'flag' && isset($success))

toastr.success("{{isset($msg)?$msg:""}}");
@elseif($success = 'unflag' && isset($success))

toastr.error("<div style='color:white'>{{isset($msg)?$msg:""}}<div>");
@endif
</script>
<script src={{asset('public/assets/cars/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js')}} type="text/javascript"></script>

@endsection
