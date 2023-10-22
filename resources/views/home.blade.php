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
        <div class="col-3" style="padding: 1.25rem">
            <img height="150px" src="https://play-lh.googleusercontent.com/C9CAt9tZr8SSi4zKCxhQc9v4I6AOTqRmnLchsu1wVDQL0gsQ3fmbCVgQmOVM1zPru8UH=w240-h480-rw" class="rounded-circle">
        </div>

        <div class="col-9">
            <div><h1>Israk Ahmed</h1></div>
            <div>
                <div><strong>153</strong> Posts</div>
                <div><strong>65445</strong> Followers</div>
                <div><strong>3</strong> Following</div>
            </div>
        </div>
    </div>
</div>
@endsection
