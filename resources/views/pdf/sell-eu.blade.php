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

                        <!-- start : notification -->
                        <tr>
                            <td colspan="5" class="text-center" style="padding-top: 25px;">
                                <div style="width: 100%;">
                                    <div class="notification-div">
                                     Der Käufer kauft in Übereinstimmung mit den bereits vereinbarten Lieferbedingungen (AGB`s) das nachstehende, gebrauchte Fahrzeug, wie ausgiebig besichtigt, unter Ausschluß jeglicher Gewährleistung im Hinblick auf sichtbare und unsichtbare Mängel. Desweiteren können Nachlackierungen nicht ausgeschlossen werden!
                                    </div>  
                                    <div class="notification-div-strong" style="margin-top: 25px;">
                                         <strong>Der Unterzeichnende bestätigt, dass sich hierbei um ein Geschäft unter Voll-Kaufleuten handelt und somit nicht unter das EU-Gewährleistungsgesetz fällt!</strong>
                                    </div>                                 
                                </div>
                                                      
                            </td>
                        </tr>
                        <!-- end : notification -->

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


                            </td>

                        </tr>

                        <!-- end : car infomation -->
                       <!--  start : invoice -->
					    <tr >
					    	<td colspan="5" class="text-left" style="padding-top: 20px !important;">
					    		<div style="width: 50%; display: inline-block;" >
					    			<div style="display: inline-block;width:40%; margin-top: 3px !important;">
					    				<div  style="display:inline-block;font-size:17px;margin-top: 15px;">
					    					<strong>Kaufpreis:</strong>
					    				</div>
					    			</div>
					    			<div style="display:inline-block;width:58%; margin-top: 3px !important;">
					    				<div class="text-right"  style="display:inline-block;font-size:17px;margin-top: 15px;">
					    					<strong style="text-decoration: underline;"> &nbsp;&nbsp;&nbsp;@convert(($carinformation->b_value))€&nbsp;&nbsp;&nbsp;</strong>
					    				</div>

					    			</div>
					    		</div>
					    		<div class="text-left" style="width: 49%; display: inline-block;" >
					    			<div  class="text-left" style="display: inline-block; width: 100%; margin-top: 3px !important; "><strong>NETTO - EU EXPORT</strong></div>
					    		</div>
					    	</td>
					    </tr>
					    <tr >
					    	<td colspan="5" class="text-left" >
					    		<div style="width: 50%; display: inline-block;" >
					    		</div>
					    		<div style="width: 49%; display: inline-block; margin-top: -4px !important;" >
					    			<div class="text-left" style="display: block; width: 100%;font-size:12px;">

					    					Es handelt sich um eine, innergeme inschaftliche

					    			</div>
                                    <div class="text-left" style="display:block; width:100%;font-size:12px;margin-top:-3;">
                                             Lieferung gem. §4 Nr. 1b i.V.m. §6a Abs. 1
                                    </div>
                                    <div class="text-left" style="display:block; width:100%;font-size:12px;margin-top:-3">
                                             (tax free intraxommunity delivery)
                                    </div>
                                    

					    		</div>
					    	</td>
					    </tr>
					    
					    <!-- end : invoice -->
                        <!-- start : sign -->
                        <tr>
                            <td colspan="5" style="padding-top: 70px;" >
                                <div style="width: 100px; display: inline-block;" >
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
        <div>
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
        <div>
            <div style="width: 45%; display: inline-block;   " >
                <div class="text-center" style="display: block;">

                </div>
            </div>
            <div style="width: 7%;display: inline-block;">

            </div>
            <div style="width: 44%; display: inline-block;" >
                <div class="text-center"  style="font-size:12px;">
                    - Fahrzeug erhalten -
                </div>
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
