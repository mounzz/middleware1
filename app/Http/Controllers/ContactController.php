<?php

namespace App\Http\Controllers;

use App\Models\Sujets;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $sujets = Sujets::all();
        return view('contacts.form', compact('contacts','sujets'));
    }

    public function create()
    {
        $contacts = Contact::all();
        $sujets = Sujets::all();
        return view('contacts.form', compact('contacts','sujets'));
    }

    public function store(Request $request)
    {
        $contacts = new Contact;
        $contacts->sujets_id= $request->sujets_id;
        $contacts->email = $request->email;
        $contacts->message = $request->message;
        $contacts->save();
        $user = Auth::user();
        Mail::to($user->email)->send(new ContactMail($user));
        return redirect('contactpage');
    }
}
