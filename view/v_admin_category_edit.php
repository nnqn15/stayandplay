                    <h2 class="my-3">Sửa loại hàng</h2>
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
                    <input type="hidden"name="HinhLH" id="HinhLH" value="<?=$lh['HinhLH']?>">
                    <div class="mb-3">
                        <label class="form-label">Ảnh loại hàng</label><br>
                        <img src="<?php echo $base_url.$lh['HinhLH']; ?>" alt="" width="80px">
                      </div>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" name="upHinhLH" id="upHinhLH">
                        <label class="input-group-text" for="upHinhLH">Upload</label>
                      </div>
                      <div class="mb-3">
                        <label for="TenLH" class="form-label">Tên loại hàng</label>
                        <input type="text" class="form-control" name="TenLH" id="TenLH" value="<?=$lh['TenLH']?>">
                      </div>
                      <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
                    </form>