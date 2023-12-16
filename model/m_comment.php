<?php 
    function comment_getAllByProduct(){
        return pdo_query("SELECT Hinh,TenSP,sp.MaSP as MaSP,MAX(bl.NgayBL) as BLMoi,MIN(bl.NgayBL) as BLCu,COUNT(bl.MaSP) as soBinhLuan FROM sanpham sp LEFT JOIN binhluan bl on sp.MaSP=bl.MaSP GROUP BY sp.MaSP ORDER BY soBinhLuan DESC");
    }
    function comment_getByIdProduct($MaSP){
        return pdo_query("SELECT NoiDung, NgayBL,HoTen,TenSP,MaBL,bl.MaSP as MaSP FROM binhluan bl INNER JOIN khachhang kh on bl.MaKH=kh.MaKH INNER JOIN sanpham sp on bl.MaSP=sp.MaSP WHERE bl.MaSP=?",$MaSP);
    }
    function comment_delete($MaBL){
        pdo_execute("DELETE FROM binhluan WHERE MaBL=?",$MaBL);
    }
    function comment_add($MaKH,$MaSP,$NoiDung){
        pdo_execute("INSERT INTO binhluan(`MaKH`,`MaSP`,`NoiDung`) VALUES(?,?,?)",$MaKH,$MaSP,$NoiDung);
    }
    function comment_getByProduct($MaSP,$MaKH){
        return pdo_query("SELECT HoTen,NgayBL,NoiDung,COUNT(ct.SoLuongSP) AS SoLuongMua FROM binhluan bl INNER JOIN khachhang kh ON bl.MaKH=kh.MaKH INNER JOIN hoadon hd ON kh.MaKH=hd.MaKH INNER JOIN chitiethoadon ct ON hd.MaHD=ct.MaHD WHERE bl.MaSP=? AND ct.MaSP=? AND kh.Makh=? GROUP BY HoTen,NgayBL,NoiDung",$MaSP,$MaSP,$MaKH);
    }
    function comment_count($MaSP){
        return pdo_query_value("SELECT COUNT(*) FROM binhluan WHERE MaSP=?",$MaSP);
    }
    function comment_checkcount($MaSP){
        return pdo_query_one("SELECT ct.SoLuongSP AS SoLuongMua FROM khachhang kh INNER JOIN hoadon hd ON kh.MaKH=hd.MaKH INNER JOIN chitiethoadon ct ON hd.MaHD=ct.MaHD WHERE ct.MaSP=? AND TrangThai='da-nhan'",$MaSP);
    }
?>