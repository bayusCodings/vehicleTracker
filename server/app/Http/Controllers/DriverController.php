<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Driver;

class DriverController extends Controller
{
    private $driver;

	public function __construct(Driver $driver)
    {
		$this->driver = $driver;
	}

    public function addDriver(Request $request){
        $this->driver->first_name = $request->firstname;
        $this->driver->last_name = $request->lastname;
        $this->driver->email = $request->email;
        $this->driver->password = bcrypt($request->password);

        if($this->driver->save())
            return view('pages.add_driver', ['msg'=>'Driver added successfully']);
    }
}
