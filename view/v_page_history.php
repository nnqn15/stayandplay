                    <h2 class="my-3">Lịch sử mua hàng</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th class="text-start">Ngày mua</th>
                                <th>Trạng thái</th>
                                <th class="text-end">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;foreach($dsLichSu as $tk): ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$tk['NgayMua']?></td>
                                <td>
                                    <?php 
                                    switch ($tk['TrangThai']) {
                                        case 'chuan-bi':
                                            echo '<span style="color:blue;">Chuẩn bị hàng</span>';
                                            break;
                                        case 'cho-giao':
                                            echo '<span style="color:#b1b709;"">Đang giao hàng</span>';
                                            break;
                                        case 'da-nhan':
                                            echo '<span style="color:#6AB963;"">Đã nhận</span>';
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>
                                </td>
                                <td class="text-end">
                                <?=number_format($tk['TongTien'],0,",",".")?>đ
                                </td>
                            </tr>
                            <?php $i++;endforeach; ?>
                        </tbody>
                    </table>
<script>
    function deleteUser(MaKH){
        var kq=confirm("Bạn có muốn xóa tài khoản này không?");
        if(kq){
            window.location='<?=$base_url?>admin/user/delete/'+MaKH;
        }
    }
</script>