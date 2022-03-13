@extends('layouts.app')
@section('content')
<br>
<h2>Welcome to your profile :</h2>
<h3>{{$name}}</h3>
<h3>{{$id}}</h3>
<h3>{{$dob}}</h3>

<ul>
@foreach($names as $n)
    <li><h4>{{$n}}</h4></li>
@endforeach
</ul>
@endsection
