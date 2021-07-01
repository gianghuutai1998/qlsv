<?php 
class Khoa extends Controller{
    public function Default(){
        $khoa = $this->model("KhoaModel");
        $khoadata = json_decode($khoa->getKhoa(), true);
        $giaovien = $this->model("GiaoVienModel");
        $gvdata = json_decode($giaovien->getGiaoVien(), true);
        $tmp_gvdata = [];
       
       
      
    }
}
?>