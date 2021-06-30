<?php
class MonHocModel extends MySQLDB{

    public function display(){
        $getData = $this->conn->prepare("select * from monhoc");
        if(! $getData->execute()) return;
        return $getData->fetchAll();
    }

    public function addMonHoc($mamh, $tenmh, $sotc){
        $getData = $this->conn->prepare("insert into monhoc(MaMH, TenMH, SoTinChi) value ('?', '?', '?')");
        $getData->execute($mamh, $tenmh, $sotc);
    }

    public function updateMonHoc($mamh, $tenmh, $sotc){
        $getData = $this->conn->prepare("update monhoc set TenMH='?', SoTinChi='?' where MaMH='?'");
        $getData->execute($tenmh, $sotc, $mamh);
    }
}
?>