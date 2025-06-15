@extends('layouts.app')
@section('content')
    <h1>Add New Contact</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('contacts.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" style="width: 37vh;" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" class="form-control" style="width: 37vh;" value="{{old('phone')}}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" style="width: 37vh;" value="{{old('email')}}">
        </div>
        <button type="submit" class="btn btn-primary mt-3" style="margin-left: 37vh;width: 17vh;">Save</button>
    </form>
@endsection
