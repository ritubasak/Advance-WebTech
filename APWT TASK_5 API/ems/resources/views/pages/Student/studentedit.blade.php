@extends('layouts.app')
@section('content')
<h2>Edit Student</h2>
<form action="{{route('studentedit')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{$student->name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{$student->phone}}"class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{$student->password}}" class="form-control">
    </div>
    
    <input type="submit" class="btn btn-success" value="Edit" >                  
</form>
@endsection