<!-- Product Section Begin -->
<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danh mục sản phẩm</h4>
                            <ul>
                            <?php foreach($dsLoaiHang as $loaihang): ?>
                                <li><a href="<?=$base_url?>category/detail/<?=$loaihang['MaLH']?>"><?=$loaihang['TenLH']?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Giá</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="0" data-max="500000">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar__item">
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
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                            <?php foreach($ctSp as $ghim): ?>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="<?=$base_url?><?=$ghim['Hinh']?>">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="<?=$base_url?>product/addToCart/<?=$ghim['MaSP']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span><?=$ghim['TenLH']?></span>
                                            <h5><a href="<?=$base_url?>product/detail/<?=$ghim['MaSP']?>"><?=$ghim['TenSP']?></a></h5>
                                            <div class="product__item__price"><?=number_format($ghim['DonGia'],0,",",".")?>đ <span>300.000đ</span></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Lọc theo</span>
                                    <select>
                                        <option value="0">Giá tăng dần</option>
                                        <option value="0">Giá giảm dần</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span><?=$soSP?></span> sản phẩm được tìm thấy</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php foreach($ctSp as $ghim): ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?=$base_url?><?=$ghim['Hinh']?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="<?=$base_url?>product/addToCart/<?=$ghim['MaSP']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="<?=$base_url?>product/detail/<?=$ghim['MaSP']?>"><?=$ghim['TenSP']?></a></h6>
                                    <h5><?=number_format($ghim['DonGia'],0,",",".")?>đ</h5>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center">
                            <li class="page-item <?=($page<=1)?'disabled': '' ?>">
                            <a class="page-link" href="<?=$base_url?>product/shop/page/<?=$page-1?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <?php for($i=1;$i<=$sotrang;$i++): ?>
                            <li class="page-item <?=($page==$i)?'active': '' ?>" >
                                <a class="page-link" href="<?=$base_url?>product/shop/page/<?=$i?>"><?=$i?></a>
                            </li>
                            <?php endfor ?>
                            <li class="page-item <?=($page>=$sotrang)?'disabled': '' ?>">
                            <a class="page-link" href="<?=$base_url?>product/shop/page/<?=$page+1?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->