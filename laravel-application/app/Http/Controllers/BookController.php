<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::with('language')->get();
        return view('books.index',compact('books'));
    }

    public function create()
    {
        $languages = Language::all();
    return view('books.create',compact('languages'));
    }

    public function store(Request $request)
    {
     $validated = $request->validate([
        'title' => 'required|max:100',
         'language_id' => 'required|exists:languages,id',
         'author' => 'required|max:200',
         'year' => 'required',
         'img' => 'required',
         'description' => 'max:500',
     ]);
     Book::create($validated);
     return redirect()->route('books.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('books.index')->with('success','Book updated successfully');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
