<?php
class MonHocModel extends MySQLDB{

    public function display(){
        $getData = $this->conn->prepare("select * from monhoc");
        if(! $getData->execute()) return;
        return $getData->fetchAll();
    }
    public function addMonHoc($arr=[]){
        $getData = $this->conn->prepare("insert into monhoc(MaMH, TenMH, SoTinChi) value (?, ?, ?)");
        $getData->execute($arr);
    }

    public function updateMonHoc($arr){
        $getData = $this->conn->prepare("update monhoc set TenMH=?, SoTinChi=? where MaMH=?");
        $getData->execute($arr);
    }

    public function DeleteMH($mamh){
        $getData = $this->conn->prepare("delete from monhoc where MaMH=?");
        $getData->execute((array)$mamh);
    }
}
?>