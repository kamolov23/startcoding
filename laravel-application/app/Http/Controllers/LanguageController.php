<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{

    public function index()
    {
        $languages = Language::all();
        return view('language.index', compact('languages'));
    }

    public function create()
    {
        return view('language.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
           'name' => 'required',
        ]);
        Language::create($request->all());
        return redirect()->route('language.index')->with('success', 'Language created successfully.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Language $language)
    {
        return view('language.edit',compact('language'));
    }

    public function update(Request $request, Language $language)
    {
        $language->update($request->all());
        return redirect()->route('language.index')->with('success','Language updated successfully');
    }

    public function destroy(Language $language)
    {
        $language->delete();
        return redirect()->route('language.index')->with('success','Language deleted successfully');
    }
}
