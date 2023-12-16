<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'detail':
                // lay du liệu
                include_once 'model/m_category.php';
                $ctLoaiHang=category_getById($_GET['id']);
                $name="Loại hàng ".$ctLoaiHang['TenLH'];
                include_once 'model/m_product.php';
                $dsAoCungLoaiHang=product_getByCategory($_GET['id']);
                //hien thi du lieu
                $view_name='category_detail';
                break;
            default:
                $view_name='page';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: '.$base_url.'category/detail');
    }
?>