<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="view/image/png" href="<?=$base_url ?>upload/logo.png"/>
    <title>Stay&Play | <?=$name?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=$base_url?>view/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=$base_url?>view/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=$base_url?>view/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=$base_url?>view/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?=$base_url?>view/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?=$base_url?>view/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=$base_url?>view/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=$base_url?>view/css/style.css" type="text/css">
</head>

<body>
<div class="container">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="<?=$base_url?>page/home"><img src="https://google-cdn.digitop.vn/stay-play-2022/prod/public/images/logo.svg" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="<?=$base_url?>page/cart"><i class="fa fa-shopping-bag"></i> <span><?=$SlGH?></span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="<?=$base_url ?>upload/language-VN.png" alt="">
                <div>Tiếng Việt</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Tiếng Việt</a></li>
                </ul>
            </div>
            <div class="header__top__right__user">
                <?php if(!isset($_SESSION['user'])): ?>
                    <div><a href="<?=$base_url?>user/login"><i class="fa fa-user"></i> Đăng nhập</a></div>
                <?php else:?>
                    <div><?=$_SESSION['user']['HoTen']?></div>
                    <span class="arrow_carrot-down"></span>
                    <ul>
                        <li><a href="<?=$base_url?>user/information">Thông tin tài khoản</a></li>
                        <li><a href="<?=$base_url?>page/history">Lịch sử mua hàng</a></li>
                        <?php if($_SESSION['user']['Quyen']>=1): ?>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-warning" href="<?=$base_url?>admin/dashboard">Trang quản lý</a></li>
                        <?php endif; ?>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="<?=$base_url?>user/logout">Đăng xuất</a></li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="<?=(strpos($view_name,'home'))?'active':''?>"><a href="<?=$base_url?>page/home">Trang chủ</a></li>
                <li class="<?=(strpos($view_name,'shop'))?'active':''?>"><a href="<?=$base_url?>product/shop">Sản phẩm</a></li>
                <li class="<?=(strpos($view_name,'#'))?'active':''?>"><a href="#">Về chúng tôi</a></li>
                <li class="<?=(strpos($view_name,'contact'))?'active':''?>"><a href="<?=$base_url?>page/contact">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hotro@stayandplay.com</li>
                <li>Miễn phí vận chuyển cho đơn từ 0đ</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hotro@stayandplay.com</li>
                                <li>Miễn phí vận chuyển cho đơn từ 0đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="<?=$base_url ?>upload/language-VN.png" alt="">
                                <div>Tiếng Việt</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Tiếng Việt</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__user">
                                <?php if(!isset($_SESSION['user'])): ?>
                                    <div><a href="<?=$base_url?>user/login"><i class="fa fa-user"></i> Đăng nhập</a></div>
                                <?php else:?>
                                    <div><?=$_SESSION['user']['HoTen']?></div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="<?=$base_url?>user/information">Thông tin tài khoản</a></li>
                                        <li><a href="<?=$base_url?>page/history">Lịch sử mua hàng</a></li>
                                        <?php if($_SESSION['user']['Quyen']>=1): ?>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-warning" href="<?=$base_url?>admin/dashboard">Trang quản lý</a></li>
                                        <?php endif; ?>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a href="<?=$base_url?>user/logout">Đăng xuất</a></li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="<?=$base_url?>page/home"><img src="https://google-cdn.digitop.vn/stay-play-2022/prod/public/images/logo.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="<?=(strpos($view_name,'home'))?'active':''?>"><a href="<?=$base_url?>page/home">Trang chủ</a></li>
                            <li class="<?=(strpos($view_name,'shop'))?'active':''?>"><a href="<?=$base_url?>product/shop">Sản phẩm</a></li>
                            <li class="<?=(strpos($view_name,'aboutUs'))?'active':''?>"><a href="<?=$base_url?>product/aboutUs">Về chúng tôi</a></li>
                            <li class="<?=(strpos($view_name,'contact'))?'active':''?>"><a href="<?=$base_url?>page/contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="<?=$base_url?>page/cart"><i class="fa fa-shopping-bag"></i> <span><?=$SlGH?></span></a></li>
                        </ul>
                        <div class="header__cart__price">Tạm tính: <span>350.000 VND</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tất cả sản phẩm</span>
                        </div>
                        <ul>
                            <?php foreach($dsLoaiHang as $loaihang): ?>
                                <li><a href="<?=$base_url?>category/detail/<?=$loaihang['MaLH']?>"><?=$loaihang['TenLH']?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="<?=$base_url?>product/search" method="POST" class="mb-3">
                                <div class="hero__search__categories">
                                    Tất cả sản phẩm
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" name="keyword" placeholder="Bạn cần tìm gì?">
                                <button type="submit" class="site-btn">Tìm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 706 903 022</h5>
                                <span>Hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <?php include_once 'view/v_'.$view_name.'.php'?>

    <!-- Footer Section Begin -->
<footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="index.php"><img src="https://google-cdn.digitop.vn/stay-play-2022/prod/public/images/logo.svg" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: Công viên phần mềm Quang Trung, Quận 12 , HCM</li>
                            <li>SDT: +84 706 903 022</li>
                            <li>Email: hotro@stayandplay.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Về Stay & Play và Chăm sóc khách hàng</h6>
                        <ul>
                            <li><a href="#">Về Chúng Tôi</a></li>
                            <li><a href="#">Cửa Hàng</a></li>
                            <li><a href="#">Giỏ Hàng</a></li>
                            <li><a href="#">Liên Hệ</a></li>
                            <li><a href="#">Tuyển Dụng</a></li>
                            <li><a href="#">Vị Trí Cửa Hàng</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Hình Thức Mua Hàng</a></li>
                            <li><a href="#">Chính Sách Đổi Trả Hàng</a></li>
                            <li><a href="#">Chính Sách Giao Hàng</a></li>
                            <li><a href="#">Chính Sách Thanh Toán</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Đăng ký nhận thông báo</h6>
                        <p>Nhập email để nhận những thông tin mới nhất của chúng tôi!</p>
                        <form action="#">
                            <input type="text" placeholder="Nhập email của bạn">
                            <button type="submit" class="site-btn">Theo dõi</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="<?=$base_url ?>upload/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
</div>

    <!-- Js Plugins -->
    <script src="<?=$base_url?>view/js/jquery-3.3.1.min.js"></script>
    <script src="<?=$base_url?>view/js/bootstrap.min.js"></script>
    <script src="<?=$base_url?>view/js/jquery.nice-select.min.js"></script>
    <script src="<?=$base_url?>view/js/jquery-ui.min.js"></script>
    <script src="<?=$base_url?>view/js/jquery.slicknav.js"></script>
    <script src="<?=$base_url?>view/js/mixitup.min.js"></script>
    <script src="<?=$base_url?>view/js/owl.carousel.min.js"></script>
    <script src="<?=$base_url?>view/js/main.js"></script>



</body>

</html>