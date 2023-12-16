                    <div class="row mb-5">
                        <div class="container">
                            <div class="col-md-6 m-auto">
                                <h2 class="my-3">Thông tin tài khoản</h2>
                                <?php if(isset($_SESSION['thongbao'])): ?>
                                    <div class="alert alert-success my-3" role="alert">
                                        <?=$_SESSION['thongbao'];?>
                                    </div>
                                <?php endif; unset($_SESSION['thongbao']);?>
                                <?php if(isset($_SESSION['loi'])): ?>
                                    <div class="alert alert-danger my-3" role="alert">
                                        <?=$_SESSION['loi'];?>
                                    </div>
                                <?php endif; unset($_SESSION['loi']);?>
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="SoDienThoai">Số điện thoại</label>
                                        <input type="text" class="form-control" name="SoDienThoai" id="SoDienThoai" value="<?=$tk['SoDienThoai']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="HoTen">Họ tên</label>
                                        <input type="text" class="form-control" name="HoTen" id="HoTen" value="<?=$tk['HoTen']?>">
                                    </div>
                                    <div class="mb-3">
                                        <span for="Email">Email</span>
                                        <input type="text" class="form-control" name="Email" id="Email" value="<?=$tk['Email']?>">
                                    </div>
                                    
                                    <button name="submit" type="submit" class="btn btn-success">Sửa tài khoản</button> | <a href="<?=$base_url?>user/changePass" style="color: #3D7CEA;">Đổi mật khẩu</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    