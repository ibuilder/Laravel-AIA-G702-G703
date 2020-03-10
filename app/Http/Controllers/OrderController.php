<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Picker;
use Config;
use DateTime;
use Session;
use DB;

class OrderController extends Controller
{
  public function __construct()
  {
    // Turkey timezone

    //
    if (!Session::has('update_interval')) {
      Session::put('update_interval', Config::get('app.updateInterval'));
    }
    $this->middleware('auth', ['except' => ['fetchdata', 'getOrders', 'statistics']]);
  }

  public function fetchdata(Request $request)
  {
    // date_default_timezone_set('Etc/GMT+3'); // timezone according to İstanbul
    $force_request = $request->input('forceUpdate');
    $now = new DateTime();
    $timestamp_now = $now->getTimestamp();
    $last_update_time = Session::get('last_update_time', 0);
    $diff = $timestamp_now - $last_update_time;

    $update_interval = Session::get('update_interval');

    if ($diff / 60 < $update_interval && !$force_request) {
      $retval = 0;
      return response()->json(['retval' => $retval]);
    }

    $api_credential_url = Config::get("app.API_CREDENTIAL_URL", "");
    $api_credential_param_json = Config::get("app.API_CREDENTION_PARAM_JSON");
    $api_credential_param = str_replace('"', '%22', $api_credential_param_json);
    $api_credential_url_full = $api_credential_url . $api_credential_param;
    $curl = \curl_init();
    curl_setopt_array($curl, [
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => $api_credential_url_full,
       CURLOPT_SSL_VERIFYPEER => false,
       CURLOPT_FOLLOWLOCATION => 1,
       CURLOPT_SSL_VERIFYHOST => false,
    ]);

    $credential_json = \curl_exec($curl);
    $credential_info = \json_decode($credential_json);
    $session_id = $credential_info->SessionID;

    $api_url_prefix = Config::get("app.ERP_API_URL_PREFIX", "");
    $api_url_suffix = Config::get("app.ERP_API_URL_SUFFIX", "");
    $api_input_json = Config::get("app.ERP_PARAM_JSON", "");
    $api_input = str_replace('"', '%22', $api_input_json);
    $api_url = $api_url_prefix . $session_id . $api_url_suffix;
    $api_url = $api_url . "?" . $api_input;

  //  $curl = \curl_init();
    curl_setopt_array($curl, [
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => $api_url,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_FOLLOWLOCATION => 1,
      CURLOPT_SSL_VERIFYHOST => false,
    ]);
    $response_json = \curl_exec($curl);

  /*  $response_json = '[{"ReserveHeaderID":"07a966cf-94d8-4081-b20d-ab0c00437240","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-69835","ReserveDate":"\/Date(1574283600000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":null,"CostofRemainigReserveQty":null},
                         {"ReserveHeaderID":"e0468a41-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e0468a22-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e0468a24-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e0468ae3-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e0468a3e-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e0468a66-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e0468a71-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e0468a99-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e0463441-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e046f341-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e00d8a41-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"e0648a41-a070-46dd-b5df-ab0f0098e2b7","ProcessCode":"WS","CurrAccCode":"000997","ReserveNumber":"1-WS-3-70023","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"DENEME VADELİ","RemainingReserveQty":64,"CostofRemainigReserveQty":1314.1440000000002},
                         {"ReserveHeaderID":"b6f5aa7c-2b09-4f51-ac19-ab0f00b1ffb5","ProcessCode":"S","CurrAccCode":"M02","ReserveNumber":"1-S-3-40358","ReserveDate":"\/Date(1574542800000)\/","WarehouseCode":"MUH","CustomerName":"Avantaj","RemainingReserveQty":20,"CostofRemainigReserveQty":null}]'; */
    $response = \json_decode($response_json);
    $picker_id = Picker::where('name', 'Not Assigned')->first();
    foreach ($response as $val) {
      $timestring = $val->ReserveDate;
      list($timestamp) = sscanf($timestring, "/Date(%d)/");
      $datetime = date('Y-m-d H:i:s', $timestamp / 1000);
      $now = new DateTime();
      $current = $now->format('Y-m-d H:i:s');
      $exist = Order::where('reserve_header_id', $val->ReserveHeaderID)->count();
      if ($exist) {
        $mdl_order = Order::where('reserve_header_id', $val->ReserveHeaderID)->first();
        $mdl_order->quantity = $val->RemainingReserveQty;
        $mdl_order->changed_status = 1;
        $mdl_order->updated_at_erp = $current;
        $mdl_order->save();
      }else{
        $mdl_order = new Order();
        $mdl_order->reserve_header_id = $val->ReserveHeaderID;
        $mdl_order->process_code = $val->ProcessCode;
        $mdl_order->reserve_number = $val->ReserveNumber;
        $mdl_order->reserve_date = $datetime;
        $mdl_order->curr_acc_code = $val->CurrAccCode;
        $mdl_order->warehouse_code = $val->WarehouseCode;
        $mdl_order->customer_name = $val->CustomerName;
        $mdl_order->balance = $val->Balance;
        $mdl_order->late_balance = $val->LateBalance;
        $mdl_order->average_date_of_late_balance = $val->AverageDateofLateBalance;
        $mdl_order->quantity = $val->RemainingReserveQty;
        $mdl_order->total_cost = $val->CostofRemainigReserveQty;
        $mdl_order->picker_id = $picker_id->id;
        $mdl_order->note = $val->Note;
        $mdl_order->changed_status = 1;
        $mdl_order->updated_at_erp = $current;
        $mdl_order->save();
      }

    }


    Session::put('last_update_time', $timestamp_now);
    $retval = 1;
    $update_time = $now->format('Y-m-d H:i:s');
    return response()->json(['retval' => $retval, 'update_time' => $update_time]);
  }

  public function statistics(Request $request)
  {
    $now = new DateTime();
    $today = $now->format('Y-m-d');
    $assign_date = $request->input('assign_date', $today);
    $starttime = $assign_date . " 00:00:00";
    $endtime = $assign_date . " 23:59:59";
    $quantityToBePicked = DB::table('orders')
      ->where('assign_time', '>=', $starttime)
      ->where('assign_time', '<=', $endtime)
      ->sum('quantity');
    $costToBePicked = DB::table('orders')
      ->where('assign_time', '>=', $starttime)
      ->where('assign_time', '<=', $endtime)
      ->sum('total_cost');
    $quantityPickedUntilNow = DB::table('orders')
      ->where('assign_time', '>=', $starttime)
      ->where('assign_time', '<=', $endtime)
      ->whereNotNull('end_time')
      ->sum('quantity');
    $quantityRemaining = DB::table('orders')
      ->where('assign_time', '>=', $starttime)
      ->where('assign_time', '<=', $endtime)
      ->whereNull('end_time')
      ->sum('quantity');
    $remainingPercent = 'inf';
    if ($quantityToBePicked != 0) {
      $remainingPercent = $quantityRemaining / $quantityToBePicked * 100;
    }
    $earliestTime = DB::table('orders')
      ->where('assign_time', '>=', $starttime)
      ->min('assign_time');
    list($year, $month, $date, $hour, $minutes, $seconds) = \sscanf($earliestTime, "%d-%d-%d %d:%d:%d");
    $nowHour = $now->format('H');
    $elapsedHours = (int) $nowHour - $hour;
    if ($elapsedHours == 0) $elapsedHours = 1;
    $quantityPickedPerHour = number_format($quantityPickedUntilNow / $elapsedHours, 1, ".", "");
    $totalElapsedTime = DB::table('orders')
      ->where('assign_time', '>=', $starttime)
      ->where('assign_time', '<=', $endtime)
      ->sum('elapsed_time');
    $totalPickCount = DB::table('orders')
      ->where('assign_time', '>=', $starttime)
      ->where('assign_time', '<=', $endtime)
      ->whereNotNull('end_time')
      ->count();

    $totalOrdersToAssign = DB::table('orders')
      ->whereNull('assign_time')
      ->count();
    $totalQuantityToAssgine = DB::table('orders')
      ->whereNull('assign_time')
      ->sum('quantity');
    $totalCostToAssign = DB::table('orders')
      ->whereNull('assign_time')
      ->sum('total_cost');

    $averageFinishTime = 'inf';
    if ($totalPickCount != 0) {
      $averageFinishTime = round($totalElapsedTime / $totalPickCount);
    }

    $pickerInfoes = array();
    $pickers = Picker::where('name', '<>', 'Not Assigned')->paginate();
    foreach ($pickers as $picker) {
      $picker_id = $picker->id;
      $totalQuantity = DB::table('orders')
        ->where('assign_time', '>=', $starttime)
        ->where('assign_time', '<=', $endtime)
        ->where('picker_id', '=', $picker_id)
        ->sum('quantity');
      $pickedQuanty = DB::table('orders')
        ->where('assign_time', '>=', $starttime)
        ->where('assign_time', '<=', $endtime)
        ->where('picker_id', '=', $picker_id)
        ->whereNotNull('end_time')
        ->sum('quantity');
      $currentlyPicking = DB::table('orders')
        ->where('assign_time', '>=', $starttime)
        ->where('assign_time', '<=', $endtime)
        ->where('picker_id', '=', $picker_id)
        ->whereNotNull('start_time')
        ->whereNull('end_time')
        ->sum('quantity');
      $remaining = DB::table('orders')
        ->where('assign_time', '>=', $starttime)
        ->where('assign_time', '<=', $endtime)
        ->where('picker_id', '=', $picker_id)
        ->whereNotNull('assign_time')
        ->whereNull('start_time')
        ->sum('quantity');
      $percentRemaining = 'inf';
      if ($totalQuantity > 0) {
        $percentRemaining = $remaining / $totalQuantity * 100;
      }
      $pickerData = [
        'name' => $picker->name,
        'totalQuantity' => $totalQuantity,
        'pickedQuanty' => $pickedQuanty,
        'currentlyPicking' => $currentlyPicking,
        'remaining' => $remaining,
        'percentRemaining' => $percentRemaining
      ];
      $pickerInfoes[$picker_id] = $pickerData;
    }



    $data = [
      'quantityToBePicked' => $quantityToBePicked,
      'costToBePicked' => $costToBePicked,
      'quantityPickedUntilNow' => $quantityPickedUntilNow,
      'quantityRemaining' => $quantityRemaining,
      'remainingPercent' => $remainingPercent,
      'quantityPickedPerHour' => $quantityPickedPerHour,
      'averageFinishTime' => $averageFinishTime,
      'pickerInfoes' => $pickerInfoes,
      'assign_date' => $assign_date,
      'totalOrdersToAssign' => $totalOrdersToAssign,
      'totalQuantityToAssign' => $totalQuantityToAssgine,
      'totalCostToAssign' => $totalCostToAssign,
    ];
    return view('dashboard', ['data' => $data, 'pickers' => $pickers]);
  }

  public function assign(Request $request)
  {
    $now = new DateTime();
    $today = $now->format('Y-m-d');
    $customer_name = $request->input('customer_name', '');
    $picker = $request->input('picker', '');
    $status = $request->input('status', 'all');
    $resv_date_start = $request->input('resv_date_start', $today);
    $resv_date_end = $request->input('resv_date_end', $today);
    $order_by = $request->input('order_by', 'reserve_number');
    $ascending = $request->input('ascending', 'asc');
    $currPage = $request->input('curr_page', 0);
    $resv_time_start = $resv_date_start . " 00:00:00";
    $resv_time_end = $resv_date_end . "23:59:59";
    $query = Order::join('pickers', 'pickers.id', '=', 'orders.picker_id')
      ->select('orders.*', 'pickers.name', DB::raw('TIMESTAMPDIFF(MINUTE, start_time, end_time) as elapsed'))
      ->where('customer_name', 'LIKE', '%' . $customer_name . '%')
      ->where('pickers.name', 'LIKE', '%' . $picker . '%')
      ->where('orders.deleted', 0)
      ->where('reserve_date', '>=', $resv_time_start)
      ->where('reserve_date', '<=', $resv_time_end);
    switch ($status) {
      case 'not_assigned':
        $query = $query->where('pickers.name', 'Not Assigned');
        break;
      case 'not_started':
        $query = $query->where('pickers.name', '<>', 'Not Assigned')->whereNull('start_time');
        break;
      case 'picking':
        $query = $query->whereNotNull('start_time')->whereNull('end_time');
        break;
      case 'finished':
        $query = $query->whereNotNull('end_time');
        break;
    }

    $pickers = Picker::where('name', '<>', 'Not Assigned')->get();

    $update_time = (new DateTime('@' . (Session::get('last_update_time', 0) + 10800)))->format('Y-m-d H:i:s');
    $last_updated_at_erp = Order::max('updated_at_erp');
    $data = [
      'customer_name' => $customer_name,
      'picker' => $picker,
      'status' => $status,
      'resv_date_start' => $resv_date_start,
      'resv_date_end' => $resv_date_end,
      'pickers' => $pickers,
      'order_by' => $order_by,
      'ascending' => $ascending,
      'update_time' => $update_time,
      'last_updated_at_erp' => $last_updated_at_erp,
    ];
    $query = $query->orderBy($order_by, $ascending);
    $records = $query->paginate(config('perPage', 10));

    return view('assign', ['records' => $records, 'data' => $data]);
  }

  public function getOrders(Request $request)
  {
    $now = new DateTime();
    $today = $now->format('Y-m-d');
    $customer_name = $request->input('customer_name', '');
    $picker = $request->input('picker', '');
    $status = $request->input('status', 'all');
    $resv_date_start = $request->input('resv_date_start', $today);
    $resv_date_end = $request->input('resv_date_end', $today);
    $order_by = $request->input('order_by', 'reserve_number');
    $ascending = $request->input('ascending', 'asc');
    $currPage = $request->input('curr_page', 0);
    $resv_time_start = $resv_date_start . " 00:00:00";
    $resv_time_end = $resv_date_end . "23:59:59";
    $query = Order::join('pickers', 'pickers.id', '=', 'orders.picker_id')
      ->select('orders.*', 'pickers.name', DB::raw('TIMESTAMPDIFF(MINUTE, start_time, end_time) as elapsed'))
      ->where('customer_name', 'LIKE', '%' . $customer_name . '%')
      ->where('pickers.name', 'LIKE', '%' . $picker . '%')
      ->where('orders.deleted', 0)
      ->where('reserve_date', '>=', $resv_time_start)
      ->where('reserve_date', '<=', $resv_time_end);
    switch ($status) {
      case 'not_assigned':
        $query = $query->where('pickers.name', 'Not Assigned');
        break;
      case 'not_started':
        $query = $query->where('pickers.name', '<>', 'Not Assigned')->whereNull('start_time');
        break;
      case 'picking':
        $query = $query->whereNotNull('start_time')->whereNull('end_time');
        break;
      case 'finished':
        $query = $query->whereNotNull('end_time');
        break;
    }
    //   print_r(Session::get('last_update_time', 0));exit;
    $update_time = (new DateTime('@' . (Session::get('last_update_time', 0) + 10800)))->format('Y-m-d H:i:s');
    $data = [
      'customer_name' => $customer_name,
      'picker' => $picker,
      'status' => $status,
      'resv_date_start' => $resv_date_start,
      'resv_date_end' => $resv_date_end,
      'order_by' => $order_by,
      'ascending' => $ascending,
      'update_time' => $update_time
    ];
    $query = $query->orderBy($order_by, $ascending);
    $records = $query->paginate(config('perPage', 10));
    return view('orders', ['records' => $records, 'data' => $data]);
  }

  public function setInterval(Request $request)
  {
    $interval = $request->input('interval');

    Session::put('update_interval', $interval);
    return response()->json(['interval' => Session::get('update_interval')]);
  }

  public function editOrder(Request $request)
  {
    // date_default_timezone_set('Etc/GMT+3'); // timezone according to İstanbul
    $id = $request->input('id');
    $picker_id = $request->input('picker_id');
    $mdl_order = Order::find($id);
    $now = new DateTime();
    $datetime = $now->format('Y-m-d H:i:s');
    if($picker_id == '0'){
      $picker_id = Picker::where('name', 'Not Assigned')->first()->id;
      $mdl_order->picker_id = $picker_id;
      $mdl_order->assign_time = null;
      $mdl_order->updated_at_panel = $datetime;
    }else{
      $mdl_order->picker_id = $picker_id;
      $mdl_order->assign_time = $datetime;
    }


    $mdl_order->save();
    return redirect()->back();
  }

  public function delete(Request $request) {
    $id = $request->input('id');
    $order = Order::find($id);
    $order->deleted = 1;
    $order->save();
    return redirect()->back()->withSuccess("An order has been deleted");
  }
}
