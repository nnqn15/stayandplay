                    <h2 class="my-3">Bình luận: <strong><?=$sp['TenSP']?></strong></h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th class="text-start">Nội dung</th>
                                <th>Ngày bình luận</th>
                                <th>Người bình luận</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dsBL as $BL): ?>
                            <tr>
                                <td class="text-start"><?=$BL['NoiDung']?></td>
                                <td><?=$BL['NgayBL']?></td>
                                <td><?=$BL['HoTen']?></td>
                                <td>
                                    <a href="<?=$base_url?>admin/comment/delete/<?=$BL['MaSP']?>/<?=$BL['MaBL']?>"><button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>