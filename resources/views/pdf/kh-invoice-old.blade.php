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
					    			<div style="display: block ; padding-bottom: 110px;">
					    				@if(isset($carinformation->s_company) && $carinformation->s_company==1)
					    				Herr
					    				@endif

					    				@if(isset($carinformation->s_company) && $carinformation->s_company==2)
					    				Frau
					    				@endif
					    				@if(isset($carinformation->s_company) && $carinformation->s_company==3)
					    				Firma
					    				@endif
					    			</div>
				    				<!-- <div style="display: block">
					    				{{$carinformation->s_f_name}}
					    			</div>
					    			<div style="display: block;">
					    				{{$carinformation->s_s_name}}
					    			</div>
					    			<div style="display: block;">
					    				{{$carinformation->s_street}}
					    			</div>
					    			<div style="display: block">
					    				{{$carinformation->s_nummber}}
					    			</div>
					    			<div style="display: block;">
					    				{{$carinformation->s_postalcode}}
					    			</div>
					    			<div style="display: block;">
					    				{{$carinformation->s_city}}
					    			</div>
					    			<div style="display: block;">
					    				{{$carinformation->s_country}}
					    			</div>	 -->
				    			
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
					      <td colspan="5" style="border: 1px solid black; style="font-size: 17px;">
					      	<div class="text-center" style="width: 60%; display: inline-block; padding-top:3px; ">
					      		<strong>Fahrzeugkaufvertrag</strong>
					      	</div>
					      	<div class="text-right" style="width: 40%; display: inline;">	Stuhr, den {{$carinformation->s_saledate}}	</div>
					      </td>
					      
					    </tr>
					    <tr>
					    	<td  colspan="2" class="text add_info" >					    		
					    		weitere Käuferangaben:</td>
					    	<td colspan="2" class="add_info">
					    		Geb.-Datum: {{$carinformation->s_birth}}
					    	</td>
					    	<td class="add_info" >
					    		eMail:{{$carinformation->s_email}}
					    	</td>
					    	
					    </tr>
					    <tr>
					    	<td colspan="2" class="add_info">
					    		Telefon:{{$carinformation->s_phonenum}}
					    	</td>
					    	<td colspan="2" class="add_info">
					    		Telefax:{{$carinformation->s_fax}}
					    	</td>		
					    	<td  class="text add_info" >					    		
					    		</td>			    	
					    </tr>
					    <!-- start : notification -->
					    <tr>
					    	<td colspan="5" class="text-center" style="padding-bottom: 10px; font-size: 12px;">
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
					    		Fin:
					    	</td>
					    	<td class="car-information" colspan="4">
					    		{{$carinformation->c_finnumber}}
					    	</td>
					    </tr>
					    <tr>
					    	<td class="car-information">
					    		EZ:
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
					    		Aufbau:
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
					    <tr>
					    	<td class="car-information">
					    		Bemerkungen:
					    	</td>
					    	<td class="car-information" colspan="4">
					    		{{$carinformation->s_note1}}
					    	</td>
					    </tr>
					    <tr>
					    	<td class="car-information">
					    		
					    	</td>
					    	<td class="car-information" colspan="4">
					    		{{$carinformation->s_note2}}
					    	</td>
					    </tr>
					    <tr>
					    	<td class="car-information">
					    		Abholtermin:
					    	</td>
					    	<td class="car-information" colspan="4">
					    		{{$carinformation->s_pickup}}
					    	</td>
					    </tr>
					    <tr>
					    	<td class="car-information">
					    		Zahlung:
					    	</td>
					    	<td style="padding-bottom: 25px;" class="car-information" colspan="4">
					    		{{$carinformation->s_payment}}
					    	</td>
					    </tr>
					    <!-- end : car infomation -->
					    <!--  start : invoice -->
					    <tr >
					    	<td colspan="5" style="border: 1px solid black;" class="text-left">
					    		<div style="width: 50%; display: inline-block; padding-top: 20px !important;" >					    			
					    			<div style="display: block; padding-left:15px;">Fahrzeugpreis
					    			</div>
					    			<div style="display: block;padding-left:15px;">
					    				&nbsp;
					    			</div>
					    			<div style="display: block;padding-left:15px;">
					    				&nbsp;
					    			</div>					    			
					    		</div>
					    		<div style="width: 49%; display: inline-block;padding-top: 30px !important;" >
					    			<div style="display: block; margin-top: 3px !important;">
					    				<div  style="display:inline-block;width: 40%;">
					    					netto:
					    				</div>
					    				<div class="text-right" style="display:inline-block;width: 55%;">
					    					@convert(($carinformation->b_value))€
					    				</div>
					    			</div>
					    			<div style="display: block;">
					    				<div style="display:inline-block;width: 40%;">
					    					@convert(($carinformation->b_vat_percent))% MwSt
					    				</div>
					    				<div class="text-right" style="display:inline-block;width: 55%;">
					    					@convert(($carinformation->b_vat_value))€
					    				</div>
					    			</div>
					    			<div style="display: block; border-top: 1px solid black;">
					    				<div style="display:inline-block;width: 40%;">
					    					Gesamt:
					    				</div>
					    				<div class="text-right" style="display:inline-block;width: 55%;">
					    					@convert(($carinformation->b_total))€
					    				</div>
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
					    		<div style="width: 100%;font-size: 11px;" class="text-center"> und ist mit ihrer Geltung einverstanden. Das Fahrzeug wurde vom Käufer ausgiebig besichtigt und Probe gefahren und er erkennt an,</div>
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="5">
					    		<div style="width: 100%;font-size: 11px;" class="text-center"> das der Kaufgegenstand am Liefertag keine Mängel aufweist und in einem technisch und optisch einwandfreiem Zustand geliefert</div>
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="5">
					    		<div style="width: 100%;font-size: 11px;" class="text-center"> worden ist. Das Fahrzeug wird unter Ausschluß jeglicher Gewährleistung verkauft.</div>
					    	</td>
					    </tr>
					    <tr>
					    	<td colspan="5">
					    		<div style="width: 100%;padding-bottom:20px;font-size: 11px;" class="text-center">Gerichtsstand für beide ist Stuhr.</div>
					    	</td>
					    </tr>
					    <!-- end : notification -->
					    <!-- start : sign -->
					    <tr>
					    	<td colspan="5" style="padding-top: 35px;">
					    		<div style="width: 50%; display: inline-block;   " >
					    			<div class="text-center" style="display: block;border-top: 1px solid black;">
					    				Käufer
					    			</div>					    			
					    		</div>
					    		<div style="width: 49%; display: inline-block;" >
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
					    	<td colspan="2" class="text-left bottom-info-font" style="padding-top:7px;">Commerzbank Bremen (BLZ 290 400 90) Kto.-Nr. 100 142 900</td>
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