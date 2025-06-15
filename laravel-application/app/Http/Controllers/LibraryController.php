<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libraries = Library::all();
        return view('library.index',compact('libraries'));

    }
    public function create()
    {
    return view('library.create');
    }
    public function store(Request $request)
    {
    $validated = $request->validate([
       'name' => 'required|max:255',
       'place' => 'required|max:250',
       'type' => 'required|max:250',
       'owner' => 'required|max:200',
       'librarian' => 'required|max:255',
    ]);
    Library::create($validated);
    return redirect()->route('library.index');
     }
    public function edit(Library $library)
    {
return view('Library.edit',compact('library'));
    }
    public function update(Request $request, Library $library)
    {
     $library->update($request->all());
     return redirect()->route('library.index')->with('success','library updated successfully');
    }
    public function destroy(Library $library)
    {
    $library->delete();
    return redirect()->route('library.index')->with('success','library deleted successfully');
    }
}
