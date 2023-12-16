<?php 
    include_once 'm_pdo.php';
    // thao tac du lieu trong cs fql
    function history_hasCart($MaHD){
        return pdo_query_one("SELECT * FROM hoadon WHERE MaKH=? AND TrangThai=?",$MaHD,'gio-sach');
    }
    function history_add($MaHD){
        pdo_execute("INSERT INTO hoadon(`MaKH`,`NgayMua`,`TrangThai`) VALUES(?,?,?)",$MaHD,date('Y-m-d H:i:s'),'gio-sach');
    }
    function history_addToCart($MaHD,$MaSP,$SoLuongSP){
        pdo_execute("INSERT INTO chitiethoadon(`MaHD`,`MaSP`,`SoLuongSP`) VALUES(?,?,?)",$MaHD,$MaSP,$SoLuongSP);
    }
    function history_hasProduct($MaHD,$MaSP){
        return pdo_query("SELECT * FROM chitiethoadon WHERE MaHD=? AND MaSP=?",$MaHD,$MaSP);
    }
    function history_getCart($MaKH){
        return pdo_query("SELECT * FROM hoadon hd INNER JOIN chitiethoadon ct on hd.MaHD=ct.MaHD INNER JOIN sanpham sp on ct.MaSP=sp.MaSP WHERE hd.MaKH=? AND hd.TrangThai=?",$MaKH,'gio-sach');
    }
    function history_removeFromCart($MaHD,$MaSP){
        pdo_execute("DELETE FROM chitiethoadon WHERE MaHD=? AND MaSP=?",$MaHD,$MaSP);
    }
    function history_removeCart($MaHD){
        pdo_execute("DELETE FROM chitiethoadon WHERE MaHD=?",$MaHD);
    }
    function history_updateCart($MaHD,$TongTien,$SoSpMua,$TrangThai){
        pdo_execute("UPDATE hoadon SET TongTien=?,SoSpMua=?,TrangThai=? WHERE MaHD=?",$TongTien,$SoSpMua,$TrangThai,$MaHD);
    } 
    function history_plus($MaHD,$MaSP,$SoLuong){
        pdo_execute("UPDATE chitiethoadon SET SoLuongSP=SoLuongSP+? WHERE MaHD=? AND MaSP=?",$SoLuong,$MaHD,$MaSP);
    }
    function history_getAllByAccount($MaKH){
        return pdo_query("SELECT * FROM hoadon WHERE MaKH=? AND TrangThai!='gio-sach'",$MaKH);
    }
    function history_getAll(){
        return pdo_query("SELECT * FROM hoadon hd INNER JOIN khachhang kh ON hd.MaKH=kh.MaKH WHERE TrangThai!='gio-sach'");
    }
    function history_getById($MaHD){
        return pdo_query_one("SELECT * FROM hoadon WHERE MaHD=?",$MaHD);
    }
    function history_editStatus($MaHD,$TrangThai){
        pdo_execute("UPDATE hoadon SET TrangThai=? WHERE MaHD=?",$TrangThai,$MaHD);
    }
    function history_count(){
        return pdo_query_value("SELECT COUNT(*) FROM hoadon WHERE TrangThai!='gio-sach'");
    }
    function history_stat(){
        return pdo_query("SELECT YEAR(NgayMua) as Nam,MONTH(NgayMua) as Thang, COUNT(DISTINCT MaKH) as SoBanDoc, COUNT(MaHD) AS SoLuotMuon,SUM(SoSpMua) as SoSachMuon,SUM(TongTien) AS DoanhThu FROM hoadon GROUP BY YEAR(NgayMua),MONTH(NgayMua)");
    }
    function history_getCartByAccount($MaKH){
        return pdo_query("SELECT MaHD FROM hoadon WHERE MaKH=? AND TrangThai='gio-sach'",$MaKH);
    }
    function history_updateCartDetail($SoLuongSP,$MaHD,$MaSP){
        pdo_execute("UPDATE chitiethoadon SET SoLuongSP=? WHERE MaHD=? AND MaSP=?",$SoLuongSP,$MaHD,$MaSP);
    }
    function history_getDetail($MaHD){
        return pdo_query("SELECT * FROM hoadon hd INNER JOIN chitiethoadon ct ON hd.MaHD=ct.MaHD INNER JOIN sanpham sp ON ct.MaSP=sp.MaSP WHERE ct.MaHD=?",$MaHD);
    }
?>