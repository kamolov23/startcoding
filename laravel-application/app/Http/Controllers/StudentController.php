<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
       $students = Student::all();
       return view('student.index',compact('students'));
    }
public function create()
    {
return view('student.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'date_of_birth' => 'required',
            'class' => 'required|max:10',
            'phone' => 'required|min:10',
            'email' => 'required|email|unique:students,email',
            'address' => 'required|min:10',
            'teacher' => 'required|max:235'
        ]) ;
    Student::create($validated);
    return redirect()->route('student.index');
    }
    public function edit(Student $students)
    {
return view('student.edit',compact('students'));
    }
    public function update(Request $request,Student $students)
    {
$students->update($request->all());
return redirect()->route('student.index')->with('success','Student updated successfully.');
    }
    public function destroy(Student $students)
    {
   $students->delete();
   return redirect()->route('student.index')->with('success','Student deleted successfully.');
    }
}
