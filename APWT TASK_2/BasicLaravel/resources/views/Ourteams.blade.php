@extends('layouts.app')
@section('content')
<br>
<ul>
@foreach($names as $n)
    <li><h3>{{$n}}</h3></li>
@endforeach
</ul>
@endsection