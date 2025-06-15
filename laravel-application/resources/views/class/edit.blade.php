@extends('layouts.app')
@section('content')
<h1>Edit Contact</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
               <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{route('class.update',$class)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
<label for="class">Class</label>
        <input type="text" name="class" id="class" class="form-control" style="width: 47vh;" value="{{old('class',$class->class)}}">
    </div>
    <div class="form-group">
        <label for="alpha">Alpha</label>
        <input type="text" name="alpha" id="alpha" class="form-control" style="width:47vh;" value="{{old('alpha',$class->alpha)}}">
    </div>
    <button type="submit" class="btn btn-warning mt-3">
Update
    </button>
</form>
@endsection
