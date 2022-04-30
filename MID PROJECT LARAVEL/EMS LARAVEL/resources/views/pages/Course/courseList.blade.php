@extends('layouts.app')
@section('content')
<br><h2>Course Details</h2>
    <table class="table table-border">
        <tr>
            <th>Course Name</th>
            <th>Course Code</th>
            <th>Student ID</th>
         
        </tr>
        
        @foreach($courses as $course)
        <tr>
            <td><a href="student/courses/{{$course->id}}">{{$course->c_name}}</a></td>
            <td>{{$course->c_name}}</td>

            <td>{{$course->code}}</td>
            <td>{{$course->studentid}}</td>
            

        </tr>
        @endforeach
        
    </table>
@endsection