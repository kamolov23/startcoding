@extends('layouts3.app')

@section('content')

    <h1>Add New Book</h1>
    @if($errors->any())
<div class="alert alert-danger">
     <ul>
         @foreach($errors->all() as $error)
             <li>{{$error}}</li>
         @endforeach
     </ul>
</div>
    @endif
    <form action="{{route('books.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" id="title" class="form-control" style="width: 47vh;" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label>Language_id</label>
            <input type="number" name="language_id" id="language_id" class="form-control" style="width: 47vh;" value="{{old('language_id')}}">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" id="author" class="form-control" style="width: 47vh;" value="{{old('author')}}">
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="date" name="year" id="year" class="form-control" style="width: 47vh;" value="{{old('year')}}">
        </div>
        <div class="form-group">
            <label>Img</label>
            <input type="text" name="img" id="img" class="form-control" style="width: 47vh;" value="{{old('img')}}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" id="description" class="form-control" style="width: 47vh;" value="{{old('description')}}">
        </div>
        <button type="submit" class="btn btn-secondary mt-3">
            Save
        </button>
    </form>
@endsection
