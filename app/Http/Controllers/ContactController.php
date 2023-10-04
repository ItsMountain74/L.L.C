<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('dash.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:3',
        ]);
        try {
            Contact::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'message' => $validated['message'],
            ]);

            return redirect()->route('index')->with('success', 'Message Sent !');
        } catch (Exception $e) {
            return dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return view('dash.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id)->delete();

        return redirect()->route('contact.index')->with('success', 'Message Deleted!');
    }
}
