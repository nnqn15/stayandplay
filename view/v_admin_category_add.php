                    <h2 class="my-3">Thêm loại hàng</h2>
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
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" name="HinhLH" id="HinhLH">
                        <label class="input-group-text" for="HinhLH">Upload</label>
                      </div>
                      <div class="mb-3">
                        <label for="TenLH" class="form-label">Tên loại hàng</label>
                        <input type="text" class="form-control" name="TenLH" id="TenLH" placeholder="Tên loại hàng">
                      </div>
                      <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
                    </form>