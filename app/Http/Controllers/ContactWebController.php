<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactWebController extends Controller
{
   

public function index() {
    $contacts = Contact::all();
    return view('contacts.index', compact('contacts'));
}

public function create() {
    return view('contacts.create');
}

public function store(Request $request) {
    Contact::create($request->all());
    return redirect()->route('contacts.index');
}
public function destroy($id) {
    $contact = Contact::findOrFail($id);
    $contact->delete();
    return redirect()->route('contacts.index')->with('success', 'Contact supprimé avec succès');
}
public function edit($id) {
    $contact = Contact::findOrFail($id);
    return view('contacts.edit', compact('contact'));
}
public function update(Request $request, $id) {
    $contact = Contact::findOrFail($id);
    $contact->update($request->all());
    return redirect()->route('contacts.index')->with('success', 'Contact mis à jour avec succès');
}


}
