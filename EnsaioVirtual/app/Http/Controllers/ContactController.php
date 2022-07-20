<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function __construct ( contact $contact)
    {
        $this->model = $contact;
    }
    
    public function index()
    {
        return view('contact.index'); 
    }

    public function store(ContactRequest $request)
    {
        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->tel = $request->tel;
        $contact->messageClient = $request->messageClient;
        $contact->save();

        return redirect()->route('contact.index')->with('edit', 'Obrigado pelo contato!! 😁');
    }

}
