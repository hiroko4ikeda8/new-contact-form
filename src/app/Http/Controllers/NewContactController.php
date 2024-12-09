<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class NewContactController extends Controller
{
    //入力ページ
    public function index()
    {
        return view('index');
    }

    //確認ページ
    public function confirm(ContactRequest $request)
    {

        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'address', 'building', 'inquiry_type', 'content']);

        $tel = $request->input('tel1') . '-' . $request->input('tel2') . '-' . $request->input('tel3');

        $contact['tel'] = $tel;

        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email',  'address', 'building', 'inquiry_type', 'content']);

        $tel = $request->input('tel1') . '-' . $request->input('tel2') . '-' . $request->input('tel3');

        $contact['tel'] = $tel;

        Contact::create($contact);

        return
        redirect()->route('thanks');
    }


    public function thanks()
    {
        return view('thanks');
    }

    public function admin()
    {
        $contacts = Contact::select('last_name', 'first_name', 'gender', 'email',  'inquiry_type')->get();

        return view('admin', compact('contacts'));
    }

}
