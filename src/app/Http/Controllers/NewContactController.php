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
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'inquiry_type', 'content']);

        return view('confirm', compact('contact'));
    }

    //完了ページ
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'inquiry_type', 'content']);
        Contact::create($contact);

        return view('thanks');
    }

    //管理画面
    public function admin()
    {
        return view('admin');
    }

    //登録画面
    public function registar()
    {
        return view('registar');
    }

    //ログイン画面
    public function login()
    {
        return view('login');
    }
}
