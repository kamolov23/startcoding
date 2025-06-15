@extends('layouts.app')
@section('content')
    <h1>Add New Class</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('class.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="class">Class</label>
            <input type="text" name="class" id="class" class="form-control" style="width: 47vh;" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="alpha">Alpha</label>
            <input type="text" name="alpha" id="alpha" class="form-control" style="width: 47vh;" value="{{old('alpha')}}">
        </div>
        <button type="submit" class="btn btn-warning mt-3">
            Save
        </button>
    </form>
@endsection

