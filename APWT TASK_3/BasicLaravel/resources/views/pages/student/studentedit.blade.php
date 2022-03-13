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
        <span>ID</span>
        <input type="text" name="id" value="{{$student->id}}" class="form-control" readonly>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{$student->name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Student Id</span>
        <input type="text" name="student_id" value="{{$student->student_id}}"class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{$student->email}}" class="form-control">
    </div>

    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{$student->password}}" class="form-control">
    </div>
    
    <input type="submit" class="btn btn-success" value="Edit" >                  
</form>
@endsection