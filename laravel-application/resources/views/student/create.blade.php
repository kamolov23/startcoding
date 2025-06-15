@extends('layouts.app')
@section('content')
    <h1>Add New Student</h1>
    @if($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach($errors->all() as $error)
<li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" style="width: 47vh;" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" name="surname" id="surname" class="form-control" style="width: 47vh;" value="{{old('surname')}}">
        </div>
<div class="form-group">
<label for="date_of_birth">Date_of_birth</label>
<input type="date" name="date_of_birth" id="date_of_birth" class="form-control" style="width: 47vh;" value="{{old('date_of_birth')}}">
</div>
        <div class="form-group">
           <label for="class">Class:</label>
        <input type="text" name="class" id="class" class="form-control" style="width: 47vh;" value="{{old('class')}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
         <input type="text" name="phone" id="phone" class="form-control" style="width: 47vh;" value="{{old('phone')}}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" style="width: 47vh;" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" style="width: 47vh;" value="{{old('address')}}">
        </div>
        <div class="form-group">
            <label for="teacher">Teacher</label>
        <input type="text" name="teacher" id="teacher" class="form-control" style="width: 47vh;" value="{{old('teacher')}}">
        </div>
        <button type="submit" class="btn btn-success mt-3" style="width: 17vh;margin-left: 45vh;">
            Save
        </button>
    </form>
@endsection
