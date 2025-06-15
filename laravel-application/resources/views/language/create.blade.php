@extends('layouts2.app')

@section('content')

    <h1>Add New Language</h1>
    @if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
    @endif
<form action="{{route('language.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
    </div>
    <button type="submit" class="btn btn-secondary">
        Save
    </button>
</form>
@endsection
