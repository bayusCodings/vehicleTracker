<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movement extends Model{
    protected $table = 'movement';
 
    protected $fillable = ['lat', 'lng', 'date', 'driver_id'];	

    public $timestamps = false;

    
}