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
		font-size:15px;
	}
	</style>
	<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">
<body class="bg-grey">

	<div class="container-fulid">
		<div class="row">
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
					      <td scope="col" colspan="3" class="text-right" style="padding-bottom: 25px;">
					      	<img class="logo-invoice" src="{{asset('public/assets/images/logo-invoice.png')}}" >
					      </td>
					    </tr>
					    <tr>
					    	<td colspan="5">
					    		<div style="width: 69%; display: inline-block; " >
					    			<div style="display: block;text-decoration: underline;font-size: 10px;">
                                        T&R Ihr Autohaus GmbH · Hauptstraße 3 · 28816 Stuhr-Seckenhausen
                                    </div>
                                    <div >Ankaufvertrag</div>
                                    <div >{{$carinformation->s_f_name." ".$carinformation->b_s_name}}</div>
                                
                                    <div style="display: block;">{{$carinformation->b_street}}</div>
                                    <!-- <div >
                                        {{$carinformation->s_nummber}}
                                    </div> -->
                                    <div style="display: block;">{{$carinformation->b_postalcode.','.$carinformation->b_city}}</div>
                                    <div style="display: block;">{{$carinformation->b_add1}}</div>
                                    <div style="display: block;">{{$carinformation->b_country}}</div>
				    			
					    		</div>
					    		<div style="width: 30%; display: inline-block; padding-top: 5px;" >
					    			<div style="display: block">
					    				{{$admin->city}}
					    			</div>
					    			<div style="display: block;">
					    				{{$admin->street}}
					    			</div>
					    			<div style="display: block;">
					    				Telefon {{$admin->telefon1}}
					    			</div>
					    			<div style="display: block">
					    				Telefax {{$admin->telefon2}}
					    			</div>
					    			<div style="display: block;">
					    				{{$admin->web}}
					    			</div>
					    			<div style="display: block;">
					    				eMail:{{$admin->email}}
					    			</div>					    			
					    		</div>
					    	</td>						      
					    </tr>	
					    <tr >                         
                          <td colspan="5" style="margin-top:-20px !important;font-size: 17px;">
                           
                                <div class="text-center" style="width: 30%; display: inline-block; padding-top: 5px; margin-left: -38px; ">
                                <strong>RECHNUNG Nr.:</strong>
                                </div>
                                <div class="text-center" style="width: 38%; display: inline-block; padding-top: 5px;  ">
                                <strong>RECHNUNG Nr.:</strong>
                                </div>
                                <div class="text-right" style="width: 30%; display: inline-block;padding-top: 5px;font-size: 14px;">   	Stuhr, den {{$carinformation->b_saledate}}</div>
                       
                          </td>
                          
                        </tr>



					 <!--    <tr >					      
					      <td colspan="5"  >
					      	<div class="text-center" style="font-size: 22px;width: 30%; display: inline-block; padding-top:3px; ">
					      		<strong>RECHNUNG Nr.:</strong>
					      	</div>
					      	<div class="text-center" style="font-size: 22px;width: 39%; display: inline-block; padding-top:3px; ">
					      		<strong>{{$carinformation->b_invoice_num}}</strong>
					      	</div>
					      	<div class="text-right" style="width: 30%; display: inline;padding-bottom: 35px;">	Stuhr, den {{$carinformation->b_saledate}}	</div>
					      </td>
					      
					    </tr> -->
					    
					    <!-- start : notification -->
					    <tr>
					    	<td colspan="5" class="text-center" style="padding-bottom: 20px; font-size: 12px;">
					    		Der Käufer kauft in Übereinstimmung mit den allgemeinen Geschäftsbedingungen das nachstehende, gebrauchte Fahrzeug, wie ausgiebig besichtigt und Probe gefahren. Er erkennt an, dass der Kaufgegenstand am Lieferungstag keine Mängel aufweist und in einem technisch und optisch einwandfreiem Zustand geliefert worden ist.   			    		
					    	</td>
					    </tr>
					    <!-- end : notification -->
					    <!-- start : notification -->
					    <tr>
					    	<td colspan="5" class="text-center" style="padding-bottom: 10px; font-size: 20px;">
					    		 <strong>-Verschleiß unterliegt nicht der Gewährleistungspflicht-</strong>  			    		
					    	</td>
					    </tr>
					    <!-- end : notification -->
					    <!-- start : notification -->
					    <tr>
					    	<td colspan="5" class="text-center" style="padding-bottom: 10px; font-size: 12px;">
					    		  -Aufbewahrungspflicht dieser Rechnung von 2 Jahren beachten-			    		
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="5" class="text-center" style="padding-bottom: 10px; font-size: 12px;">
					    		  -Bei Gewerbetreibenden/Vollkaufleuten besteht keine Gewährleistungspflicht-  			    		
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="5" class="text-center" style="padding-bottom: 30px; font-size: 12px;">
					    		 Gerichtsstand für beide Seiten ist Stuhr			    		
					    	</td>
					    </tr>
					    <!-- end : notification -->
					    <!-- start : car infomation -->
					    <tr>
					    	<td colspan="2" >
					    		<strong>Fahrzeugtyp :</strong>	
					    	</td>
					    	<td colspan="3">
					    		{{$carinformation->c_name}}
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="2">
					    		<strong>Fahrgestell-Nr :</strong>	
					    	</td>
					    	<td colspan="3">
					    		{{$carinformation->c_finnumber}}
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="2">
					    		<strong>Erstzulassung :</strong>	
					    	</td>
					    	<td colspan="3">
					    		{{$carinformation->c_r_date}}
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="2">
					    		<strong>abgelesener km-Stand :</strong>	
					    	</td>
					    	<td colspan="3" style="padding-bottom: 30px;">
					    		{{$carinformation->c_kilometer}}
					    	</td>
					    </tr>
					   
					    
					    
					    <!-- end : car infomation -->
					    <!--  start : invoice -->
					    <tr >
					    	<td colspan="5" style="padding-top: 40px;" class="text-left">
					    		<div style="width: 50%; display: inline-block; padding-bottom: 20px !important;" >		
					    			<div style="display: block;padding-left:15px;">Der Verkauf erfolgt nach §25a UStG
					    			</div>
					    			<div style="display: block;padding-left:15px;">Gebrauchtgegenstände/Sonderregelung
					    			</div>					    			
					    		</div>
					    		<div style="width: 49%; display: inline-block;padding-top: 40px !important;" >
					    			<div style="display: block; margin-top: 3px !important;">
					    				<div  style="display:inline-block;width: 40%;margin-top: 10px;">
					    					Nettopreis
					    				</div>
					    				<div class="text-right" style="display:inline-block;width: 55%;">
					    					@convert(($carinformation->s_value))€
					    				</div>
					    			</div>
					    			<div style="display: block;">
					    				<div style="display:inline-block;width: 40%;">
					    					
					    				</div>
					    				<div class="text-right" style="display:inline-block;width: 55%;">
					    					@convert(($carinformation->s_vat_value))€
					    				</div>
					    			</div>
					    			<div style="display: block; border-top: 1px solid black;">
					    				<div style="display:inline-block;width: 40%;">
					    					Gesamt:
					    				</div>
					    				<div class="text-right" style="display:inline-block;width: 55%;">
					    					@convert(($carinformation->s_total))€
					    				</div>
					    			</div>
					    		</div>
					    	</td>
					    </tr>
					    <!-- end : invoice -->
					    
					    <!-- start : sign -->
					    <tr>
					    	<td colspan="5" style="padding-top: 45px; padding-bottom: 45px;" >
					    		<div style="width: 20%; display: inline-block;" >
					    			<div class="text-center" style="display: block;">
					    				Lieferdatum :
					    			</div>					    			
					    		</div>
					    		<div style="width: 39%; display: inline-block;">
					    			<div class="text-center" style="display: block; border-bottom: 1px solid black;">
					    				
					    			</div>
					    		</div>
					    	</td>
					    </tr>
					    <!-- end : sign -->

					    <tr>
					    	<td colspan="3" class="text-left">
					    		
					    	</td>
					    	<td colspan="2" class="text-left bottom-info-font" style="padding-top:15px;">Commerzbank Bremen (BLZ 290 400 90) Kto.-Nr. 100 142 900</td>
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