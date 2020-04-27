@extends('layouts.user')

@section('content')
<main class="pt-2 mx-lg-5">
    <div class="container-fluid mt-5 pt-4">
        <div class="card p-3">
        <img class="img-thumbnail" src="{{asset('uploads/users/'.@Auth::user()->profile_image)}}" width="150">
        <h3>{{@Auth::user()->name}}</h3>
        <p><b>Client Id:</b> {{@Auth::user()->id}} <br><b>Mobile:</b> {{@Auth::user()->mobile}} <br><b>Email:</b> {{@Auth::user()->email}}<br> <b>Address:</b> {{@Auth::user()->address}}</p>
        <div class="col-md-2 ">
        <a class="btn btn-custom text-white btn-md" href="{{url('profile')}}">Edit</a>
        </div>
    </div>
    </div>
</main>

@endsection
