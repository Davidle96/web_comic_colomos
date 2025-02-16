<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signIn(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/home');
        }

        return redirect('/')->withErrors(['login_error' => 'Invalid credentials']);
    }

    public function signUp(Request $request)
    {
        // Xử lý logic đăng ký ở đây
        // Ví dụ: Lưu thông tin người dùng vào cơ sở dữ liệu

        return redirect('/welcome'); // Chuyển hướng đến trang chào mừng sau khi đăng ký thành công
    }
}
