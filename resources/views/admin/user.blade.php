@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="card mt-4 p-3">
        <h3 class="">{{$user->name}}</h3>
        <p><i class="fa fa-phone"></i> {{$user->mobile}}<br> <i class="fa fa-envelope"></i>  {{$user->email}}</p>
        </div>
       
    </section>
@endsection

