@extends('layouts.app')
@section('content')
<br>
<h3>{{$p1}}</h3>
<ul>
@foreach($info1 as $n1)
    <li><h4>{{$n1}}</h4></li>
@endforeach
</ul>

<h3>{{$p2}}</h3>
<ul>
@foreach($info2 as $n2)
    <li><h4>{{$n2}}</h4></li>
@endforeach
</ul>

<h3>{{$p3}}</h3>
<ul>
@foreach($info3 as $n3)
    <li><h4>{{$n3}}</h4></li>
@endforeach
</ul>

<h3>{{$p4}}</h3>
<ul>
@foreach($info4 as $n4)
    <li><h4>{{$n4}}</h4></li>
@endforeach
</ul>

@endsection