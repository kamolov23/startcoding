@extends('layouts.app')
@section('content')
    <h1>Contact list</h1>
    <a href="{{route('contacts.create')}}" class="btn btn-primary mb-3">Add Contact</a>
   @if(session('success'))
       <div class="alert alert-success">{{session('success')}}
       </div>
   @endif
    <table class="table">
        <thead>
             <tr>
                 <th>Name</th>
                 <th>Phone</th>
                 <th>Email</th>
                 <th>Actions</th>
             </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>
                        <a href="{{route('contacts.edit',$contact)}}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{route('contacts.destroy',$contact)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
