<form action="/check-signin" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="repass" placeholder="Repeat Password" required>
    <input type="text" name="mssv" placeholder="MSSV" required>
    <input type="text" name="lopmonhoc" placeholder="Lớp môn học">
    <select name="gioitinh">
        <option value="nam">Nam</option>
        <option value="nu">Nữ</option>
    </select>
    <button type="submit">Sign In</button>
</form>