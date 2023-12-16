
<div class="row mb-5">
    <div class="container">
        <div class="col-md-6 m-auto ">
            <div class="alert alert-success text-center" role="alert">
                <h2>ĐỔI MẬT KHẨU</h2>
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
                <div class="mb-3">
                    <label for="MatKhauCu" class="form-label">Mật khẩu cũ</label>
                    <input type="password" name="MatKhauCu" class="form-control" id="MatKhauCu">
                </div>
                <div class="mb-3">
                    <label for="MatKhauMoi" class="form-label">Mật khẩu mới</label>
                    <input type="password" name="MatKhauMoi" class="form-control" id="MatKhauMoi">
                </div>
                <div class="mb-3">
                    <label for="NhapLai" class="form-label">Nhập lại mật khẩu</label>
                    <input type="password" name="NhapLai" class="form-control" id="NhapLai">
                </div>
                <button type="submit" class="btn btn-success">Đổi mật khẩu</button>
            </form>
        </div>
    </div>
</div>