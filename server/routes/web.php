<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// header('Access-Control-Allow-Origin: http://localhost:8100/');
// header('Access-Controll-Allow-Credentials: true');

Route::get('/', function () {
    return view('pages.home');
});

////// Drivers ///////////
Route::get('/add/driver', function () {
    return view('pages.add_driver');
});

Route::post('/add/driver', [
    'uses' => 'DriverController@addDriver'
]);

////// Vehicles ///////////
Route::get('/add/vehicle', function () {
    return view('pages.add_vehicle', ['drivers'=>App\Model\Driver::all()]);
});

Route::post('/add/vehicle', [
    'uses' => 'CarController@addCar'
]);

////// Movement ///////////
Route::get('/trackerlist', [
    'uses' => 'CarController@getCarAndDriver'
]);

Route::get('/individual_track/{id}', function($id){
    return view('pages.tracking', ['id' => $id]);
});

Route::get('deleteMovement', [
	'uses' => 'MovementController@deleteLocation'
]);

    /////////// Ajax Call //////////
Route::get('/location/{id}', [
    'uses' => 'MovementController@getLocation' 
]);

    //////////  Login   //////////
Route::group(['prefix' => '/', 'middleware' => 'cors'], function () {
    Route::post('login', [
        'as' => 'car.login',
        'uses' => 'CarController@login'
    ]);

    Route::post('cordinates', [
        'as' => 'movement.cordinates',
        'uses' => 'MovementController@cordinates'
    ]);
});
