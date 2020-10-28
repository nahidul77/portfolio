<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index(){
        $contact = Contact::first();
        return view('back-end.pages.contact', ['contact'=>$contact]);
    }

    public function dataValidate($request){
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email',
            'phone'=> 'required|numeric|digits:11'
        ]);
    }

    public function save($contact, $request){
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->contact_head = $request->contact_head;
        $contact->address = $request->address;
        $contact->save();
    }

    public function store(Request $request){
        
        $this->dataValidate($request);
        $contact = new Contact();
        $this->save($contact, $request);
        return redirect('admin/contact')->with('success', 'Contact Information Stored Successfully');
    }

    public function update(Request $request){
        
        $this->dataValidate($request);
        $contact = Contact::first();
        $this->save($contact, $request);
        return redirect('admin/contact')->with('success', 'Contact Information Updated Successfully');
    }


}
