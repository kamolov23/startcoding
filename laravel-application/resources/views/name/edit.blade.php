@extends('layouts4.app')
@section('content')
    <h1>Edit User</h1>
    @if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
    @endif
    <form action="{{route('name.update',$name)}}" method="post" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name',$name->name)}}">
        </div>
        <div class="form-group">
            <label>Surname</label>
            <input type="text" name="surname" id="surname" class="form-control" value="{{old('surname',$name->surname)}}">
        </div>
        <div class="form-group">
            <label>Login</label>
            <input type="text" name="login" id="login" class="form-control" value="{{old('login',$name->login)}}">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" value="{{old('password',$name->password)}}">
        </div>
        <div class="from-group">
            <label>E-mail</label>
            <input type="text" name="email" id="email" class="form-control" value="{{old('email',$name->email)}}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone',$name->phone)}}">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{old('address',$name->address)}}">
        </div>
        <button type="submit" class="bnt btn-warning mt-3">
            Update
        </button>
    </form>

@endsection
