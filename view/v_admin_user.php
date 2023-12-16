                    <a href="<?=$base_url?>admin/user/add" class="btn btn-success float-end">Thêm tài khoản</a>
                    <h2 class="my-3">Tài khoản</h2>
                    <?php if(isset($_SESSION['loi'])): ?>
                        <div class="alert alert-danger my-3" role="alert">
                            <?=$_SESSION['loi'];?>
                        </div>
                    <?php endif; unset($_SESSION['loi']);?>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th class="text-start">Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Quyền</th>
                                <th class="text-end">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;foreach($dsTK as $tk): ?>
                            <tr>
                                <td><?=$i?></td>
                                <td class="text-start"><?=$tk['HoTen']?></td>
                                <td><?=$tk['SoDienThoai']?></td>
                                <td>
                                    <?php 
                                    switch ($tk['Quyen']) {
                                        case '2':
                                            echo '<span class="badge text-bg-danger">Quản lý cấp cao</span>';
                                            break;
                                        case '1':
                                            echo '<span class="badge text-bg-warning">Quản lý</span>';
                                            break;
                                        default:
                                            echo '<span class="badge text-bg-primary">Khách hàng</span>';
                                            break;
                                    }
                                    ?>
                                </td>
                                <td class="text-end">
                                    <a href="<?=$base_url?>admin/user/edit/<?=$tk['MaKH']?>"><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                    <button onclick="deleteUser(<?=$tk['MaKH']?>)" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
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