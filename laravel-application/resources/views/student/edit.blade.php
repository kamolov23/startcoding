@extends('layouts.app')
@section('content')
    <h1>Edit Student</h1>
    @if($errors->any())
        <div class="alert alert-info">
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
 </div>
    @endif
    <form action="{{route('student.update',$students)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
<label for="name">Name:</label>
<input type="text" name="name" id="name" class="form-control" value="{{old('name',$students->name)}}">
        </div>
        <div class="form-group">
            <label for="surname">Surname:</label>
        <input type="text" name="surname" id="surname" class="form-control" value="{{old('surname',$students->surname)}}">
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date_of_birth:</label>
        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{old('date_of_birth',$students->date_of_birth)}}">
        </div>
        <div class="form-group">
            <label for="class">Class:</label>
        <input type="text" name="class" id="class" class="form-control" value="{{old('class',$students->class)}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone',$students->phone)}}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{old('email',$students->email)}}">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
        <input type="text" name="address" id="address" class="form-control" value="{{old('address',$students->address)}}">
        </div>
        <div class="form-group">
            <label for="teacher">Teacher:</label>
        <input type="text" name="teacher" id="teacher" class="form-control" value="{{old('teacher',$students->teacher)}}">
        </div>
<button type="submit" class="btn btn-warning mt-3">
    Update
</button>
    </form>
@endsection
