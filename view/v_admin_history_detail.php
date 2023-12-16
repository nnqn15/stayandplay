
                    <h2 class="my-3">Chi tiết đơn hàng</h2>
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
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Hình Ảnh</th>
                                <th class="text-start">Tên sản phẩm</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dsSP as $SP): ?>
                            <tr>
                                <td><?=$SP['MaSP']?></td>
                                <td><img src="<?=$base_url?><?=$SP['Hinh']?>" class="rounded-3" style="width: 64px;"></td>
                                <td class="text-start"><?=$SP['TenSP']?></td>
                                <td><?=$SP['SoLuongSP']?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5"><h2>Tổng tiền: <?=number_format($dsSP[0]['TongTien'])?>đ</h2></th>
                            </tr>
                        </tfoot>
                    </table>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="TrangThai">Trạng thái đơn hàng</label>
                            <select class="form-select" id="TrangThai" name="TrangThai">
                            <option value="chuan-bi" <?=($dh['TrangThai']=='chuan-bi')?'selected':'' ?>>Chuẩn bị hàng</option>
                            <option value="cho-giao" <?=($dh['TrangThai']=='cho-giao')?'selected':'' ?>>Chờ giao hàng</option>
                            <option value="da-nhan" <?=($dh['TrangThai']=='da-nhan')?'selected':'' ?>>Giao hàng thành công</option>
                            </select>
                        </div>
                        <button name="submit" type="submit" class="btn btn-success">Xác nhận</button>
                    </form>