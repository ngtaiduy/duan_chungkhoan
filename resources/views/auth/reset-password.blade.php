<form action="" method="POST">
    @csrf
    <div>
        <label for="">Mật khẩu mới</label>
        <input type="password" name="password" id="">
    </div>
    <div>
        <label for="">Nhập lại</label>
        <input type="password" name="password_confirmation" id="">
    </div>
    <div>
        <button type="submit">Xác nhạn</button>
    </div>
</form>