<?php 
    function category_getAll(){
        return pdo_query("SELECT * FROM loaihang");
    }
    function category_getById($id){
        return pdo_query_one("SELECT * FROM loaihang WHERE MaLH = ?",$id);
    }
    function category_checkName($TenLH){
        return pdo_query_one("SELECT * FROM loaihang WHERE TenLH=?",$TenLH);
    }
    function category_add($TenLH,$HinhLH){
        pdo_execute("INSERT INTO loaihang(`TenLH`,`HinhLH`) VALUES(?,?)",$TenLH,$HinhLH);
    }
    function category_edit($MaLH,$TenLH,$HinhLH){
        pdo_execute("UPDATE loaihang SET TenLH=?,HinhLH=? WHERE MaLH=?",$TenLH,$HinhLH,$MaLH);
    }
    function category_delete($MaLH){
        pdo_execute("DELETE FROM loaihang WHERE MaLH=?",$MaLH);
    }
    //up anh
    function category_upanh($name){
        $target_dir='upload/categories/';
        $target_file=$target_dir . basename($_FILES[''.$name.'']['name']);
        if(!file_exists($target_file)){
            move_uploaded_file($_FILES[''.$name.'']['tmp_name'], $target_file);
        }
        $img=$target_file;
        return $img;
    }
    function category_xoaanh($MaLH){
        $list=pdo_query_one("SELECT * FROM loaihang WHERE MaLH = ?",$MaLH);
        return $list['HinhLH'];
    }
    function category_count(){
        return pdo_query_value("SELECT COUNT(*) FROM loaihang");
    }
    function category_stat(){
        return pdo_query("SELECT lh.MaLH,lh.TenLH,COUNT(sp.MaSP) as SoLuong,AVG(sp.DonGia) as TrungBinh,MIN(sp.DonGia) as ThapNhat,MAX(sp.DonGia) as CaoNhat FROM loaihang lh LEFT JOIN sanpham sp ON lh.MaLH=sp.MaLH GROUP BY lh.MaLH,lh.TenLH");
    }
?>