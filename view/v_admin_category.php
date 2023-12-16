                    <a href="<?=$base_url?>admin/category/add" class="btn btn-success float-end">Thêm loại hàng</a>
                    <h2 class="my-3">Loại hàng</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th>Mã loại hàng</th>
                                <th>Hình Ảnh</th>
                                <th class="text-start">Tên loại hàng</th>
                                <th class="text-end">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;foreach($dsLH as $lh): ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><img src="<?=$base_url?><?=$lh['HinhLH']?>" class="rounded-3" style="width: 64px;"></td>
                                <td class="text-start"><?=$lh['TenLH']?></td>
                                <td class="text-end">
                                <a href="<?=$base_url?>admin/category/edit/<?=$lh['MaLH']?>"><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                    <button onclick="deleteCategory(<?=$lh['MaLH']?>)" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <?php $i++;endforeach; ?>
                        </tbody>
                    </table>
<script>
    function deleteCategory(MaLH){
        var kq=confirm("Bạn có muốn xóa loại hàng này không?");
        if(kq){
            window.location='<?=$base_url?>admin/category/delete/'+MaLH;
        }
    }
</script>