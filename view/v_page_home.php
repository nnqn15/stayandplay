<!-- banner -->
<div class="hero__item set-bg mx-5 mb-4" data-setbg="<?=$base_url?>/upload/hero/banner-1.jpg">
    <div class="hero__text">
        <span>Áo Phông</span>
        <h2>Thiết Kế <br />100% Cotton</h2>
        <p>Miễn phí vận chuyển và đổi trả hàng</p>
        <a href="#" class="primary-btn">MUA NGAY</a>
    </div>
</div>
<!-- Categories Section Begin -->
<section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php foreach($dsLoaiHang as $loaihang): ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="<?=$base_url?><?=$loaihang['HinhLH']?>">
                                <h5><a href="#"><?=$loaihang['TenLH']?></a></h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php foreach($dsGhim as $ghim): ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?=$base_url?><?=$ghim['Hinh']?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="<?=$base_url?>product/addToCart/<?=$ghim['MaSP']?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?=$base_url?>product/detail/<?=$ghim['MaSP']?>"><?=$ghim['TenSP']?></a></h6>
                            <h5><?=number_format($ghim['DonGia'],0,",",".")?>đ</h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?=$base_url?>upload/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?=$base_url?>upload/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad my-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top yêu thích</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php foreach($dsTim as $tim): ?>
                                    <a href="<?=$base_url?>product/detail/<?=$tim['MaSP']?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?=$base_url?><?=$tim['Hinh']?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?=$tim['TenSP']?></h6>
                                            <span><?=number_format($tim['DonGia'],0,",",".")?>đ</span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($dsTim as $tim): ?>
                                    <a href="<?=$base_url?>product/detail/<?=$tim['MaSP']?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?=$base_url?><?=$tim['Hinh']?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?=$tim['TenSP']?></h6>
                                            <span><?=number_format($tim['DonGia'],0,",",".")?>đ</span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top lượt xem</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php foreach($dsView as $view): ?>
                                    <a href="<?=$base_url?>product/detail/<?=$view['MaSP']?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?=$base_url?><?=$view['Hinh']?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?=$view['TenSP']?></h6>
                                            <span><?=number_format($view['DonGia'],0,",",".")?>đ</span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($dsView as $view): ?>
                                    <a href="<?=$base_url?>product/detail/<?=$view['MaSP']?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?=$base_url?><?=$view['Hinh']?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?=$view['TenSP']?></h6>
                                            <span><?=number_format($view['DonGia'],0,",",".")?>đ</span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top số lượng</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php foreach($dsSL as $SL): ?>
                                    <a href="<?=$base_url?>product/detail/<?=$SL['MaSP']?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?=$base_url?><?=$SL['Hinh']?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?=$SL['TenSP']?></h6>
                                            <span><?=number_format($SL['DonGia'],0,",",".")?>đ</span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($dsSL as $SL): ?>
                                    <a href="<?=$base_url?>product/detail/<?=$SL['MaSP']?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?=$base_url?><?=$SL['Hinh']?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?=$SL['TenSP']?></h6>
                                            <span><?=number_format($SL['DonGia'],0,",",".")?>đ</span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    