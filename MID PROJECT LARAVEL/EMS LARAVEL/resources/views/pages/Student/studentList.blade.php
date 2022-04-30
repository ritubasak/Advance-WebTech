@extends('layouts.app')
@section('content')
<br><h2>Student Profile</h2>
    <table class="table table-border">
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Edit Profile</th>
            <th>Delete Profile</th>
        </tr>
        
        @foreach($students as $student)
        <tr>
            <td><a href="student/courses/{{$student->id}}">{{$student->name}}</a></td>
            
            <td>{{$student->phone}}</td>
            <td><a href="/studentedit/{{$student->id}}/{{$student->name}}">Edit</a></td>
            <td><a href="/studentDelete/{{$student->id}}/{{$student->name}}">delete</a></td>


        </tr>
        @endforeach
        
    </table>
@endsection