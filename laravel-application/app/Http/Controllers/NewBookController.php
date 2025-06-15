<?php

namespace App\Http\Controllers;

use App\Models\NewBook;
use Illuminate\Http\Request;

class NewBookController extends Controller
{
    public function index() {
        $books = NewBook::with('category','language')->get();
        return view('books.index', compact('books'));
    }

    public function destroy(NewBook $newBook) {
        dd($newBook);
        $newBook->delete();
    }
}
