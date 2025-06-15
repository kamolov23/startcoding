@extends('layouts1.app')
@section('content')

    <h1>Edit Category</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('category.update',$category)}}" method="post" >
        @csrf
        @method('PUT')

            <div class="form-group">
                <label>Name</label>
           <input type="text" name="name" id="name" class="form-control" style="width: 47vh;" value="{{old('name',$category->name)}}">
            </div>
            <button type="submit" class="btn btn-warning">
                Update
            </button>
        </form>
@endsection
