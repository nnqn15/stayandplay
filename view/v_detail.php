<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?=$base_url ?>upload/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?=$ctSp['TenSP']?></h2>
                        <div class="breadcrumb__option">
                            <a href="<?=$base_url ?>page/home">Trang Chủ</a>
                            <a href="page/home">Cửa Hàng</a>
                            <span><?=$ctSp['TenSP']?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="<?=$base_url?><?=$ctSp['Hinh']?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?=$ctSp['TenSP']?></h3>
                        <div class="product__details__rating">
                            <span>(<?=$SLcomment?> bình luận)</span>
                        </div>
                        <div class="product__details__price"><?=number_format($ctSp['DonGia'],0,",",".")?>đ</div>
                        <p><?=$ctSp['MoTa']?></p>
                        <form action="<?=$base_url?>product/addToCart/<?=$ctSp['MaSP']?>" method="post">
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input name="SoLuongSP" type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="primary-btn" style="border: none;">Thêm vào giỏ hàng</button>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        </form>
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
                        <ul>
                            <li><b>Tình trạng hàng</b> <span>Còn <?=$ctSp['SoLuong']?> sản phẩm</span></li>
                            <li><b>Giao Hàng</b> <span>01 ngày vận chuyển. <samp>Giao hàng miễn phí!</samp></span></li>
                            <li><b>Trọng lượng</b> <span>0.1 kg</span></li>
                            <li><b>Chia sẻ với</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Tương tự</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Mô tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Bình luận <span>(<?=$SLcomment?>)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Sản phẩm tương tự</h6>
                                </div>
                                <section class="related-product">
                                    <div class="container">
                                        <div class="row">
                                        <?php foreach($dsNgauNhienCungLoaiHang as $sach): ?>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="product__item">
                                                    <div class="product__item__pic set-bg" data-setbg="<?=$base_url?><?=$sach['Hinh']?>">
                                                        <ul class="product__item__pic__hover">
                                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product__item__text">
                                                        <h6><a href="<?=$base_url?>page/product/detail/<?=$sach['MaSP']?>"><?=$sach['TenSP']?></a></h6>
                                                        <h5><?=number_format($sach['DonGia'],0,",",".")?>đ</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Mô Tả</h6>
                                    <p><?=$ctSp['MoTa']?></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <div class="product__details__tab__desc">
                                        <h6>Bình luận</h6>
                                    </div>
                                    <?php if(isset($_SESSION['user'])&&$check>0): ?>
                                    <form action="<?=$base_url ?>product/comment" method="post">
                                        <input type="hidden" name="MaSP" value="<?=$ctSp['MaSP']?>">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="NoiDung" class="form-control form-control-lg" height="20px" placeholder="Nhập vào đây">
                                            </div>
                                            <div class="col-md-1">
                                                <button type="submit " class="btn btn-success btn-lg">Gửi</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php endif; ?>
                                    <?php foreach ($comment as $cn):?>
                                        <div class="row my-3 border rounded-3">
                                            <div class="col-sm-3">
                                                <strong><?=$cn['HoTen']?></strong><br>
                                                <?=$cn['NgayBL']?><br>
                                                <i>Đã mua <?=$cn['SoLuongMua']?> sản phẩm</i>
                                            </div>
                                            <div class="col-sm-9">
                                                <?=$cn['NoiDung']?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <!-- <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản Phẩm Có Thể Bạn Cũng Thích</h2>
                    </div>
                </div>
            </div>
            
        </div>
    </section> -->
    <!-- Related Product Section End -->