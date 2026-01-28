<form action="/save-age" method="POST">
    @csrf
    <input type="text" name="age" placeholder="Nhập tuổi của bạn">
    <button type="submit">Lưu tuổi</button>
</form>