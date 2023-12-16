<?php 
    include_once 'model/m_pdo.php';
    include_once 'config.php';
    include_once 'model/m_category.php';
    $dsLoaiHang=category_getAll();
    if(isset($_GET['mod'])){
        switch($_GET['mod']){
            case 'page':
                $ctrl_name='page';
                break;
            case 'user':
                $ctrl_name='user';
                break;
            case 'product':
                $ctrl_name='product';
                break;
            case 'category':
                $ctrl_name='category';
                break;
            case 'admin':
                $ctrl_name='admin';
                break;
            default:
                $ctrl_name='page';
                break;
        }
        if(!isset($_SESSION['user'])){
            $SlGH=0;
        }else{
            $MaKH=$_SESSION['user']['MaKH'];
            include_once 'model/m_user.php';
            $SlGH=user_countCart($MaKH);
        }
        include_once 'controller/c_'.$ctrl_name.'.php';
    }else{
        header('location: page/home');
    }
?>