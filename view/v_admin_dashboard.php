                    <h2 class="my-3">Tổng quan</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-success mb-3">
                                <div class="card-body">
                                  <h5 class="card-title"><i class="fa-solid fa-shirt"></i> Sản phẩm</h5>
                                  <p class="card-text fs-1 text-center"><?=$lkSP?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-primary mb-3">
                                <div class="card-body">
                                  <h5 class="card-title"><i class="fa-solid fa-user"></i> Tài khoản</h5>
                                  <p class="card-text fs-1 text-center"><?=$lkUser?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-warning mb-3">
                                <div class="card-body">
                                  <h5 class="card-title"><i class="fa-solid fa-vest-patches"></i> Loại hàng</h5>
                                  <p class="card-text fs-1 text-center"><?=$lkLH?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-danger mb-3">
                                <div class="card-body">
                                  <h5 class="card-title"><i class="fa-solid fa-cart-shopping"></i> Lượt mua</h5>
                                  <p class="card-text fs-1 text-center"><?=$lkLM?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="cart-header">
                                    <strong>Thống kê sách theo loại hàng</strong>
                                </div>
                                <div id="myChart" style="max-width:700px; height:400px"></div>
                                <div class="cart-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Tên loại hàng</th>
                                                <th>Số lượng</th>
                                                <th>Giá trung bình</th>
                                                <th>Thấp nhất</th>
                                                <th>Cao nhất</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tkSachTheoLoaiHang as $cd):?>
                                            <tr>
                                                <td><?=$cd['TenLH']?></td>
                                                <td><?=$cd['SoLuong']?></td>
                                                <td><?=number_format(round(max(500,$cd['TrungBinh'])))?>đ</td>
                                                <td><?=number_format(round(max(500,$cd['ThapNhat'])))?>đ</td>
                                                <td><?=number_format(round(max(500,$cd['CaoNhat'])))?>đ</td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="cart-header">
                                    <strong>Thống kê doanh thu</strong>
                                </div>
                                <div id="myChart2" style="max-width:700px; height:400px"></div>
                                <div class="cart-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Tháng/Năm</th>
                                                <th>Số khách hàng</th>
                                                <th>Lượt mua</th>
                                                <th>Số sản phẩm mua</th>
                                                <th>Doanh thu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tkDoanhThu as $cd):?>
                                            <tr>
                                                <td><?=$cd['Thang']?>/<?=$cd['Nam']?></td>
                                                <td><?=$cd['SoBanDoc']?></td>
                                                <td><?=$cd['SoLuotMuon']?></td>
                                                <td><?=$cd['SoSachMuon']?></td>
                                                <td><?=number_format($cd['DoanhThu'])?>đ</td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Your Function
    function drawChart() {
    
        // Set Data
        const data = google.visualization.arrayToDataTable([
        ['Loại hàng', 'Số lượng'],
        <?php foreach ($tkSachTheoLoaiHang as $cd) {
            echo "['".$cd['TenLH']."',".$cd['SoLuong']."],";
        } ?>

        ]);

        // Set Options
        const options = {
        title:'Thống kê sản phẩm theo loại hàng',
        is3D:true
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);


        // Set Data
        const data2 = google.visualization.arrayToDataTable([
        ['Tháng/Năm', 'DoanhThu'],
        <?php foreach ($tkDoanhThu as $dt) {
            echo "['".$dt['Thang']/$dt['Nam']."',".$dt['DoanhThu']."],";
        } ?>
        ]);

        // Set Options
        const options2 = {
        title:'Thống kê theo doanh thu'
        };

        // Draw
        const chart2 = new google.visualization.ColumnChart(document.getElementById('myChart2'));
        chart2.draw(data2, options2);
    }
</script>