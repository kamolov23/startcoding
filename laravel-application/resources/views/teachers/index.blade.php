@extends('layouts.app')
@section('content')
    <h1>Teacher List</h1>
    <a href="{{route('teachers.create')}}" class="btn btn-info mb-3">Add Teacher</a>
    @if(session('success'))
        <div class="alert alert-success">
        {{session('success')}}
        </div>
    @endif
<table class="table">
    <thead>
    <tr>
        <td style="color: red">Name</td>
        <td style="color: blue">Surname</td>
        <td style="color: purple;">Subject</td>
        <td style="color: green">Experience</td>
        <td style="color: red">Status</td>
        <td style="color: blue">Phone</td>
        <td style="color: purple">Email</td>
        <td style="color: green">Address</td>
    </tr>
    </thead>
    <tbody>
    @foreach($teachers as $teacher)
        <tr>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->surname}}</td>
            <td>{{$teacher->subject}}</td>
            <td>{{$teacher->experience}}</td>
            <td>{{$teacher->status}}</td>
            <td>{{$teacher->phone}}</td>
            <td>{{$teacher->email}}</td>
            <td>{{$teacher->address}}</td>
        <td>
            <a href="{{route('teachers.edit',$teacher)}}" class="btn btn-warning btn-sm" style="width: 9vh;">Edit</a>
        <form action="{{route('teachers.destroy',$teacher)}}" method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
