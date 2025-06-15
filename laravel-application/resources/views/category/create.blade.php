@extends('layouts1.app')
@section('content')

    <h1>Add New Category</h1>
    @if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
    @endif
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" style="width: 47vh;" value="{{old('name')}}">
        </div>
        <button type="submit" class="btn btn-secondary mt-3">
            Save
        </button>
    </form>
@endsection
