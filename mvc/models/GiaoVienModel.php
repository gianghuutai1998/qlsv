<?php 
class GiaoVienModel extends MySQLDB
{
    public function getGiaoVien(){
        $getData = $this->conn->prepare("select * from GIAOVIEN");
        if(!$getData->execute()) return;
        return $getData->fetchAll( );
    }
    public function getGiaoVienWithMaGV($MaGV){
        $getData = $this->conn->prepare("select * from GIAOVIEN where MaGV = ?");
        if(!$getData->execute([$MaGV])) return;
        return $getData->fetch();
    }
    public function updateGiaoVien($MaGV, $data = []){
        $getData = $this->conn->prepare("update GIAOVIEN set ");
    }
    
}
?>