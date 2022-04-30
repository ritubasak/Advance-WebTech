@extends('layouts.app')
@section('content')

<br>
<form action="{{route('login')}}" method="post">

	{{@csrf_field()}}
	<!-- <input type="text" name="phone" placeholder="Phone"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="checkbox" name="remember"> Remember Me<br>
	<input type="submit" name="" value="Login"> -->
	
	<h2>Login Here!</h2><br>
    <div class="col-md-4 form-group">
        <span>Phone</span>Z
        <input type="text" name="phone" value="{{old('phone')}}"class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
   
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

	<input type="checkbox" name="remember"> Remember Me<br>



    <input type="submit" class="btn btn-danger" value="Log In" >                  
</form>

@endsection 


