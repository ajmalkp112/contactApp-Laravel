<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $contacts = Contact::query()->orderBy('name', 'asc')->paginate(16);
      return view('Contacts.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('Contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => ['required', 'string'],
        'phone' => ['required', 'string']
      ]); 

      Contact::create($request->all());

      return to_route('contacts.index')->with('message','New Contact was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
      return view('Contacts.show', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
      return view('Contacts.edit', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
      $request->validate([
        'name' => ['required', 'string'],
        'phone' => ['required', 'string']
      ]); 

      $contact->update($request->all());

      return to_route('contacts.index')->with('message',$contact->name.'\'s contact was Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
      $contact->delete();

      return to_route('contacts.index')->with('message',$contact->name.'\'s contact was Deleted');
    }
}
