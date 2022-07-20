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
        $contact->read = $request->read;
        $contact->answered = $request->answered;
        $contact->save();

        return redirect()->route('contact.index')->with('edit', 'Obrigado pelo contato!! 😁');
    }
    
    public function show()
    {
        $contact = Contact::paginate(5);

        return view('contact.show', compact('contact'));
    }

}
