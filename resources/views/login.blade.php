<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h1>Trang Đăng Nhập</h1>
    <form action="/login" method="POST">
        @csrf <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Mật khẩu:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Đăng nhập</button>
    </form>
    <br>
    <a href="{{ route('home') }}">Quay lại trang chủ</a>
</body>
</html>