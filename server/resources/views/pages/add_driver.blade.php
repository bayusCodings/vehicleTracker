@extends('layouts.default')
@section('content')
    <!--<header>--> 
        <div>
            <br><br><br><br>
            <h3 class="middle">Add New Driver</h3>

            @if($_SERVER['REQUEST_METHOD'] == 'POST')
                <p class="alert alert-success middle"> {{$msg}} </p>
            @endif
            <div class="col-md-4"></div>

            <div class="col-md-4 well">
                <form method="post" action="/add/driver">
                    <fieldset>

                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input required id="firstname" name="firstname" class="form-control" type="text" >
                    </div>

                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input required id="lastname" name="lastname" class="form-control" type="text" >
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" class="form-control" type="email" >
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input required id="password" name="password" class="form-control" type="password">
                    </div>
                    </fieldset>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary"> Add </button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    <!--</header>-->
@stop