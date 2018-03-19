@extends('layouts.default')
@section('content')
    <div class="container">
        <br><br><br><br>
        <h3 class="middle">Track Movement</h3>

        <table align="center" class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Vehicle</th>
                    <th>Number</th>
                    <th>Track</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($listOfDriversAndVehicles as $value)
                    <tr>
                        <td>{{ $value->first_name }} {{ $value->last_name }}</td> 
                        <td>{{ $value->car_name }}</td>
                        <td>{{ $value->car_number }}</td>
                        <td><a href="/individual_track/{{ $value->id }}">track</a></td> 
                    </tr>
                @endforeach
                </tr>
            </tbody>

        </table>
        
    </div>
@stop