<?php
class HomeModel extends MySQLDB{

    public function display(){
        $sql = "select sinhvien.MaSV, sinhvien.TenSV, lop.TenLop, khoa.TenKhoa from sinhvien
                join lop on lop.MaLop = sinhvien.MaLop
                join khoa on khoa.MaKhoa = lop.MaKhoa";
        $getData = $this->conn->prepare($sql);
        if(! $getData->execute()) return;
        return $getData->fetchAll();
    }
}
?>