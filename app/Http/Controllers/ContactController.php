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
        $contacts=Contact::get();
        return view('adminpanel.contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('adminpanel.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'contact' => 'required',
        //     'website' => 'required',
        //     'content' => 'required',

        // ]);

        // $contact = new Contact();
        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->contact = $request->contact;
        // $contact->website = $request->website;
        // $contact->content = $request->content;


        // $contact->save();
        // return redirect()->back();
        //return redirect()->route('footer_setting_index')->with('success', 'You have successfully added user!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contacts = Contact::find($id);
        return view('adminpanel.contact.edit',compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $contacts_id=$request->contacts_id;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'website' => 'required',
            'content' => 'required',

        ]);
        Contact::findOrFail($contacts_id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'website'=>$request->website,
            'content'=>$request->content,

        ]);
        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteContact(string $id)
    {

        $contact = Contact::find($id);

        if(!$contact){
            abort(404);
        }

        $contact->delete();

        return  redirect()->route('contact.index')->with('message','Contact Deleted Successfully');


    }
}
