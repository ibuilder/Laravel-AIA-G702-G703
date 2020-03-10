<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\CarInfo;
use App\Address;
use App\Aia;
use App\Countries;
use Session;

class AiaController extends Controller

{
    public function index(){
        $countries = Countries::get();
        return view('/index',['selbtn'=>'1','countries'=>$countries]);
    }

    public function g702($item){

        $item_info =Aia::where('id',$item)->first();
        $item_info->work_description = json_decode($item_info->work_description,true);
        $item_info->scheduled_value = json_decode($item_info->scheduled_value,true);
        $item_info->period_value = json_decode($item_info->period_value,true);
        $item_info->bill_percentage = json_decode($item_info->bill_percentage,true);
        $item_info->o_work_description = json_decode($item_info->o_work_description,true);
        $item_info->o_scheduled_value = json_decode($item_info->o_scheduled_value,true);
        $item_info->o_period_value = json_decode($item_info->o_period_value,true);
        $item_info->o_bill_percentage = json_decode($item_info->o_bill_percentage,true);
        $total = array();
        $total['scheduled'] = 0 ;
        $total['application'] = 0 ;
        $total['period'] = 0 ;
        $total['material_stored'] = 0 ;
        $total['completed_total'] = 0 ;
        var_dump(!empty($item_info->scheduled_value));
        if(!empty($item_info->scheduled_value)){

            foreach($item_info->scheduled_value as $key => $itemon){
                $total['scheduled']+=$item_info->scheduled_value[$key];
                $total['period']+=$item_info->scheduled_value[$key]*$item_info->bill_percentage[$key]/100;
                $total['completed_total']+=$item_info->scheduled_value[$key]*$item_info->bill_percentage[$key]/100;

            }
        }
        $total['gc_percent'] = ($total['scheduled'] !=0)? $total['completed_total'] /$total['scheduled'] *100:0;
        $total['gc_balance'] = $total['scheduled'] - $total['completed_total'] ;
        $total['retainage'] = $total['period']*$item_info->retainage/100;
        $total['period1'] = $total['retainage']/$item_info->retainage*5;


        $pdf = \PDF::loadView('aiapdf',['total'=>$total,'item'=>$item_info]);

        $pdf->save(storage_path().'g702.pdf');

        return $pdf->download('AIA-g702'.'.pdf');

        return redirect()->back()->with('message', 'G702 has been generated!');
    }


    public function g703($item){

        $item_info =Aia::where('id',$item)->first();

        $item_info->work_description = json_decode($item_info->work_description,true);
        $item_info->scheduled_value = json_decode($item_info->scheduled_value,true);
        $item_info->period_value = json_decode($item_info->period_value,true);
        $item_info->bill_percentage = json_decode($item_info->bill_percentage,true);
        $item_info->o_work_description = json_decode($item_info->o_work_description,true);
        $item_info->o_scheduled_value = json_decode($item_info->o_scheduled_value,true);
        $item_info->o_period_value = json_decode($item_info->o_period_value,true);
        $item_info->o_bill_percentage = json_decode($item_info->o_bill_percentage,true);
        $total = array();
        $total['scheduled'] = 0 ;
        $total['application'] = 0 ;
        $total['period'] = 0 ;
        $total['material_stored'] = 0 ;
        $total['completed_total'] = 0 ;
        $total['o_scheduled'] = 0 ;
        $total['o_application'] = 0 ;
        $total['o_period'] = 0 ;
        $total['o_material_stored'] = 0 ;
        $total['o_completed_total'] = 0 ;
        var_dump(!empty($item_info->scheduled_value));
        if(!empty($item_info->scheduled_value)){

            foreach($item_info->scheduled_value as $key => $itemon){
                $total['scheduled']+=$item_info->scheduled_value[$key];
                $total['period']+=$item_info->scheduled_value[$key]*$item_info->bill_percentage[$key]/100;
                $total['completed_total']+=$item_info->scheduled_value[$key]*$item_info->bill_percentage[$key]/100;
            }
        }
        $total['gc_percent'] = ($total['scheduled'] !=0)? $total['completed_total'] /$total['scheduled'] *100:0;
        $total['gc_balance'] = $total['scheduled'] - $total['completed_total'] ;
        $total['retainage'] = $total['period']*$item_info->retainage/100;

        if(!empty($item_info->o_scheduled_value)){

            foreach($item_info->o_scheduled_value as $key => $itemon){
                $total['o_scheduled']+=$item_info->o_scheduled_value[$key];
                $total['o_period']+=$item_info->o_scheduled_value[$key]*$item_info->o_bill_percentage[$key]/100;
                $total['o_completed_total']+=$item_info->o_scheduled_value[$key]*$item_info->o_bill_percentage[$key]/100;

            }
        }
        $total['o_gc_percent'] = ($total['o_scheduled'] !=0)? $total['o_completed_total'] /$total['o_scheduled'] *100:0;
        $total['o_gc_balance'] = $total['o_scheduled'] - $total['o_completed_total'] ;
        $total['o_retainage'] = $total['o_period']*$item_info->retainage/100;



        // var_dump($total);
        // exit;
        $pdf = \PDF::loadView('g703pdf',['item'=>$item_info,'total'=>$total]);

        $pdf->save(storage_path().'g703.pdf');

        return $pdf->download('AIA-g703'.'.pdf');

        return redirect()->back()->with('message', 'G703 has been generated!');
    }

    public function g702view(){
        // $item_info =Aia::find($item)->get();
        $customPaper = array(0,0,612,792);
        // $pdf = \PDF::loadView('aiapdf')->setPaper($customPaper, 'landscape');;

        return view('aiapdf');
    }

    public function itemlist(){

        $items =Aia::orderBy('created_time','desc')->get();

        return view('carlist',['items'=>$items,'selbtn'=>'3']);
    }

    public function createaia(Request $request){
        $all_data =$request->all();
        $confirm=true;

        foreach($all_data['scheduled_value'] as $key => $one){
            if($one > 0 && is_numeric($one)){

            } else {
                $confirm = false;

            }

        }

        foreach($all_data['o_scheduled_value'] as $key => $one){

            if($all_data['o_scheduled_value'][$key] <1 || !is_numeric($all_data['o_scheduled_value'][$key])){
                $confirm = false;
            }
        }

        if($confirm){
            $filtered_data = array('project_name'=>$all_data['project_name'],'project_number'=>$all_data['project_number'],'contract_number'=>$all_data['contract_number'],'contract_for'=>$all_data['contract_for'],'agreement_number'=>$all_data['agreement_number'],'period_to'=>$all_data['period_to'],'period_from'=>$all_data['period_from'],'contract_date'=>$all_data['contract_date'],'job_no'=>$all_data['job_no'],'to_name'=>$all_data['to_name'],'to_address1'=>$all_data['to_address1'],'to_city'=>$all_data['to_city'],'to_type'=>$all_data['to_type'],'from_type'=>$all_data['from_type'],'to_state'=>$all_data['to_state'],'to_zip'=>$all_data['to_zip'],'to_country'=>$all_data['to_country'],'from_name'=>$all_data['from_name'],'from_address1'=>$all_data['from_address1'],'from_city'=>$all_data['from_city'],'from_state'=>$all_data['from_state'],'from_zip'=>$all_data['from_zip'],'from_country'=>$all_data['from_country'],'retainage'=>$all_data['retainage'],'work_description'=>json_encode($all_data['work_description']),'scheduled_value'=>json_encode($all_data['scheduled_value']),'period_value'=>json_encode($all_data['period_value']),'bill_percentage'=>json_encode($all_data['bill_percentage']),'o_work_description'=>json_encode($all_data['o_work_description']),'o_scheduled_value'=>json_encode($all_data['o_scheduled_value']),'o_period_value'=>json_encode($all_data['o_period_value']),'o_bill_percentage'=>json_encode($all_data['o_bill_percentage']),
                            );
            Aia::insert($filtered_data);
            return redirect('/itemlist');
        } else {
            return redirect()->back()->withErrors('error');
        }

    }

    public function delete_item($item){
        Aia::find($item)->delete();
        return redirect()->back()->with('message', 'The seleted data has been updated!');

    }


}
