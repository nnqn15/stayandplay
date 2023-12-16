<!-- Featured Section Begin -->
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Kết quả tìm kiếm với từ khóa <?=$_GET['keyword']?></h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php foreach($ketqua as $ghim): ?>
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
                            <h6><a href="<?=$base_url?>page/product/detail/<?=$ghim['MaSP']?>"><?=$ghim['TenSP']?></a></h6>
                            <h5><?=$ghim['DonGia']?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    <nav aria-label="...">
        <ul class="pagination justify-content-center">
            <li class="page-item <?=($page<=1)?'disabled': '' ?>">
            <a class="page-link" href="<?=$base_url?>product/search/<?=$_GET['keyword']?>/page/<?=$page-1?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
            </li>
            <?php for($i=1;$i<=$sotrang;$i++): ?>
            <li class="page-item <?=($page==$i)?'active': '' ?>" >
                <a class="page-link" href="<?=$base_url?>product/search/<?=$_GET['keyword']?>/page/<?=$i?>"><?=$i?></a>
            </li>
            <?php endfor ?>
            <li class="page-item <?=($page>=$sotrang)?'disabled': '' ?>">
            <a class="page-link" href="<?=$base_url?>product/search/<?=$_GET['keyword']?>/page/<?=$page+1?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
            </li>
        </ul>
    </nav>