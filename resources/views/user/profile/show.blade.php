@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ auth()->user()->name }}'s Profile:</div>

                <div class="card-body">
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                    Title: {{ $profile->title }}<br>
                    Body: {{ $profile->body }}<br><br>
                    <a href="/user/profile/{{ $profile->id }}/edit">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
