@extends('layouts.app')
@section('content')
   <br>
   <h2>Hi!
    @if(Session::get('user')) {{Session::get('user')}} </h2>
    <br>
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif 
@endsection