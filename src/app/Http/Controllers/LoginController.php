<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin');
    }

        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->withInput();
    }

}