<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index()
    {
        $names = Name::all();
        return view('name.index',compact('names'));
    }
    public function create()
    {
        return view('name.create');
    }
    public function store (Request $request)
    {
        $validated = $request->validate([
           'name' => 'required|max:255',
           'surname' => 'required|max:200',
           'login' => 'required|max:200',
           'password' => 'required|min:8',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'address' => 'required|min:3'
        ]);
            Name::create($validated);
            return redirect()->route('name.index');
    }
    public function edit(Name $name)
    {
return view('name.edit',compact('name'));
    }
    public function update(Request $request,Name $name)
    {
$name->update($request->all());
return redirect()->route('name.index')->with('success','Name updated successfully');
    }
    public function destroy(Name $name)
    {
        $name->delete();
        return redirect()->route('name.index')->with('success','Name deleted successfully');
    }
}
