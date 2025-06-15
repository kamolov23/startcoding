@extends('layouts3.app')

@section('content')

    <h1>Edit Book</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('books.update',$book)}}" method="post" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" id="title" class="form-control" style="width: 47vh;" value="{{old('title',$book->title)}}">
        </div>
        <div class="form-group">
            <label>Language_id</label>
            <input type="number" name="language_id" id="language_id" class="form-control" style="width: 47vh;" value="{{old('language_id',$book->language_id)}}">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" id="author" class="form-control" style="width: 47vh;" value="{{old('author',$book->author)}}">
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="date" name="year" id="year" class="form-control" style="width: 47vh;" value="{{old('year',$book->year)}}">
        </div>
        <div class="form-group">
            <label>Img</label>
            <input type="text" name="img" id="img" class="form-control" style="width: 47vh;" value="{{old('img',$book->img)}}">
        </div>
        <div class="form-group">
             <label>Description</label>
            <input type="text" name="description" id="description" class="form-control" style="width: 47vh;" value="{{old('description',$book->description)}}">
        </div>
        <button type="submit" class="btn btn-warning mt-3">
            Update
        </button>
    </form>
@endsection
