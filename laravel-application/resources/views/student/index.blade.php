@extends('layouts.app')
@section('content')
    <h1>Student list</h1>
<a href="{{route('student.create')}}" class="btn btn-secondary mb-3" >Add Student</a>
    @if(session('success'))
        <div class="alert alert-danger">
{{session('success')}}
        </div>
    @endif
<table class="table">
    <thead>
    <tr>
        <td>Name</td>
        <td>Surname</td>
        <td>Date_of_birth</td>
        <td>Class</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Address</td>
        <td>Teacher</td>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->surname}}</td>
            <td>{{$student->date_of_birth}}</td>
            <td>{{$student->class}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->teacher}}</td>
        <td>
        <a href="{{route('student.edit',$student)}}" class="btn btn-dark btn-sm">Edit</a>
            <form action="{{route('student.destroy',$student)}}" method="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                       Delete
                    </button>
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
