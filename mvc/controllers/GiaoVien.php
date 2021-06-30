<?php 
class GiaoVien extends Controller
{
    public function Default(){
        $giaovien = $this->model("GiaoVienModel");
        $data = $giaovien->getGiaoVien();

        $this->view("master_1",[
            "page"=>"giaovien",
            "func_page"=>[
                "addgv"
                ],
            "giaovien"=>$data
        ]);
      
    }
    public function Search($MaGV){
        $giaovien = $this->model("GiaoVienModel");
        $data = $giaovien->getGiaoVienWithMaGV($MaGV);

        $this->view("master_1",[
            "page"=>"giaovien",
            "giaovien"=>$data
        ]);
      
    }
    public function add(){
        print_r($_POST);
    }
}
?>