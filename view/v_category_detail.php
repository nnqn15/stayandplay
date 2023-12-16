        <!-- Featured Section Begin -->
        <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><?=$ctLoaiHang['TenLH']?></h2>
                    </div>
                </div>
            </div>
            
            <div class="row featured__filter">
                <?php foreach($dsAoCungLoaiHang as $loaihang): ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?=$base_url?><?=$loaihang['Hinh']?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="<?=$base_url?>product/addToCart/<?=$loaihang['MaSP']?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?=$base_url?>product/detail/<?=$loaihang['MaSP']?>"><?=$loaihang['TenSP']?></a></h6>
                            <h5><?=number_format($loaihang['DonGia'],0,",",".")?>đ</h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->