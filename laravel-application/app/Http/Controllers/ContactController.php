<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
     $contacts = Contact::all();
     return view('contacts.index', compact('contacts'));
    }
    public function create()
    {
    return view('contacts.create');
    }
    public function store(Request $request)
    {
    Contact::create($request->all());
    return redirect()->route('contacts.index');
    }
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request,Contact $contact)
    {
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('success','Contact updated successfully.');

    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success','Contact deleted successfully.');
    }
}
