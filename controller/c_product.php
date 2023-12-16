<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'detail':
                //lay du lieu
                include_once 'model/m_product.php';
                include_once 'model/m_comment.php';
                $MaKH=$_SESSION['user']['MaKH'];
                product_plusView($_GET['id']);
                $ctSp=product_getById($_GET['id']);
                $comment=comment_getByProduct($_GET['id'],$MaKH);
                $SLcomment=comment_count($_GET['id']);
                $check=comment_checkcount($_GET['id']);
                $name="Chi tiết ".$ctSp['TenSP'];
                $dsNgauNhienCungLoaiHang=product_getRandomByCategory($ctSp['MaLH']);
                // hien thi du lieu
                $view_name='detail';
                break;
            case 'shop':
                //lay du lieu
                $name="Cửa Hàng";
                include_once 'model/m_product.php';
                $page=1;
                if (isset($_GET['page'])){
                    $page=$_GET['page'];
                }
                $ctSp=product_getAll();
                $dsTim=product_getTim();
                $ketqua=product_count($page);
                $soSP=product_count();
                $sotrang=ceil(product_count()/8);
                // hien thi du lieu
                $view_name='product_shop';
                break;
            case 'search':
                if (isset($_POST['keyword'])) {
                    // doi tu post sang get
                    header("location: ".$base_url."product/search/".$_POST['keyword']."");
                }
                // lay du lieu
                include_once 'model/m_product.php';
                $name="Kết quả tìm kiếm";
                $page=1;
                if (isset($_GET['page'])){
                    $page=$_GET['page'];
                }
                $ketqua=product_search($_GET['keyword'],$page);
                $sotrang=ceil((product_searchTotal($_GET['keyword']))/8);
                // hien thi du lieu
                $view_name='search';
                break;
            case 'addToCart':
                if(!isset($_SESSION['user'])){
                    $_SESSION['loi']="Bạn cần đăng nhập trước khi mua hàng!";
                    header('location: '.$base_url.'user/login');
                    return;
                }
                if(!isset($_POST['SoLuongSP'])){
                    $SoLuongSP=1;
                }else{
                    $SoLuongSP=$_POST['SoLuongSP'];
                }
                $MaSP=$_GET['id'];
                $MaKH=$_SESSION['user']['MaKH'];
                // kiem tra co gio hang hay chua
                include_once 'model/m_history.php';
                $kq=history_hasCart($MaKH);
                $hasProduct=history_hasProduct($kq['MaHD'],$MaSP);
                if($kq&&$hasProduct){
                    history_plus($kq['MaHD'],$MaSP,$SoLuongSP);
                }else if($kq){
                    history_addToCart($kq['MaHD'],$MaSP,$SoLuongSP);
                }else{
                    //sai chua co gio sach
                    history_add($MaKH);
                    $kq=history_hasCart($MaKH);
                    history_addToCart($kq['MaHD'],$MaSP,$SoLuongSP);
                }
                $_SESSION['thongbao']='Đã thêm sản phẩm vào giỏ';
                header('location: '.$base_url.'product/detail/'.$MaSP);
                break;
            case 'removeFromCart':
                include_once 'model/m_history.php';
                $MaKH=$_SESSION['user']['MaKH'];
                $MaSP=$_GET['id'];
                $GioSach=history_hasCart($MaKH);
                if($GioSach){
                    history_removeFromCart($GioSach['MaHD'],$MaSP);
                }
                header('location: '.$base_url.'page/cart');
                break;
            case 'removeCart':
                include_once 'model/m_history.php';
                $MaKH=$_SESSION['user']['MaKH'];
                $GioSach=history_hasCart($MaKH);
                if($GioSach){
                    history_removeCart($GioSach['MaHD']);
                    $_SESSION['thongbaogiohang']='Giỏ hàng của bạn đang trống!';
                }
                header('location: '.$base_url.'page/cart');
                break;
            case 'updateCart':
                include_once 'model/m_history.php';
                $MaKH=$_SESSION['user']['MaKH'];
                $MaSP=$_GET['id'];
                $GioSach=history_hasCart($MaKH);
                if($GioSach){
                    $SoSpMua=$_POST['SoSpMua'];
                    $TongTien=$_POST['TongTien'];
                    $TrangThai='chuan-bi';
                    include_once 'model/m_product.php';
                    $ctGioSach=history_getCart($MaKH);
                    foreach ($ctGioSach as $ct) {
                        product_decreaseAmount($ct['MaSP']);
                    }
                    history_updateCart($GioSach['MaHD'],$TongTien,$SoSpMua,$TrangThai);
                    $_SESSION['thongbao']='Đơn hàng của bạn đã được tiếp nhận!';
                }
                header('location: '.$base_url.'page/cart');
                break;
            case 'comment':
                include_once 'model/m_comment.php';
                comment_add($_SESSION['user']['MaKH'],$_POST['MaSP'],$_POST['NoiDung']);
                header("location: ".$base_url."product/detail/".$_POST['MaSP']);
                break;
            default:
                //lay du lieu
                $name="Cửa Hàng";
                include_once 'model/m_product.php';
                $page=1;
                if (isset($_GET['page'])){
                    $page=$_GET['page'];
                }
                $ctSp=product_getAll();
                $dsTim=product_getTim();
                $ketqua=product_count($page);
                $soSP=product_count();
                $sotrang=ceil(product_count()/8);
                // hien thi du lieu
                $view_name='product_shop';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: '.$base_url.'product/shop');
    }
?>