<?php
class SinhVienModel extends MySQLDB{
    public function display(){

        $getData = $this->conn->prepare("select MaSV, TenSV, GioiTinh, lop.MaLop, lop.TenLop, QueQuan from sinhvien join lop on sinhvien.MaLop = lop.MaLop");
        if(! $getData->execute()) return;
        return $getData->fetchAll();
    }

    public function AddSV($arr=[]){
        $getData = $this->conn->prepare("insert into sinhvien(MaSV, TenSV, GioiTinh, MaLop, QueQuan) value (?, ?, ?, ?, ?)");
        $getData->execute($arr);
    }

    public function UpdateSinhVien($arr){
        $getData = $this->conn->prepare("update sinhvien set TenSV=?, GioiTinh=?, MaLop=?, QueQuan=? where MaSV=?");
        $getData->execute($arr);
    }

    public function DeleteSinhVien($masv){
        $getData = $this->conn->prepare("delete from sinhvien where MaSV=?");
        $getData->execute((array)$masv);
    }
}
?>