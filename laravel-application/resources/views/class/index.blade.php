@extends('layouts.app')
@section('content')
    <h1>Class list</h1>
    <a href="{{route('class.create')}}" class="btn btn-primary" >
        Add Class
    </a>
    @if(session('success'))
        <div class="alert alert-danger">
{{session('success')}}
        </div>
    @endif
<table class="table">
    <thead>
    <tr>
        <th>Class</th>
        <th>Alpha</th>
    </tr>
    </thead>
    <tbody>
    @foreach($class as $clas)
        <tr>
            <td>{{$clas->class}}</td>
            <td>{{$clas->alpha}}</td>
        <td>
            <a href="{{route('class.edit',$clas)}}" class="btn btn-success btn-sm" style="width:10vh;">Edit</a>
            <form action="{{route('class.destroy',$clas)}}" method="POST" style="display: inline-block">
               @csrf
                @method('Delete')
<button type="submit" class="btn btn-danger btn-sm">
Delete
</button>
  </form>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
