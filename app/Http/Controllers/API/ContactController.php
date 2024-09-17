<?php

namespace App\Http\Controllers\API;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */


public function index() {
    return Contact::all();
}

public function store(Request $request) {
    $contact = Contact::create($request->all());
    return response()->json($contact, 201);
}

public function show($id) {
    return Contact::find($id);
}

public function update(Request $request, $id) {
    $contact = Contact::findOrFail($id);
    $contact->update($request->all());
    return response()->json($contact, 200);
}

public function destroy($id) {
    Contact::destroy($id);
    return response()->json(null, 204);
}

}
