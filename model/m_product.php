<?php 
    function product_getAll(){
        return pdo_query("SELECT * FROM sanpham s INNER JOIN loaihang lh on lh.MaLH=s.MaLH ORDER BY MaSP ASC");
    }
    function product_getGhim(){
        return pdo_query("SELECT * FROM sanpham WHERE GhimTrangChu=1");
    }
    function product_getTim(){
        return pdo_query("SELECT * FROM sanpham ORDER BY LuotYeuThich DESC LIMIT 3");
    }
    function product_getMostViewed(){
        return pdo_query("SELECT * FROM sanpham ORDER BY SoLuotXem DESC LIMIT 3");
    }
    function product_getMostSL(){
        return pdo_query("SELECT * FROM sanpham ORDER BY SoLuong DESC LIMIT 3");
    }
    function product_getById($id){
        return pdo_query_one("SELECT * FROM sanpham s INNER JOIN loaihang lh on lh.MaLH=s.MaLH WHERE s.MaSP=$id");
    }
    function product_getRandomByCategory($id){
        return pdo_query("SELECT * FROM sanpham WHERE MaLH=$id ORDER BY rand() LIMIT 4");
    }
    function product_getByCategory($id){
        return pdo_query("SELECT * FROM sanpham WHERE MaLH=$id ");
    }
    function product_search($keyword, $page=1){
        $batdau= ($page-1)*8;
        // 1 trang lay 8
        // trang 1 bat dau tu 0 1 2 3 4 5 6 7 
        // trang 2 bat dau tu 8
        // trang 3 bat dau tu 16
        // trang n bat dau tu (n-1)*8
        return pdo_query("SELECT * FROM sanpham WHERE TenSP LIKE '%$keyword%' LIMIT $batdau,8");
    }
    function product_searchTotal($keyword){
        return pdo_query_value("SELECT COUNT(*) FROM sanpham WHERE TenSP LIKE '%$keyword%'");
    }
    function product_count(){
        return pdo_query_value("SELECT COUNT(*) FROM sanpham");
    }
    function product_page($page=1){
        $batdau= ($page-1)*8;
        // 1 trang lay 8
        // trang 1 bat dau tu 0 1 2 3 4 5 6 7 
        // trang 2 bat dau tu 8
        // trang 3 bat dau tu 16
        // trang n bat dau tu (n-1)*8
        return pdo_query("SELECT * FROM sanpham LIMIT $batdau,8");
    }
    function product_decreaseAmount($MaSP){
        pdo_execute("UPDATE sanpham SET SoLuong = SoLuong - 1 WHERE MaSP=?",$MaSP);
    }
    function product_checkName($TenSP){
        return pdo_query_one("SELECT * FROM sanpham WHERE TenSP=?",$TenSP);
    }
    function product_add($TenSP,$Hinh,$MaLH,$DonGia,$GiaGiam,$SoLuong){
        pdo_execute("INSERT INTO sanpham(`TenSP`,`Hinh`,`MaLH`,`DonGia`,`GiaGiam`,`SoLuong`) VALUES(?,?,?,?,?,?)",$TenSP,$Hinh,$MaLH,$DonGia,$GiaGiam,$SoLuong);
    }
    function product_edit($MaSP,$TenSP,$Hinh,$MaLH,$DonGia,$GiaGiam,$SoLuong,$MoTa){
        pdo_execute("UPDATE sanpham SET TenSP=?,Hinh=?,MaLH=?,DonGia=?,GiaGiam=?,SoLuong=?,MoTa=? WHERE MaSP=?",$TenSP,$Hinh,$MaLH,$DonGia,$GiaGiam,$SoLuong,$MoTa,$MaSP);
    }
    function product_delete($MaSP){
        pdo_execute("DELETE FROM sanpham WHERE MaSP=?",$MaSP);
    }
    function product_plusView($MaSP){
        pdo_execute("UPDATE sanpham SET SoLuotXem=SoLuotXem+1 WHERE MaSP=?",$MaSP);
    }
    //up anh
    function product_upanh($name){
        $target_dir='upload/product/';
        $target_file=$target_dir . basename($_FILES[''.$name.'']['name']);
        if(!file_exists($target_file)){
            move_uploaded_file($_FILES[''.$name.'']['tmp_name'], $target_file);
        }
        $img=$target_file;
        return $img;
    }
    function product_xoaanh($MaSP){
        $list=pdo_query_one("SELECT * FROM sanpham WHERE MaSP = ?",$MaSP);
        return $list['Hinh'];
    }
?>