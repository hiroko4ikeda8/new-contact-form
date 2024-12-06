<?php

namespace App\Http\Controllers;

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
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'inquiry_Type', 'contact']);



        return view('confirm', compact('contact'));
    }

    //完了ページ
    public function thanks()
    {
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
