<!DOCTYPE html> 
<html>
<head>
    <title>title</title>
</head>
    <style>
    .page-break {
        page-break-after: always;
    }
    .bottom-info-font{
        font-size:9px !important;
    }
    .deponat{
        font-size: 11px !important;
    }
    /*.logo-invoice {
        width: 20% !important;
    }*/
    .car-information{
        font-size: 14px;
    }
    .add_info{
        font-size:12px;
    }
    .add-info-item{
        padding-top: 9px;
    }
    .add-info-item{
        padding-top: 1px;
    }
    .buyer-info{
        font-size: 12px;
    }
    table{
        border-collapse:collapse;
border-spacing: 0;
    }
    </style>
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">
<body class="bg-grey">

    <div class="container-fulid">
        <div class="row">
            <div></div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-borderless">
                     <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                     </thead>
                      <tbody>
                        <tr>
                          <td scope="col" colspan="2"></td>
                          <td scope="col" colspan="3" class="text-right" style="padding-bottom: 15px;">
                            <img class="logo-invoice" width="250px" src="{{asset('public/assets/images/logo-invoice.png')}}" >
                          </td>
                        </tr>
                        <!-- START :  admin address detail -->
                        <tr style="margin-bottom: 0px !important;">
                            <td colspan="5">
                                <div style="display: block !important;" >
                                    <div style="width: 65%; display: inline-block; margin: 0px;" class="buyer-info" >
                                        <div style="display: block;text-decoration: underline;font-size: 10px;">
                                            T&R Ihr Autohaus GmbH · Hauptstraße 3 · 28816 Stuhr-Seckenhausen
                                        </div>
                                        <div >Ankaufvertrag</div>
                                        <div >{{$carinformation->s_f_name." ".$carinformation->s_s_name}}</div>
                                    
                                        <div style="display: block;">{{$carinformation->s_street}}</div>
                                        <!-- <div >
                                            {{$carinformation->s_nummber}}
                                        </div> -->
                                        <div style="display: block;">{{$carinformation->s_postalcode.','.$carinformation->s_city}}</div>
                                        <div style="display: block;">{{$carinformation->s_add1}}</div>
                                        <div style="display: block;">{{$carinformation->s_country}}</div>
                                    </div>
                                    <div style="width: 30%; display: inline-block; margin: 0px;" class="buyer-info" >
                                        <div >{{$admin->city}}</div>
                                        <div style="display: block;">{{$admin->street}}</div>
                                        <div style="display: block;">Telefon {{$admin->telefon1}}</div>
                                        <div >Telefax {{$admin->telefon2}}</div>
                                        <div style="display: block;">{{$admin->web}}</div>
                                        <div style="display: block;">eMail:{{$admin->email}}</div>                                  
                                    </div>
                                
                                </div>
                                
                            </td>                         
                        </tr>  

                        <!-- END : admin addres detail -->                     
                        <tr >                         
                          <td colspan="5" style="margin-top:-20px !important;font-size: 17px;">
                            <div style="border: 1px solid black !important;">
                            	<div class="text-center" style="width: 55%; display: inline-block; padding-top: 5px;  ">
                                <strong>Fahrzeugkaufvertrag</strong>
	                            </div>
	                            <div class="text-right" style="width: 40%; display: inline-block;padding-top: 5px;font-size: 14px;">    Stuhr, den {{$carinformation->s_saledate}}  </div>
                            </div>
                          </td>
                          
                        </tr>
                        <tr>
                            <td  colspan="5" class="text add_info" style="margin-top: 9px !important;">                                
                            
                                <div class="text-left add-info-item" style="display: inline-block;width: 30%;">
                                    weitere Käuferangaben:
                                    
                                </div>
                                <div class="text-left add-info-item" style="display: inline-block;width: 30%;">
                                    Geb.-Datum: {{$carinformation->s_birth}}
                                    
                                </div>
                                <div class="text-right add-info-item" style="display: inline-block;width: 37%;">
                                    eMail:{{$carinformation->s_email}}
                                    
                                </div>
                            </td>                           
                        </tr>
                        <tr>
                            <td  colspan="5" class="text add_info" >                                
                            
                                <div class="text-left add-info-item1" style="display: inline-block;width: 30%;">
                                    Telefon:{{$carinformation->s_phonenum}}                                 
                                </div>
                                <div class="text-left add-info-item1" style="display: inline-block;width: 30%;">
                                    Telefax:{{$carinformation->s_fax}}
                                    
                                </div>
                                <div class="text-left add-info-item1" style="display: inline-block;width: 37%;">
                               
                                    
                                </div>
                            </td>                           
                        </tr>
                        <!-- <tr>
                            <td colspan="2" class="add_info">
                                Telefon:{{$carinformation->s_phonenum}}
                            </td>
                            <td colspan="2" class="add_info">
                                Telefax:{{$carinformation->s_fax}}
                            </td>       
                            <td  class="text add_info" >                                
                                </td>                   
                        </tr> -->
                        <!-- start : notification -->
                        <tr>
                            <td colspan="5" class="text-center" style=" font-size: 12px;">
                                Unter Anerkennung allgemeiner Geschäftsbedingungen, verkauft die T&R Ihr Autohaus GmbH folgendes Fahrzeug:                          
                            </td>
                        </tr>
                        <!-- end : notification -->
                        <!-- start : car infomation -->
                        <tr>
                            <td >
                                <strong>Fahrzeug:</strong>  
                            </td>
                            <td colspan="4">
                                <strong>{{$carinformation->c_name}}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="car-information">
                                FIn:
                            </td>
                            <td class="car-information" colspan="4">
                                {{$carinformation->c_finnumber}}
                            </td>
                        </tr>
                        <tr>
                            <td class="car-information">
                                Erstzulassung:
                            </td>
                            <td class="car-information" colspan="4">
                                {{$carinformation->c_r_date}}
                            </td>
                        </tr>
                        <tr>
                            <td class="car-information">
                                Leistung KW:
                            </td>
                            <td class="car-information" colspan="4">
                                {{$carinformation->c_kw}}
                            </td>
                        </tr>
                        <tr>
                            <td class="car-information">
                                km-stand:
                            </td>
                            <td class="car-information" colspan="4">
                                {{$carinformation->c_kilometer}}
                            </td>
                        </tr>
                        <tr>
                            <td class="car-information">
                                Vorbesitzer:
                            </td>
                            <td class="car-information" colspan="4">
                                {{$carinformation->c_color}}
                            </td>
                        </tr>
                        <tr>
                            <td class="car-information">
                                Voresitzer:
                            </td>
                            <td class="car-information" colspan="4">
                                {{$carinformation->c_car_no}}
                            </td>
                        </tr>

                        @if(!empty($carinformation->c_equip1))
                        <tr>
                            <td class="car-information">
                                Ausstattung:
                            </td>
                            <td class="car-information" colspan="4">
                                {{$carinformation->c_equip1}}
                            </td>
                        </tr>
                        @endif
                        @if(!empty($carinformation->c_equip2))
                        <tr>
                            <td class="car-information">
                                
                            </td>
                            <td class="car-information" colspan="4">
                                {{$carinformation->c_equip2}}
                            </td>
                        </tr>
                        @endif
                        @if(!empty($carinformation->c_equip3))
                        <tr>
                            <td class="car-information">
                                
                            </td>
                            <td class="car-information" colspan="4">
                                {{$carinformation->c_equip3}}
                            </td>
                        </tr>
                        @endif
                        @if(!empty($carinformation->c_equip4))
                        <tr>
                            <td class="car-information">
                                
                            </td>
                            <td class="car-information" colspan="4">
                                {{$carinformation->c_equip4}}
                            </td>
                        </tr>
                        @endif
                        <tr>
					    	<td class="car-information">
					    		Bemerkungen:
					    	</td>
					    	<td class="car-information" colspan="4">
					    		{{$carinformation->b_contract_desc1}}
					    	</td>
					    </tr>
					    <tr>
					    	<td class="car-information">
					    		
					    	</td>
					    	<td class="car-information" colspan="4">
					    		{{$carinformation->b_contract_desc2}}
					    	</td>
					    </tr>
					    <tr>
					    	<td class="car-information">
					    		
					    	</td>
					    	<td class="car-information" colspan="4">
					    		{{$carinformation->b_contract_desc3}}
					    	</td>
					    </tr>
					    <tr>
					    	<td class="car-information">
					    		
					    	</td>
					    	<td class="car-information" colspan="4">
					    		{{$carinformation->b_contract_desc4}}
					    	</td>
					    </tr>
					    <tr>
					    	<td class="car-information">
					    		Abholtermin:
					    	</td>
					    	<td class="car-information" colspan="4">
					    		{{$carinformation->b_contract_schedule}}
					    	</td>
					    </tr>
					    <tr>
					    	<td class="car-information">
					    		Zahlung:
					    	</td>
					    	<td style="padding-bottom: 5px;" class="car-information" colspan="4">
					    		{{$carinformation->b_contract_payment}}
					    	</td>
					    </tr>
                        <!-- end : car infomation -->
                        <!--  start : invoice -->
                        <tr >
                            <td colspan="5" style="border: 1px solid black;padding: 7px;" class="text-left">
                            	<div>
                            		<div style="width: 50%; display: inline-block; " >                                  
	                                  	Fahrzeugpreis                            
	                                </div>
	                                <div style="width: 20%; display: inline-block;" >
	                                	@if($carinformation->s_25a == 1)
	                                     netto:
	                                     @endif                          
	                                </div>
	                                <div style="width:28%; display: inline-block;" class="text-right" >
	                                	@if($carinformation->s_25a ==1)
	                                      @convert(($carinformation->s_value))€
	                                      @endif
	                                </div>
                            	</div>
                            	<div>
                            		<div style="width: 50%; display: inline-block; " >                                  
	                                  Der Verkauf erfolgt nach §25a UStG	             
	                                </div>
	                                <div style="width: 20%; display: inline-block;" >
	                                	@if($carinformation->b_25a ==1)
	                                		@if($carinformation->b_total != 0)
	                                     		{{ round(($carinformation->b_vat_value/$carinformation->b_total) * 100)}}% MwSt
	                                     	@endif 
	                                     @endif                                 
	                                </div>
	                                <div style="width:28%; display: inline-block;" class='text-right' >
	                                	@if($carinformation->b_25a ==1)
	                                     {{$carinformation->b_vat_value}}€
	                                     @endif
	                                </div>
                            	</div>
                            	<div>
                            		<div style="width: 50%; display: inline-block; " >                                  
	                                  Gebrauchtgegenstände/Sonderregelung	           
	                                </div>
	                                <div style="width: 20%; display: inline-block; border-top: 1px solid black;" >
	                                     Brutto:                                
	                                </div>
	                                <div style="width:28%; display: inline-block;border-top: 1px solid black;"  class="text-right">
	                                      @convert(($carinformation->b_total))€
	                                </div>
                            	</div>                              
                            </td>
                        </tr>
                        <!-- end : invoice -->
                        <!-- start : notification -->
					    <tr>
					    	<td colspan="5">
					    		<div style="width: 100%;padding-top:10px; font-size: 11px;" class="text-center"> Der Verkäufer weist auf die anhängenden allgemeinen Geschäftsbedingungen hin. Der Käufer hat von ihrem Inhalt Kenntnis genommen</div>
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="5">
					    		<div style="width: 100%;font-size: 10px;" class="text-center"> und ist mit ihrer Geltung einverstanden. Das Fahrzeug wurde vom Käufer ausgiebig besichtigt und Probe gefahren und er erkennt an,</div>
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="5">
					    		<div style="width: 100%;font-size: 10px;" class="text-center"> das der Kaufgegenstand am Liefertag keine Mängel aufweist und in einem technisch und optisch einwandfreiem Zustand geliefert</div>
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="5">
					    		<div style="width: 100%;font-size: 10px;" class="text-center"> worden ist. Das Fahrzeug wird unter Ausschluß jeglicher Gewährleistung verkauft.</div>
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="5">
					    		<div style="width: 100%;font-size: 11px;" class="text-center">Gerichtsstand für beide ist Stuhr.</div>
					    	</td>
					    </tr>
					    <!-- end : notification -->
                        <!-- start : sign -->
                        <tr>
                            <td colspan="5" style="padding-top: 35px;">
                                <div style="width: 45%; display: inline-block;   " >
                                    <div class="text-center" style="display: block;border-top: 1px solid black;">
                                        Käufer
                                    </div>                                  
                                </div>
                                <div style="width: 7%;display: inline-block;">
                                	
                                </div>
                                <div style="width: 44%; display: inline-block;" >
                                    <div class="text-center" style="display: block; border-top: 1px solid black;">
                                        Verkäufer
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- end : sign -->

                        <tr>
                            <td colspan="3" class="text-left">
                                
                            </td>
                            <td colspan="2" class="text-left bottom-info-font" >Commerzbank Bremen (BLZ 290 400 90) Kto.-Nr. 100 142 900</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-left bottom-info-font">
                                Steuer-Nr. 04621200800
                            </td>
                            <td></td>
                            <td colspan="2" class="text-left bottom-info-font">BIC/SWIFT-Code: COBADEFF290 - IBAN: DE51 2904009001 0014 2900</td>
                        </tr>
                        <tr>
                            <td class="text-left bottom-info-font">
                                Ust-IdNr.: DE 812660538
                            </td>
                            <td colspan="2" class="text-right bottom-info-font">
                                Geschäftsführer:
                            </td>
                            <td colspan="2" class="text-left bottom-info-font">Kreissparkasse Syke (BLZ 291 517 00) Kto.-Nr. 1160 000 905</td>
                        </tr>
                        <tr>
                            <td  class="text-left bottom-info-font">
                                HRB Walsrode 111018
                            </td>
                            <td colspan="2" class="text-right bottom-info-font">
                                Thorsten Rose
                            </td>
                            <td colspan="2" class="text-left bottom-info-font">BIC/SWIFT-Code: BRLADE21SYK - IBAN: DE16 29151700 11600 00905</td>
                        </tr>
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>