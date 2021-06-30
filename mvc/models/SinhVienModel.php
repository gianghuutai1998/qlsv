<?php
class SinhVienModel extends MySQLDB{
    public function display(){
        $getData = $this->conn->prepare("select MaSV, TenSV, GioiTinh, lop.TenLop, QueQuan from sinhvien join lop on    sinhvien.MaLop = lop.MaLop");
        if(! $getData->execute()) return;
        return $getData->fetchAll();
    }
}
?>