<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Car extends Model{
    protected $table = 'car';
 
    protected $fillable = ['car_name', 'car_number', 'driver_id'];	

    public $timestamps = false;

}