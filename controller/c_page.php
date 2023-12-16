<?php 
include_once 'config.php';
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'home':
                $name="Trang chủ";
                include_once 'model/m_product.php';
                $dsGhim=product_getGhim();
                $dsTim=product_getTim();
                $dsView=product_getMostViewed();
                $dsSL=product_getMostSL();
                $view_name='page_home';
                break;
            case 'contact':
                $name="Liên Hệ";
                $view_name='page_contact';
                break;
            case 'cart':
                $name="Giỏ hàng";
                include_once 'model/m_history.php';
                $MaKH=$_SESSION['user']['MaKH'];
                $GioSach=history_hasCart($MaKH);
                if($GioSach){
                    $ctGioSach=history_getCart($MaKH);
                }else{
                    $_SESSION['thongbaogiohang']='Giỏ hàng của bạn đang trống!';
                    $ctGioSach=[];
                }
                $view_name='page_cart';
                break;
            case 'updateCart':
                include_once 'model/m_history.php';
                $updatedProducts = $_POST['updatedProducts']; // Lấy mảng các sản phẩm và số lượng mới từ tham số yêu cầu
                $MaKH=$_SESSION['user']['MaKH'];
                $MaHD=history_getCartByAccount($MaKH);
                // Vòng lặp qua từng sản phẩm và số lượng
                foreach ($updatedProducts as $product) {
                $SoLuongSP = $product['SoLuongSP'];
                $MaSP = $product['MaSP'];
                history_updateCartDetail($SoLuongSP,$MaHD,$MaSP);
                // Thực hiện cập nhật số lượng trong database bằng câu lệnh SQL tương tự như bước 2 trong câu trả lời trước
                }
                echo $updatedProducts;
                header("location: ".$base_url."page/cart");
                break;
            case 'history':
                $name="Lịch sử";
                //laydulieu
                include_once 'model/m_history.php';
                $MaKH=$_SESSION['user']['MaKH'];
                $dsLichSu=history_getAllByAccount($MaKH);
                $view_name='page_history';
                break;
            default:
                $name="Trang chủ";
                include_once 'model/m_product.php';
                $dsGhim=product_getGhim();
                $dsTim=product_getTim();
                $dsView=product_getMostViewed();
                $dsSL=product_getMostSL();
                $view_name='page_home';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: '.$base_url.'page/home');
    }
?>