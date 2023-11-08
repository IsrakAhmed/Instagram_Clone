@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-3 pt-4">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">

                <div class="d-flex align-items-center pb-2">
                    <div class="h1 mt-2">{{$user->username}}</div>

                    <follow-button user-id="{{ $user->id }}"></follow-button>
                </div>


                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div style="padding-right: 1.25rem;"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div style="padding-right: 1.25rem;"><strong>65k</strong> Followers</div>
                <div style="padding-right: 1.25rem;"><strong>3</strong> Following</div>
            </div>
            <div class="pt-4" style="font-weight: bold;">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
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
