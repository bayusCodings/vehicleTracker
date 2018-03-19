@extends('layouts.default')
@section('content')
        <div>
            <br><br><br><br>
            <h3 class="middle">Add New Vehicle</h3>

            @if($_SERVER['REQUEST_METHOD'] == 'POST')
                <p class="alert alert-success middle"> {{$msg}} </p>
            @endif

            <div class="col-md-4"></div>

            <div class="col-md-4 well">
                <form method="post" action="/add/vehicle">
                    <fieldset>
                    <legend>Vehicle</legend>

                    <div class="form-group">
                        <select required name="driver" class="form-control">Name</label>
                        <option value ="">&mdash; Select Driver &mdash;</option>

                            @foreach($drivers as $driver)
                                <option value="{{ $driver->id }}">{{ $driver->first_name }} {{ $driver->last_name }} </option>
                            @endforeach
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Vehicle Name</label>
                        <input required id="name" name="name" class="form-control" type="text" >
                    </div>

                    <div class="form-group">
                        <label for="number">Vehicle Number</label>
                        <input required id="number" name="number" class="form-control" type="text" >
                    </div>
                    </fieldset>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary"> Add </button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
@stop