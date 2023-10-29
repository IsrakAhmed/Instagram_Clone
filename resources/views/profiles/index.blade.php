@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-3 pt-4">
            <img height="150px" src="https://play-lh.googleusercontent.com/C9CAt9tZr8SSi4zKCxhQc9v4I6AOTqRmnLchsu1wVDQL0gsQ3fmbCVgQmOVM1zPru8UH=w240-h480-rw" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>

            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>

            <div class="d-flex">
                <div style="padding-right: 1.25rem;"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div style="padding-right: 1.25rem;"><strong>65k</strong> Followers</div>
                <div style="padding-right: 1.25rem;"><strong>3</strong> Following</div>
            </div>
            <div class="pt-4" style="font-weight: bold;">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5" style="text-align: center;">

        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
            </div>
        @endforeach

    </div>


</div>
@endsection
