                    <h2 class="my-3">Thêm sản phẩm</h2>
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class=" mb-3">
                            <span for="TenSP">Tên sản phẩm</span>
                            <input type="text" class="form-control" name="TenSP" id="TenSP" placeholder="Tên sản phẩm">
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="Hinh" id="Hinh">
                            <label class="input-group-text" for="Hinh">Upload</label>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="MaLH">Loại hàng</label>
                            <select class="form-select" id="MaLH" name="MaLH">
                            <?php foreach ($LH as $lh):?>
                            <option value="<?=$lh['MaLH']?>"><?=$lh['TenLH']?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="DonGia" class="form-label">Đơn giá</label>
                            <input type="number" class="form-control" name="DonGia" id="DonGia">
                        </div>
                        <div class="mb-3">
                            <label for="GiaGiam" class="form-label">Giá giảm</label>
                            <input type="number" class="form-control" name="GiaGiam" id="GiaGiam" value="0">
                        </div>
                        <div class=" mb-3">
                            <span for="SoLuong">Số lượng</span>
                            <input type="number" class="form-control" name="SoLuong" id="SoLuong" value="0">
                        </div>
                        <button name="submit" type="submit" class="btn btn-success">Xác nhận</button>
                    </form>