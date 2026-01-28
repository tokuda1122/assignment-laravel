<?php

use Illuminate\Support\Facades\Route;

// 1. Trả về view home
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Gom nhóm "/product"
Route::prefix('product')->group(function () {
    Route::get("/", [ProductController::class, "index"]);
    
    // Trả về view product.index
    Route::get('/', function () {
        return view('product.index');
    })->name('product.index');

    // Trả về view product.add
    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    // Route với {id} kiểu chuỗi, giá trị mặc định 123
    Route::get('/{id?}', function ($id = '123') {
        return "Chi tiết sản phẩm với ID: " . $id;
    })->where('id', '[A-Za-z0-9]+'); 
});

// 3. Thông tin sinh viên với giá trị mặc định
Route::get('/sinhvien/{name?}/{mssv?}', function ($name = "Hoang Duc Luan", $mssv = "0060567") {
    return "Thông tin sinh viên: " . $name . " - MSSV: " . $mssv;
})->name('sinhvien.info');

// 4. Bàn cờ vua kích thước n*n
Route::get('/banco/{n}', function ($n) {
    return view('banco', ['n' => $n]);
})->name('banco.show');

// 5. Xử lý lỗi 404 (Fallback) khi không tìm thấy route
Route::fallback(function () {
    return view('error.404');
});
// 6/ sử dụng controller
use App\Http\Controllers\LogginController;

// Route hiển thị trang login
Route::get('/login', [LogginController::class, 'index'])->name('login');

// Route xử lý dữ liệu form gửi lên
Route::post('/login', [LogginController::class, 'login']);


use App\Http\Controllers\AuthController;

// Commit 1
Route::get('/signin', [AuthController::class, 'SignIn']);
Route::post('/check-signin', [AuthController::class, 'CheckSignIn']);

// Commit 2
Route::get('/input-age', function () {
    return view('input-age');
});

Route::post('/save-age', function (Illuminate\Http\Request $request) {
    session(['user_age' => $request->age]); // Lưu tuổi vào session
    return "Đã lưu tuổi. Hãy thử truy cập trang bảo vệ.";
});

// Trang yêu cầu Middleware kiểm tra tuổi
Route::get('/protected-content', function () {
    return "Chúc mừng! Bạn đủ tuổi để xem nội dung này.";
})->middleware(CheckAge::class);