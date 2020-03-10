<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>


    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/pdf_sell.css')}}">
<body class="bg-grey">
    <header >
        <div style="display:block">
            <div style="width:100%">
                <div style="display: block;text-decoration: underline;font-size: 13px;">
                    T&R Ihr Autohaus GmbH - Hauptstraße 3 - 28816 Stuhr-Seckenhausen
                </div>
            </div>

        </div>
        <div style="display: block !important;" >
            <div  class="buyer-info" >
                <div >
                    @if(isset($carinformation->b_company) && $carinformation->b_company == 1) Herr
                    @elseif($carinformation->b_company == 2)
                        Frau
                    @elseif($carinformation->b_company ==3)
                        Firma
                    @endif
                </div>
                <div>{{$carinformation->b_f_name." ".$carinformation->b_s_name}}</div>
                <div>{{$carinformation->b_street.' '.$carinformation->b_nummer}}</div>
                <div >{{$carinformation->b_postalcode.' '.$carinformation->b_city}}</div>
                <div >{{$carinformation->b_country}}</div>
            </div>
            <div class="image_div text-right " >
                 <img class="logo-invoice" width="330px" src="{{asset('public/assets/images/logo-invoice.png')}}" style="margin-right: -12px !important;margin-top:12px;" >
            </div>

        </div>
    </header>

    <div class="container-fulid " style="margin-top: 110px;">
        <div class="row">
            <div></div>
            <div class="col-md-12">

                <div class="table-responsive">
                    <table class="table table-borderless">
                     <tbody>
                        {{-- START : buyer-date-box --}}
                        <tr >
                          <td colspan="5" >
                            <div style="border: 1px solid black !important;height: 41px:width:630px !important;margin-top:50px;">
                            	<div class="text-left" style="padding-left: 40px;width:350px; display: inline-block;font-size: 15px; margin-top: 7px;  ">
                                RECHNUNG/INVOICE Nr. {{$carinformation->b_invoice_num}}
	                            </div>
                                
	                            <div class="text-right" style="width: 240px; display: inline-block;font-size: 13px; margin-top:6px;" >    Stuhr, den {{$carinformation->b_saledate}}  </div>
                            </div>
                          </td>
                        </tr>
                        {{-- END : buyer-date-box --}}
                     
                        <!-- start : car infomation -->
                        <tr>
                            <td colspan="5" style="padding-top:50px;">
                                <div class="car-info-group">
                                    <div class="car-info-1-top">
                                        <strong>Fahrzeugtyp: </strong>   
                                    </div>
                                    <div class="car-info-2-top">
                                        {{$carinformation->c_name}}
                                    </div>
                                </div>
                                <div class="car-info-group">
                                    <div class="car-info-1">
                                        <strong>FahrgesteII-Nr:  </strong>    
                                    </div>
                                    <div class="car-info-2">
                                       {{$carinformation->c_finnumber}}
                                    </div>
                                </div>

                                <div class="car-info-group">
                                    <div class="car-info-1">
                                        <strong>Erstzulassung: </strong> 
                                    </div>
                                    <div class="car-info-2">
                                       {{$carinformation->c_r_date}}
                                    </div>
                                </div>
                                <div class="car-info-group">
                                    <div class="car-info-1">
                                       <strong>abgelesener KM-Stand: </strong>   
                                    </div>
                                    <div class="car-info-2">
                                       {{$carinformation->c_kilometer}} km
                                    </div>
                                </div>
                                <!-- Start : price calculate -->
                                <div style="width: 630px;border: 1px solid black;padding: 7px;margin-top: 50px;">
                                    <div style="padding-top: 5px;" >
                                        <div class="cal-col-1" >
                                             <strong style="font-size:14px;">Fahrzeugpreis</strong>
                                        </div>
                                        <div class="cal-col-2" >
                                            &nbsp;&nbsp; &nbsp;
                                        </div>
                                        <div  class="cal-col-3" >
                                            &nbsp;&nbsp; &nbsp;
                                        </div>
                                    </div>
                                    <div @if($carinformation->b_25a ==1) style="margin-top: -5px !important;" @else style="margin-top: -10px !important;" @endif>
                                        <div class="cal-col-1"   >
                                             @if($carinformation->b_25a ==1)Der Verkauf erfolgt nach §25a UStG    @endif
                                        </div>
                                        <div class="cal-col-middle" style="margin-top:-5px !important;" >

                                               <div style="left: 0px;width: 90px;display: inline-block;text-align: left;">
                                                @if($carinformation->b_25a == 0 )
                                                    Netto:
                                                @else
                                                   <strong> Gesamt:</strong>
                                                @endif
                                               </div>



                                             <div style="right: 0px;width: 151px;display: inline-block;text-align: right;">
                                                @if($carinformation->b_25a ==0 )
                                                    @convert($carinformation->b_value)€
                                                @else
                                                   <strong> @convert(($carinformation->b_total))€</strong>
                                                @endif
                                             </div>
                                        </div>
                                    </div>
                                    <div  @if($carinformation->b_25a ==1) style="margin-top: -5px !important;" @else style="margin-top: -12px !important;" @endif">
                                        <div class="cal-col-1" >
                                            @if($carinformation->b_25a ==1)
                                            Gebrauchtgegenstände/Sonderregelung @endif

                                        </div>
                                        <div class="cal-col-middle"  >

                                               <div style="left: 0px;width: 90px;display: inline-block;text-align: left;">
                                                @if($carinformation->b_25a ==0)
                                               19% MwSt.:
                                                   @else
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 @endif
                                               </div>



                                             <div style="right: 0px;width: 151px;display: inline-block;text-align: right;">
                                                @if($carinformation->b_25a ==0  )
                                                @convert($carinformation->b_vat_value)€
                                                @endif
                                             </div>

                                        </div>
                                        <!-- <div style="width:28%; display: inline-block;" class='text-right' >

                                        </div> -->
                                    </div>
                                    @if($carinformation->b_25a == 0 )
                                    <div>
                                        <div class="cal-col-1" style="margin-top:-12px !important;" >

                                        </div>
                                        <div class="cal-col-middle" style="border-top:1px dashed black;margin-top:-4px !important;" >

                                            <div style="left: 0px;width: 90px;display: inline-block;text-align: left;margin-top:2px !important;">
                                               <strong>Gesamt:</strong>
                                            </div>
                                            <div style="right: 0px;width: 151px;display: inline-block;text-align: right;margin-top:2px !important;">
                                                @convert(($carinformation->b_total))€
                                            </div>

                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <!-- END : price calculation -->

                            </td>

                        </tr>

                        <!-- end : car infomation -->

                        <!-- start : notification -->
                        <tr>
                            <td colspan="5" style="padding-top:12px;">
                                <div style="width: 100%;padding-top:10px;font-size: 13px;" class="text-left"> Weitere Vereinbarungen siehe Kaufvertrag.</div>
                            </td>
                        </tr>
                       
                        <!-- end : notification -->
                        <!-- start : sign -->
                        <tr>
                            <td colspan="5" style="padding-top: 70px;" >
                                <div style="width: 100px; display: inline-block;padding-left:60px;" >
                                    <div class="text-center" style="display: block;">
                                        Lieferdatum:
                                    </div>                                  
                                </div>
                                <div style="width: 170px; display: inline-block;padding-left:10px;text-align:right;">
                                    <div class="text-left" style="display: block; ">
                                        {{$carinformation->b_record_delivery_date}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- END : sign -->
                       

                      </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <div class="sign-div" >
        <div style="width: 45%; display: inline-block;   " >
            <div class="text-center" style="display: block;">
             
            </div>
        </div>
        <div style="width: 7%;display: inline-block;">

        </div>
        <div style="width: 44%; display: inline-block;" >
            <div class="text-center" style="display: block; border-top: 1px solid black;">
               
            </div>
        </div>

    </div>
    <footer>
        <div>
            <div class="bottom-info bottom-col1" >
                
            </div>
            <div class="bottom-info bottom-col2" >
                
            </div>
            <div class="bottom-info bottom-col3" >
               Commerzbank Bremen (BLZ 290 400 90) Kto.-Nr. 100 142 900
            </div>
        </div>
        <div style="margin-top: -11px;">
            <div class="bottom-info bottom-col1" >
               Steuer-Nr. 04621200800
            </div>
            <div class="bottom-info bottom-col2" >
                
            </div>
            <div class="bottom-info bottom-col3" >
                BIC/SWIFT-Code: COBADEFF290 - IBAN: DE51 2904009001 0014 2900
            </div>
        </div>
        <div style="margin-top: -11px;">
            <div class="bottom-info bottom-col1" >
                Ust-IdNr.: DE 812660538
            </div>
            <div class="bottom-info bottom-col2" >
                Geschäftsführer:
            </div>
            <div class="bottom-info bottom-col3" >
                Kreissparkasse Syke (BLZ 291 517 00) Kto.-Nr. 1160 000 905
            </div>
        </div>
        <div style="margin-top: -11px;">
            <div class="bottom-info bottom-col1" >
                HRB Walsrode 111018
            </div>
            <div class="bottom-info bottom-col2" >
                Thorsten Rose
            </div>
            <div class="bottom-info bottom-col3" >
                BIC/SWIFT-Code: BRLADE21SYK - IBAN: DE16 29151700 11600 00905
            </div>
        </div>
    </footer>

</body>
</html>
