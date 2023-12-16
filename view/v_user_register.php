
<div class="row mb-5">
    <div class="container">
        <div class="col-md-6 m-auto ">
            <div class="alert alert-success text-center" role="alert">
                <h2>ĐĂNG KÝ</h2>
            </div>
            <?php if(isset($_SESSION['loi'])): ?>
                <div class="alert alert-danger my-3" role="alert">
                    <?=$_SESSION['loi'];?>
                </div>
            <?php endif; unset($_SESSION['loi']);?>
            <?php if(isset($_SESSION['thongbao'])): ?>
                <div class="alert alert-success my-3" role="alert">
                    <?=$_SESSION['thongbao'];?>
                </div>
            <?php endif; unset($_SESSION['thongbao']);?>
            <form method="post" action="">
            <div class=" mb-3">
                <span for="SoDienThoai">Số điện thoại</span>
                <input type="text" class="form-control" name="SoDienThoai" id="SoDienThoai" placeholder="Số điện thoại">
            </div>
            <div class=" mb-3">
                <span for="MatKhau">Mật khẩu</span>
                <input type="text" class="form-control" name="MatKhau" id="MatKhau" placeholder="Mật khẩu">
            </div>
            <div class=" mb-3">
                <span for="HoTen">Họ tên</span>
                <input type="text" class="form-control" name="HoTen" id="HoTen" placeholder="Họ tên">
            </div>
            <div class="mb-3">
                <span for="Email">Email</span>
                <input type="email" class="form-control" name="Email" id="Email" placeholder="Email">
            </div>
                <button type="submit" name="submit" class="btn btn-success">Đăng ký</button> Bạn đã có tài khoản? <a href="<?=$base_url?>user/login" style="color: #3D7CEA;">Đăng nhập</a>
            </form>
        </div>
    </div>
    
    
</div>
