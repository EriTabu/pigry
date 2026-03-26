<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PigryController extends Controller
{
    // 登録画面表示
    public function register()
    {
        return view('auth.register');
    }

    // 登録処理
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'お名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '正しいメールアドレスを入力してください',
            'email.unique' => 'このメールアドレスは既に登録されています',
            'password.required' => 'パスワードを入力してください',
            'password.min' => 'パスワードは8文字以上で入力してください',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect('/weight/create');
    }

    // ログイン画面
    public function loginForm()
    {
        return view('auth.login');
    }

    // ログイン処理（←ここ修正）
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式が正しくありません',
            'password.required' => 'パスワードを入力してください',
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'ログイン情報が正しくありません'
        ]);
    }

    // ログアウト
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}