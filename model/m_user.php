<?php 
    include_once 'm_pdo.php';
    // thao tac du lieu trong cs fql
    function user_login($phone,$pass){
        return pdo_query_one("SELECT * FROM khachhang WHERE SoDienThoai=? AND MatKhau=?",$phone,$pass);
    }
    function user_getAll(){
        return pdo_query("SELECT * FROM khachhang");
    }
    function user_checkPhone($SoDienThoai){
        return pdo_query_one("SELECT * FROM khachhang WHERE SoDienThoai=?",$SoDienThoai);
    }
    function user_checkPhoneEdit($MaKH,$SoDienThoai){
        return pdo_query_one("SELECT * FROM khachhang WHERE SoDienThoai=? AND MaKH=?",$SoDienThoai,$MaKH);
    }
    function user_add($SoDienThoai,$HoTen,$MatKhau,$Email,$Quyen){
        pdo_execute("INSERT INTO khachhang(`SoDienThoai`,`HoTen`,`MatKhau`,`Email`,`Quyen`) VALUES(?,?,?,?,?)",$SoDienThoai,$HoTen,$MatKhau,$Email,$Quyen);
    }
    function user_addKH($SoDienThoai,$HoTen,$MatKhau,$Email){
        pdo_execute("INSERT INTO khachhang(`SoDienThoai`,`HoTen`,`MatKhau`,`Email`) VALUES(?,?,?,?)",$SoDienThoai,$HoTen,$MatKhau,$Email);
    }
    function user_getById($MaKH){
        return pdo_query_one("SELECT * FROM khachhang WHERE MaKH=?",$MaKH);
    }
    function user_edit($MaKH,$SoDienThoai,$HoTen,$Email,$Quyen){
        pdo_execute("UPDATE khachhang SET SoDienThoai=?,HoTen=?,Email=?,Quyen=? WHERE MaKH=?",$SoDienThoai,$HoTen,$Email,$Quyen,$MaKH);
    }
    function user_editKH($MaKH,$SoDienThoai,$HoTen,$Email){
        pdo_execute("UPDATE khachhang SET SoDienThoai=?,HoTen=?,Email=? WHERE MaKH=?",$SoDienThoai,$HoTen,$Email,$MaKH);
    }
    function user_editPass($MaKH,$MatKhauMoi){
        pdo_execute("UPDATE khachhang SET MatKhau=? WHERE MaKH=?",$MatKhauMoi,$MaKH);
    }
    function user_delete($MaKH){
        pdo_execute("DELETE FROM khachhang WHERE MaKH=?",$MaKH);
    }
    function user_countCart($MaKH){
        return pdo_query_value("SELECT COUNT(*) FROM hoadon hd INNER JOIN chitiethoadon ct on hd.MaHD=ct.MaHD WHERE MaKH=? AND TrangThai='gio-sach'",$MaKH);
    }
    function user_count(){
        return pdo_query_value("SELECT COUNT(*) FROM khachhang");
    }
?>