                    <h2 class="my-3">Sửa sản phẩm</h2>
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
                        <input type="hidden"name="Hinh" id="Hinh" value="<?=$SP['Hinh']?>">
                        <div class=" mb-3">
                            <span for="TenSP">Tên sản phẩm</span>
                            <input type="text" class="form-control" name="TenSP" id="TenSP" value="<?=$SP['TenSP']?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ảnh loại hàng</label><br>
                            <img src="<?php echo $base_url.$SP['Hinh']; ?>" alt="" width="80px">
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="upHinh" id="upHinh">
                            <label class="input-group-text" for="upHinh">Upload</label>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="MaLH">Loại hàng</label>
                            <select class="form-select" id="MaLH" name="MaLH">
                            <?php foreach ($LH as $lh):?>
                            <option value="<?=$lh['MaLH']?>" <?=($SP['MaLH']==$lh['MaLH'])?'selected':'' ?>><?=$lh['TenLH']?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="DonGia" class="form-label">Đơn giá</label>
                            <input type="number" class="form-control" name="DonGia" id="DonGia" value="<?=$SP['DonGia']?>">
                        </div>
                        <div class="mb-3">
                            <label for="GiaGiam" class="form-label">Giá giảm</label>
                            <input type="number" class="form-control" name="GiaGiam" id="GiaGiam" value="<?=$SP['GiaGiam']?>">
                        </div>
                        <div class=" mb-3">
                            <span for="SoLuong">Số lượng</span>
                            <input type="number" class="form-control" name="SoLuong" id="SoLuong" value="<?=$SP['SoLuong']?>">
                        </div>
                        <div class=" mb-3">
                            <span for="MoTa">Mô tả</span>
                            <input type="text" class="form-control" name="MoTa" id="MoTa" value="<?=$SP['MoTa']?>" placeholder="Nhập vào đây">
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Xác nhận</button>
                    </form>