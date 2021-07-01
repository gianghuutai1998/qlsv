<?php
class LopModel extends MySQLDB{

    public function GetLops(){
        $sql = "select * from lop";
        $getData = $this->conn->prepare($sql);
        if(! $getData->execute()) return;
        return $getData->fetchAll();
    }

    public function AddLop($arr = []){
        $getData = $this->conn->prepare("insert into lop(MaLop, TenLop, MaGVCN, MaKhoa) value (?, ?, ?, ?)");
        $getData->execute($arr);
    }

    public function UpdateLop($arr){
        $getData = $this->conn->prepare("update lop set TenLop=?, MaGVCN=?, MaKhoa=? where MaLop=?");
        $getData->execute($arr);
    }

    public function DeleteLop($malop){
        $getData = $this->conn->prepare("delete from lop where MaLop=?");
        $getData->execute((array)$malop);
    }

    public function LopExists($malop){
        $getData = $this->conn->prepare("select * from lop where MaLop=?");
        $getData->execute((array)$malop);
        if($getData->rowCount() > 0) return true;
        return false;
    }
}
?>