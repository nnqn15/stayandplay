
<div class="row mb-5">
    <div class="container">
        <div class="col-md-6 m-auto ">
            <div class="alert alert-success text-center" role="alert">
                <h2>QUÊN MẬT KHẨU</h2>
            </div>
            <?php if(isset($_SESSION['loi'])): ?>
                <div class="alert alert-danger my-3" role="alert">
                    <?=$_SESSION['loi'];?>
                </div>
            <?php endif; unset($_SESSION['loi']);?>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                    <input type="text" name="SoDienThoai" class="form-control" id="exampleInputEmail1">
                </div>
                <button type="submit" class="btn btn-success">Tìm lại mật khẩu</button>
            </form>
        </div>
    </div>
    
    
</div>
