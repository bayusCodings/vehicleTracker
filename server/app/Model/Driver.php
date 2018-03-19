<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Driver extends Model{
    protected $table = 'drivers';
 
    protected $fillable = ['first_name', 'last_name', 'email', 'password'];	

    public $timestamps = false;
}