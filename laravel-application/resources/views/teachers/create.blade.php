@extends('layouts.app')
@section('content')
    <h1>Add New Teacher</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('teachers.store')}}" method="POST">
@csrf
        <div class="form-group">
<label for="name">Name:</label>
         <input type="text" name="name" id="name" class="form-control" style="width: 47vh;" value="{{old('name')}}">
        </div>
        <div class="form-group">
<label for="surname">Surname</label>
            <input type="text" name="surname" id="surname" class="form-control" style="width: 47vh;" value="{{old('surname')}}">
        </div>
        <div>
 <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" class="form-control" style="width: 47vh;" value="{{old('subject')}}">
        </div>
   <div>
       <label for="experience">Experience</label>
       <input type="text" name="experience" id="experience" class="form-control" style="width: 47vh;" value="{{old('experience')}}">
   </div>
        <div>
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" style="width: 47vh;" value="{{old('status')}}">
        </div>
<div>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" class="form-control" style="width: 47vh;" value="{{old('phone')}}">
</div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" style="width: 47vh;" value="{{old('email')}}">
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" style="width: 47vh;" value="{{old('address')}}">
        </div>
<button type="submit" class="btn btn-success" style="margin-top:5vh;margin-left: 57vh;width: 17vh;">
    Save
</button>
    </form>
@endsection
