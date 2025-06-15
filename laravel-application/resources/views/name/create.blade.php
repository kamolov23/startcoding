@extends('layouts4.app')

@section('content')
    <h1>Add new User</h1>
@if($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif
    <form action="{{route('name.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
        </div>
        <div class="form-group">
<label>Surname</label>
            <input type="text" name="surname" id="surname" class="form-control" value="{{old('surname')}}">
        </div>
        <div>
<label>Login</label>
            <input type="text" name="login" id="login" class="form-control" value="{{old('login')}}">
        </div>
<div>
    <label>Password</label>
    <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}">
</div>
        <div>
            <label>E-mail</label>
            <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
        </div>
        <div>
            <label>Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone')}}">
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}">
        </div>
        <button type="submit" class="btn btn-secondary mt-3">
            Save
        </button>
    </form>
@endsection
