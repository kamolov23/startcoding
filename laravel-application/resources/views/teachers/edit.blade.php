@extends('layouts.app')
@section('content')
    <h1>Edit Teacher</h1>
@if($errors->any())
    <div class="alert alert-danger">
<ul>
    @foreach($errors->all as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
    </div>
@endif
    <form action="{{route('teachers.update',$teacher)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
<label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name',$teacher->name)}}">
        </div>
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" name="surname" id="surname" class="form-control" value="{{old('surname',$teacher->surname)}}">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" value="{{old('subject',$teacher->subject)}}">
        </div>
        <div class="form-group">
            <label for="experience">Experience</label>
            <input type="text" name="experience" id="experience" class="form-control" value="{{old('experience',$teacher->experience)}}">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="{{old('status',$teacher->status)}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone',$teacher->phone)}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{old('email',$teacher->email)}}" >
        </div>
        <div>
            <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" value="{{old('address',$teacher->address)}}">
        </div>
        <button type="submit" class="btn btn-warning mt-3">
         Update
        </button>
    </form>
@endsection
