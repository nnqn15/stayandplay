                    <h2 class="my-3">Đơn hàng</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th class="text-start">Họ tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Trạng thái đơn hàng</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;foreach($dsDH as $tk): ?>
                            <tr>
                                <td><?=$i?></td>
                                <td class="text-start"><?=$tk['HoTen']?></td>
                                <td><?=$tk['SoDienThoai']?></td>
                                <td>
                                    <?php 
                                    switch ($tk['TrangThai']) {
                                        case 'chuan-bi':
                                            echo '<span class="badge text-bg-danger">Chuẩn bị hàng</span>';
                                            break;
                                        case 'cho-giao':
                                            echo '<span class="badge text-bg-warning">Chờ giao hàng</span>';
                                            break;
                                        case 'da-nhan':
                                            echo '<span class="badge text-bg-success">Giao hàng thành công</span>';
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?=$base_url?>admin/history/detail/<?=$tk['MaHD']?>"><button class="btn btn-outline-success">Chi tiết</button></a>
                                </td>
                            </tr>
                            <?php $i++;endforeach; ?>
                        </tbody>
                    </table>