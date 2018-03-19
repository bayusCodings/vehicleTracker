<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Model\Car;
use App\Model\Driver;

class CarController extends Controller{
    private $car;
    private $driver;

	public function __construct(Driver $driver, Car $car)
    {
        $this->driver = $driver;
        $this->car = $car;
	}

    public function addCar(Request $request){
        $this->car->driver_id = $request->driver;
        $this->car->car_name = $request->name;
        $this->car->car_number = $request->number;

        if($this->car->save())
            return view('pages.add_vehicle', [
                'msg'=>'Vehicle added successfully',
                'drivers' => Driver::all()
            ]);
    }

    public function getCarAndDriver(){
        $listOfDriversAndVehicles = DB::table('drivers')
            ->join('car', 'drivers.id', '=', 'car.driver_id')
            ->select('drivers.*', 'car.car_name', 'car.car_number')
            ->get();

        return view('pages.track_list', [
            'listOfDriversAndVehicles' => $listOfDriversAndVehicles
        ]);
    }

    public function login(Request $request){
        $result = DB::table('car')
            ->select('driver_id')
            ->where('car_number', $request->vehicleNumber)
            ->get();
            
            return response()->json(['result' => $result], 200);
            
    }
}