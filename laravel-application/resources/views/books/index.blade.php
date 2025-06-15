@extends('layouts3.app')

@section('content')
            <table class="table table-striped">
                <thead>
                <tr>
                    <th >#</th>
                    <th>Title</th>
                    <th>Category_id</th>
                    <th>Language_id</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Img</th>
                    <th>Description</th>
                </tr>
                </thead>

                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td> {{$loop->iteration}}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->category->name}}</td>
                        <td>{{$book->language->name}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->year}}</td>
                        <td>{{$book->img}}</td>
                        <td>{{$book->description}}</td>
                        <td>
                            <a href="{{route('books.edit',$book)}}" class="btn btn-warning btn-sm">Edit</a></td>
                        <td>
                            <form action="{{route('books.destroy',$book)}}" style="display: inline-block;" method="post">
                                @csrf
                                @method('DELETE')
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
