
<form action="<?=$base_url ?>product/updateCart" method="post">
  <input type="hidden" name="SoSpMua" id="SoSpMua">
  <input type="hidden" name="TongTien" id="TongTien">
  <!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?=$base_url ?>upload/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giỏ hàng</h2>
                        <div class="breadcrumb__option">
                            <a href="<?=$base_url ?>page/home">Trang Chủ</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <?php if(isset($_SESSION['thongbao'])): ?>
        <div class="alert alert-success my-3" role="alert">
            <?=$_SESSION['thongbao'];?>
        </div>
    <?php endif; unset($_SESSION['thongbao']);?>

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($_SESSION['thongbaogiohang'])): ?>
                                    <tr>
                                        <th colspan="4"><h2 style="color: gray;"><?=$_SESSION['thongbaogiohang'];?> <a href="<?=$base_url?>product/shop" style="color: #3D7CEA;">Mua hàng ngay</a></h2></th>
                                    </tr>
                                <?php endif; unset($_SESSION['thongbaogiohang']);?>
                                <?php foreach($ctGioSach as $item): ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?=$base_url?><?=$item['Hinh']?>" width="50px">
                                        <h5><?=$item['TenSP']?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?=number_format($item['DonGia'])?>đ
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" id="SoLuong" value="<?=$item['SoLuongSP']?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        0đ
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="<?=$base_url ?>product/removeFromCart/<?=$item['MaSP']?>"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="<?=$base_url?>product/removeCart" class="primary-btn cart-btn">Xóa tất cả</a>
                        <a onclick="tinhThanhTien()" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>Cập nhật giỏ hàng</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Áp mã giảm giá</h5>
                            <form action="#">
                                <input type="text" placeholder="Nhập mã giảm giá">
                                <a class="primary-btn " style="color: white;">Áp dụng</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng tiền</h5>
                        <ul>
                            <li>Tạm tính <span>0đ</span></li>
                            <li>Giao hàng <span>0đ</span></li>
                            <li>Tổng <span>0đ</span></li>
                        </ul>
                        <button type="submit" class="primary-btn" style="color: white;">THANH TOÁN</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    </form>
<script>
    function tinhThanhTien(){
        var dsSP=document.querySelectorAll('table tbody tr');
        var tong=0;
        for(const sp of dsSP){
            var gia=Number(sp.querySelector('td:nth-child(2)').innerText.replace(/[.,đ]/g, ''));
            var SoLuong=sp.querySelector('td:nth-child(3) div div input').value;
            var tien= gia*SoLuong;
            sp.querySelector('td:nth-child(4)').innerText=tien.toLocaleString('vi-VN') + "đ";
            tong=tong+tien;
        }
        document.querySelector('div.shoping__checkout ul li:nth-child(1) span').innerText=tong.toLocaleString('vi-VN') + "đ";
        document.querySelector('div.shoping__checkout ul li:nth-child(3) span').innerText=tong.toLocaleString('vi-VN') + "đ";
        document.querySelector('#SoSpMua').value=dsSP.length;
        document.querySelector('#TongTien').value=tong;
    }
    tinhThanhTien();
</script>
