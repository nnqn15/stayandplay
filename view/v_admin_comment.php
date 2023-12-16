                    <h2 class="my-3">Bình luận</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th class="text-start">Sản Phẩm</th>
                                <th>Số Bình Luận</th>
                                <th>Mới Nhất</th>
                                <th>Cũ Nhất</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dsBL as $BL): ?>
                            <tr>
                                <td class="text-start"><img src="<?=$base_url?><?=$BL['Hinh']?>" class="rounded-3" style="width: 64px;"> <?=$BL['TenSP']?></td>
                                <td><?=$BL['soBinhLuan']?></td>
                                <td>
                                    <?php if($BL['BLMoi']==""){echo "Chưa có dữ liệu";}else{echo $BL['BLMoi'];} ?>
                                </td>
                                <td>
                                    <?php if($BL['BLCu']==""){echo "Chưa có dữ liệu";}else{echo $BL['BLCu'];} ?>
                                </td>
                                <td>
                                <a href="<?=$base_url?>admin/comment/detail/<?=$BL['MaSP']?>"><button class="btn btn-outline-success">Chi tiết</button></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>