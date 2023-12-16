<?php 
include_once 'config.php';
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'dashboard':
                include_once 'model/m_user.php';
                include_once 'model/m_category.php';
                include_once 'model/m_product.php';
                include_once 'model/m_history.php';
                $lkSP=product_count();
                $lkUser=user_count();
                $lkLH=category_count();
                $lkLM=history_count();
                $tkSachTheoLoaiHang=category_stat();
                $tkDoanhThu=history_stat();
                $view_name='admin_dashboard';
                break;
            case 'user':
                include_once 'model/m_user.php';
                $dsTK=user_getAll();
                $view_name='admin_user';
                break;
            case 'category':
                include_once 'model/m_category.php';
                $dsLH=category_getAll();
                $view_name='admin_category';
                break;
            case 'product':
                include_once 'model/m_product.php';
                $dsSP=product_getAll();
                $view_name='admin_product';
                break;
            case 'comment':
                include_once 'model/m_comment.php';
                $dsBL=comment_getAllByProduct();
                $view_name='admin_comment';
                break;
            case 'history':
                include_once 'model/m_history.php';
                $dsDH=history_getAll();
                $view_name='admin_history';
                break;
            case 'user-add':
                //lay du lieu
                include_once 'model/m_user.php';
                if(isset($_POST['submit'])){
                    $SoDienThoai=$_POST['SoDienThoai'];
                    $HoTen=$_POST['HoTen'];
                    $MatKhau=$_POST['MatKhau'];
                    $Email=$_POST['Email'];
                    $Quyen=$_POST['Quyen'];
                    $kq=user_checkPhone($SoDienThoai);
                    if($kq){
                        // bi trung, khong them
                        $_SESSION['loi']='Đã có tài khoản với số điện thoại <strong>'.$SoDienThoai.'</strong>';
                    }else{
                        //khong trung
                        user_add($SoDienThoai,$HoTen,$MatKhau,$Email,$Quyen);
                        $_SESSION['thongbao']='Đã tạo tài khoản với số điện thoại <strong>'.$SoDienThoai.'</strong> thành công';
                    }
                }
                // hien thi du lieu
                $view_name='admin_user_add';
                break;
            case 'user-edit':
                //lay du lieu
                include_once 'model/m_user.php';
                $tk=user_getById($_GET['id']);
                if(isset($_POST['submit'])){
                    $SoDienThoai=$_POST['SoDienThoai'];
                    $HoTen=$_POST['HoTen'];
                    $Email=$_POST['Email'];
                    $Quyen=$_POST['Quyen'];
                    $kq=user_checkPhone($SoDienThoai);
                    $MaKH=$_GET['id'];
                    if($kq && $kq['MaKH']!=$MaKH){
                        // bi trung, khong them
                        $_SESSION['loi']='Không thể sửa với số điện thoại <strong>'.$SoDienThoai.'</strong>';
                    }else{
                        //khong trung
                        user_edit($MaKH,$SoDienThoai,$HoTen,$Email,$Quyen);
                        $_SESSION['thongbao']='Thông tin thay đổi đã được lưu lại!';
                    }
                }
                // hien thi du lieu
                $view_name='admin_user_edit';
                break;
            case 'user-delete':
                //lay du lieu
                include_once 'model/m_user.php';
                $MaKHdelete=$_SESSION['user']['MaKH'];
                if($MaKHdelete==$_GET['id']){
                    $_SESSION['loi']='Không thể tự xóa chính mình!';
                }else{
                    user_delete($_GET['id']);
                }
                header('location: '.$base_url.'admin/user');
                // hien thi du lieu
                $view_name='admin_user_delete';
                break;
            case 'category-add':
                include_once 'model/m_category.php';
                if(isset($_POST['submit'])){
                    $TenLH=$_POST['TenLH'];
                    $kq=category_checkName($TenLH);
                    if($kq){
                        $_SESSION['loi']='Tên loại hàng <strong>'.$TenLH.'</strong> đã bị trùng!';
                    }else{
                        $TenHinh='HinhLH';
                        $HinhLH=category_upanh($TenHinh);
                        category_add($TenLH,$HinhLH);
                        $_SESSION['thongbao']='Đã tạo loại hàng <strong>'.$TenLH.'</strong> thành công';
                    }
                }
                $view_name='admin_category_add';
                break;
            case 'category-edit':
                include_once 'model/m_category.php';
                $MaLH=$_GET['id'];
                $lh=category_getById($_GET['id']);
                if(isset($_POST['submit'])){
                    $TenLH=$_POST['TenLH'];
                    $kq=category_checkName($TenLH);
                    if($kq && $kq['MaLH']!=$MaLH){
                        $_SESSION['loi']='Tên loại hàng <strong>'.$TenLH.'</strong> đã bị trùng!';
                    }else{
                        if(isset($_FILES['upHinhLH']['name'])&&$_FILES['upHinhLH']['name']!=""){
                            $TenHinh='upHinhLH';
                            $HinhLH=category_upanh($TenHinh);
                            if(file_exists($_POST['HinhLH'])){
                                unlink($_POST['HinhLH']);
                            }
                        }else{
                            $HinhLH=$_POST['HinhLH'];
                        }
                        category_edit($MaLH,$TenLH,$HinhLH);
                        $_SESSION['thongbao']='Đã sửa thành công!';
                    }
                }
                $view_name='admin_category_edit';
                break;
            case 'category-delete':
                //lay du lieu
                include_once 'model/m_category.php';
                $HinhLH=category_xoaanh($_GET['id']);
                if(file_exists($HinhLH)){
                    unlink($HinhLH);
                }
                category_delete($_GET['id']);
                header('location: '.$base_url.'admin/category');
                // hien thi du lieu
                $view_name='admin_category_delete';
                break;
            case 'product-add':
                include_once 'model/m_product.php';
                include_once 'model/m_category.php';
                $LH=category_getAll();
                if(isset($_POST['submit'])){
                    $TenSP=$_POST['TenSP'];
                    $MaLH=$_POST['MaLH'];
                    $DonGia=$_POST['DonGia'];
                    $GiaGiam=$_POST['GiaGiam'];
                    $SoLuong=$_POST['SoLuong'];
                    $kq=product_checkName($TenSP);
                    if($kq){
                        $_SESSION['loi']='Tên sản phẩm <strong>'.$TenSP.'</strong> đã bị trùng!';
                    }else{
                        $TenHinh='Hinh';
                        $Hinh=product_upanh($TenHinh);
                        product_add($TenSP,$Hinh,$MaLH,$DonGia,$SoLuong,$GiaGiam);
                        $_SESSION['thongbao']='Đã tạo sản phẩm <strong>'.$TenSP.'</strong> thành công';
                    }
                }
                $view_name='admin_product_add';
                break;
            case 'product-edit':
                include_once 'model/m_product.php';
                include_once 'model/m_category.php';
                $MaSP=$_GET['id'];
                $LH=category_getAll();
                $SP=product_getById($_GET['id']);
                if(isset($_POST['submit'])){
                    $TenSP=$_POST['TenSP'];
                    $MaLH=$_POST['MaLH'];
                    $DonGia=$_POST['DonGia'];
                    $GiaGiam=$_POST['GiaGiam'];
                    $SoLuong=$_POST['SoLuong'];
                    $MoTa=$_POST['MoTa'];
                    $kq=product_checkName($TenSP);
                    if($kq && $kq['MaSP']!=$MaSP){
                        $_SESSION['loi']='Tên sản phẩm <strong>'.$TenSP.'</strong> đã bị trùng!';
                    }else{
                        if(isset($_FILES['upHinh']['name'])&&$_FILES['upHinh']['name']!=""){
                            $TenHinh='upHinh';
                            $Hinh=product_upanh($TenHinh);
                            if(file_exists($_POST['Hinh'])){
                                unlink($_POST['Hinh']);
                            }
                        }else{
                            $Hinh=$_POST['Hinh'];
                        }
                        product_edit($MaSP,$TenSP,$Hinh,$MaLH,$DonGia,$GiaGiam,$SoLuong,$MoTa);
                        $_SESSION['thongbao']='Đã sửa thành công!';
                    }
                }
                $view_name='admin_product_edit';
                break;
            case 'product-delete':
                //lay du lieu
                include_once 'model/m_product.php';
                $Hinh=product_xoaanh($_GET['id']);
                if(file_exists($Hinh)){
                    unlink($Hinh);
                }
                product_delete($_GET['id']);
                header('location: '.$base_url.'admin/product');
                // hien thi du lieu
                $view_name='admin_product_delete';
                break;
            case 'comment-detail':
                include_once 'model/m_comment.php';
                include_once 'model/m_product.php';
                $sp=product_getById($_GET['id']);
                $dsBL=comment_getByIdProduct($_GET['id']);
                $view_name='admin_comment_detail';
                break;
            case 'comment-delete':
                include_once 'model/m_comment.php';
                comment_delete($_GET['MaBL']);
                header('location: '.$base_url.'admin/comment/detail/'.$_GET['id']);
                break;
            case 'history-detail':
                include_once 'model/m_history.php';
                $dsSP=history_getDetail($_GET['id']);
                $dh=history_getById($_GET['id']);
                if(isset($_POST['submit'])){
                    $TrangThai=$_POST['TrangThai'];
                    history_editStatus($_GET['id'],$TrangThai);
                    $_SESSION['thongbao']='Thông tin thay đổi đã được lưu lại!';
                }
                $view_name='admin_history_detail';
                break;
        default:
                include_once 'model/m_user.php';
                include_once 'model/m_category.php';
                include_once 'model/m_product.php';
                include_once 'model/m_history.php';
                $lkSP=product_count();
                $lkUser=user_count();
                $lkLH=category_count();
                $lkLM=history_count();
                $view_name='admin_dashboard';
                break;
        }
        include_once 'view/v_admin_layout.php';
    }else{
        header('location: '.$base_url.'admin/dashboard');
    }
?>