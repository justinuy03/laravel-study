<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;

class ContactController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $companies = Company::orderBy('name')->pluck('name', 'id');
        $contacts = Contact::orderBy('first_name', 'asc')->paginate(10);
        return view('contacts.index', compact('contacts','companies'));
    }

    public function create(){
        return view('contacts.create');
    }

    public function show($id){

        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }
}
