<form action="" method="POST">
    @csrf
    <div>
        <label for="">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="">Mật khẩu mới</label>
        <input type="password" name="password" id="">
    </div>
    <div>
        <label for="">Nhập lại</label>
        <input type="password" name="password_confirmation" id="">
    </div>
    <div>
        <button type="submit">Xác nhận</button>
    </div>
</form>