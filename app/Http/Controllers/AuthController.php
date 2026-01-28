<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Trả về view SignIn
    public function SignIn() {
        return view('auth.signin');
    }

    // Kiểm tra dữ liệu từ form gửi lên
    public function CheckSignIn(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        $repass = $request->input('repass');
        $mssv = $request->input('mssv');

        // Logic kiểm tra: password khớp và đúng thông tin sinh viên mẫu
        if ($password === $repass && $username === 'Hieulx' && $mssv === '26867') {
            return "Đăng ký thành công!";
        } else {
            return "Đăng ký thất bại";
        }
    }
}
