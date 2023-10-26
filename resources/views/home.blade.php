@extends('layouts.app')

@section('content')
<div class="container">
    <!--<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>-->

    <div class="row">
        <div class="col-3 pt-4">
            <img height="150px" src="https://play-lh.googleusercontent.com/C9CAt9tZr8SSi4zKCxhQc9v4I6AOTqRmnLchsu1wVDQL0gsQ3fmbCVgQmOVM1zPru8UH=w240-h480-rw" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">
            <div><h1>Israk Ahmed</h1></div>
            <div class="d-flex">
                <div style="padding-right: 1.25rem;"><strong>153</strong> Posts</div>
                <div style="padding-right: 1.25rem;"><strong>65k</strong> Followers</div>
                <div style="padding-right: 1.25rem;"><strong>3</strong> Following</div>
            </div>
            <div class="pt-4" style="font-weight: bold;"><a style="color: black;" href="https://israkahmed.github.io/Portfolio">https://israkahmed.github.io/Portfolio</a></div>
            <div>I'm a qualified and professional software developer with 3 years of experience in developing. I've strong creative and analytical skills. Team player with an eye for detail.</div>
            <div><a style="color: black;" href="https://github.com/IsrakAhmed">https://github.com/IsrakAhmed</a></div>
        </div>
    </div>

    <div class="row pt-5" style="text-align: center;">
        <div class="col-4">
        <img src="/post/inTajHat.jpg" height="350px">
        </div>

        <div class="col-4">
        <img src="/post/durgaPuja2022.jpg" height="350px">
        </div>
        
        <div class="col-4">
        <img src="/post/icpc.jpg" height="350px">
        </div>
    </div>
    

</div>
@endsection
