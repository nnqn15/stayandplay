<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'login':
                //lay du lieu
                $name="Đăng nhập";
                include_once 'model/m_user.php';
                if (isset($_POST['SoDienThoai'])&&isset($_POST['MatKhau'])){
                    $kq=user_login($_POST['SoDienThoai'],$_POST['MatKhau']);
                    if($kq){
                        // dung dang nhap thanh cong
                        $_SESSION['user']=$kq;
                        header('location: '.$base_url.'page/home');
                    }else{
                        $_SESSION['loi']= 'Số điện thoại hoặc mật khẩu không đúng!';
                    }
                }
                // hien thi du lieu
                $view_name='user_login';
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('location: '.$base_url.'page/home');
                break;
            case 'changePass':
                $name="Đổi mật khẩu";
                include_once 'model/m_user.php';
                if(isset($_POST['submit'])){
                    $MaKH=$_SESSION['user']['MaKH'];
                    $user=user_getById($MaKH);
                    $MatKhauCu=$_POST['MatKhauCu'];
                    $MatKhauMoi=$_POST['MatKhauMoi'];
                    $NhapLai=$_POST['NhapLai'];
                    if($user['MatKhau']==$MatKhauCu){
                        if($MatKhauCu==$MatKhauMoi){
                            $_SESSION['loi']='Mật khẩu mới trùng với mật khẩu cũ!';
                        }else if($MatKhauMoi!=$NhapLai){
                            $_SESSION['loi']='Xác nhận mật khẩu không trùng với mật khẩu mới!';
                        }else{
                            user_editPass($MaKH,$MatKhauMoi);
                            $_SESSION['thongbao']='Đã đổi mật khẩu thành công!';
                        }
                        
                    }else{
                        $_SESSION['loi']='Vui lòng nhập đúng mật khẩu!';
                    }
                }
                $view_name='user_changePass';
                break;
            case 'forgetPass':
                $name="Quên mật khẩu";
                $view_name='user_forgetPass';
                break;
            case 'register':
                $name="Đăng ký";
                //lay du lieu
                include_once 'model/m_user.php';
                if(isset($_POST['submit'])){
                    $SoDienThoai=$_POST['SoDienThoai'];
                    $HoTen=$_POST['HoTen'];
                    $MatKhau=$_POST['MatKhau'];
                    $Email=$_POST['Email'];
                    $kq=user_checkPhone($SoDienThoai);
                    if($kq){
                        // bi trung, khong them
                        $_SESSION['loi']='Đã có tài khoản với số điện thoại <strong>'.$SoDienThoai.'</strong>';
                    }else{
                        //khong trung
                        user_addKH($SoDienThoai,$HoTen,$MatKhau,$Email);
                        $_SESSION['thongbao']='Đã tạo tài khoản với số điện thoại <strong>'.$SoDienThoai.'</strong> thành công';
                    }
                }
                $view_name='user_register';
                break;
            case 'information':
                $name="Thông tin tài khoản";
                //lay du lieu
                include_once 'model/m_user.php';
                $tk=user_getById($_SESSION['user']['MaKH']);
                if(isset($_POST['submit'])){
                    $SoDienThoai=$_POST['SoDienThoai'];
                    $HoTen=$_POST['HoTen'];
                    $Email=$_POST['Email'];
                    $kq=user_checkPhone($SoDienThoai);
                    $MaKH=$_SESSION['user']['MaKH'];
                    if($kq && $kq['MaKH']!=$MaKH){
                        // bi trung, khong them
                        $_SESSION['loi']='Không thể sửa với số điện thoại <strong>'.$SoDienThoai.'</strong>';
                    }else{
                        //khong trung
                        user_editKH($MaKH,$SoDienThoai,$HoTen,$Email);
                        $_SESSION['thongbao']='Thông tin thay đổi đã được lưu lại!';
                    }
                }
                $view_name='user_information';
                break;
            default:
                $view_name='page_home';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: '.$base_url.'user/login');
    }
?>