@extends('layouts.app')
@section('content')

<br>
<h3><b>Contact Info !</b></h3>
<form action="{{route('contact')}}" class='form-group' method="post">
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
        <span>Mobile Number</span>
        <input type="text" name="mobile" value="{{old('mobile')}}" class="form-control">
        @error('mobile')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Facebook Link</span>
        <input type="text" name="fb" value="{{old('fb')}}"class="form-control">
        @error('fb')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <input type="submit" class="btn btn-info" value="Submit">

</form>

@endsection