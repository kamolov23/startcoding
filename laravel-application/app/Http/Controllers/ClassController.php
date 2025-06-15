<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
       $class = Clas::all();
       return view('class.index',compact('class'));
    }
public function create()
    {
     return view('class.create');
    }
    public function store(Request $request)
    {
    $validated = $request->validate([
      'class' => 'required|max:2',
        'alpha' => 'required|max:1'
    ]);
    Clas::create($validated);
    return redirect()->route('class.index');
    }
    public function edit(Clas $class)
    {
    return view('class.edit',compact('class'));
    }
    public function update(Request $request,Clas $class)
    {
     $validated = $request->validate([
        'class' =>  'required|max:2',
         'alpha' => 'required|max:1'
     ]);
     $class->update($validated);
    }
    public function destroy(Clas $class)
    {
    $class->delete();
    return redirect()->route('class.index')->with('success','Class deleted successfully');
    }
}
