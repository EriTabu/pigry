<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PigryController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect('/weight/create');
    }
    public function loginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only('email','password');

    if(Auth::attempt($credentials)){
        return redirect('/dashboard');
    }

    return back()->with('error','ログイン情報が正しくありません');
}

public function logout()
{
    Auth::logout();
    return redirect('/login');
    // ユーザー保存処理

    return redirect('/login');
}
}