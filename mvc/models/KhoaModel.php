<?php 
class KhoaModel extends MySQLDB{
    public function getKhoa(){
        $getData = $this->conn->prepare("select * from KHOA");
        if(!$getData->execute()) return;
        return json_encode($getData->fetchAll( ));
    }
}
?>