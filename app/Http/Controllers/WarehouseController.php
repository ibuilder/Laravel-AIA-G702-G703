<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouse;

class WarehouseController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function getWarehouses(Request $request){
        $warehouses = Warehouse::where('deleted', '=', '0')->paginate(config('perPage', 10));
        return view('warehouses', ['warehouses' => $warehouses]);
      }
  
      public function create(Request $request) {
        $name = $request->input('name');
        $code = $request->input('code');
        $warehouse = new Warehouse();
        $warehouse->name = $name;
        $warehouse->code = $code;
        try{
          $warehouse->save();
          return redirect()->back()->withSuccess("New warehouse " . $name . " has been added");
        }
        catch(Exception $e)
        {
          return redirect()->back()->withError("New warehouse " . $name . " hasn't been added");
        }
      }
  
      public function edit(Request $request) {
        $id = $request->input('id');
        $name = $request->input('name');
        $code = $request->input('code');
        $warehouse = Warehouse::find($id);
        $warehouse->name = $name;
        $warehouse->code = $code;
        try{
          $warehouse->save();
          return redirect()->back()->withSuccess("Warehouse " . $name . " has been changed");
        }
        catch(Exception $e)
        {
          return redirect()->back()->withError("Warehouse " . $name . " hasn't been changed");
        }
      }
  
      public function delete(Request $request) {
        $id = $request->input('id');
        $warehouse = Warehouse::find($id);
        $name = $warehouse->name;
        $warehouse->deleted = 1;
        $warehouse->save();
        return redirect()->back()->withSuccess("Warehouse " . $name . " has been deleted");
      }
}
