
                    <a href="<?=$base_url?>admin/product/add" class="btn btn-success float-end">Thêm sản phẩm</a>
                    <h2 class="my-3">Sản phẩm</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Hình Ảnh</th>
                                <th class="text-start">Tên sản phẩm</th>
                                <th>Loại hàng</th>
                                <th class="text-end">Đơn giá</th>
                                <th class="text-end">Giá giảm</th>
                                <th>Số lượng</th>
                                <th>Ngày nhập</th>
                                <th class="text-danger"><i class="fa-solid fa-face-kiss-wink-heart"></i></th>
                                <th class="text-success"><i class="fa-solid fa-eye"></i></th>
                                <th class="text-end">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;foreach($dsSP as $SP): ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><img src="<?=$base_url?><?=$SP['Hinh']?>" class="rounded-3" style="width: 64px;"></td>
                                <td class="text-start"><?=$SP['TenSP']?></td>
                                <td><?=$SP['TenLH']?></td>
                                <td class="text-end"><?=number_format($SP['DonGia'],0,",",".")?>đ</td>
                                <td class="text-end">0đ</td>
                                <td><?=$SP['SoLuong']?></td>
                                <td><?=$SP['NgayNhap']?></td>
                                <td><?=$SP['LuotYeuThich']?></td>
                                <td><?=$SP['SoLuotXem']?></td>
                                <td class="text-end">
                                    <a href="<?=$base_url?>admin/product/edit/<?=$SP['MaSP']?>"><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                    <button onclick="deleteProduct(<?=$SP['MaSP']?>)" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <?php $i++;endforeach; ?>
                        </tbody>
                    </table>
<script>
    function deleteProduct(MaSP){
        var kq=confirm("Bạn có muốn xóa sản phẩm này không?");
        if(kq){
            window.location='<?=$base_url?>admin/product/delete/'+MaSP;
        }
    }
</script>