@extends('layouts.default')
@section('content')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="/trackerlist">
                        <img class="img-responsive" src="{{URL::asset('images/profile.png')}}" alt="">
                    </a>
                    <div class="intro-text">
                        <span class="skills">Start Tracking</span>
                        <hr class="star-light">
                        <!--<span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop