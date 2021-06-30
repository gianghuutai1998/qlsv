<?php
class DiemThiModel extends MySQLDB{

    public function display(){
        $getData = $this->conn->prepare("select diemthi.MaMH, sinhvien.TenSV, LanThi, DiemThi from diemthi
        join sinhvien on sinhvien.MaSV = diemthi.MaSV");
        if(! $getData->execute()) return;
        return $getData->fetchAll();
    }
}
?>