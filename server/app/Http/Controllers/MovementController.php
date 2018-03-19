<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Movement;

class MovementController extends Controller{

    private $movement;

	public function __construct(Movement $movement)
    {
        $this->movement = $movement;
	}

    public function getLocation($id){
        // Get first 10 rows 'Later'//
        $result = DB::table('movement')
            ->select('lat', 'lng')
            ->where('driver_id', $id)
            ->get();
            
        return response()->json(['result' => $result], 200);
    }
	
	public function deleteLocation(){
        if(DB::table('movement')->truncate()){
			return view('pages.message', ['msg'=>'Table truncated successfully']);
		}            
    }

    public function cordinates(Request $request){
        $this->movement->lat = $request->lat;
        $this->movement->lng = $request->lng;
        $this->movement->date = date("Y-m-d");
        $this->movement->driver_id = $request->driver_id;

        if($this->movement->save()){
            return response()->json(['result' => true], 200);
        }
    }
} 