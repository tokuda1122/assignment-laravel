<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogginController extends Controller
{
    public function index() {
        return view('login'); // Trả về file login.blade.php
    }

    public function login(Request $request) {
        // Đây là nơi xử lý logic đăng nhập sau này
        return "Bạn đang thực hiện đăng nhập với email: " . $request->input('email');
    }
}