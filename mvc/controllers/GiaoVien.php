<?php 
class GiaoVien extends Controller
{
    public function Default(){
        $giaovien = $this->model("GiaoVienModel");
        $data = $giaovien->getGiaoVien();

        $this->view("master_1",[
            "page"=>"giaovien",
            "func_page"=>[
                "addgv","updategv"
                ],
            "func_page_js"=>[
                "updateGV"
            ],
            "giaovien"=>$data
        ]);
      
    }
    public function Search($MaGV){
        $giaovien = $this->model("GiaoVienModel");
        $data = $giaovien->getGiaoVienWithMaGV($MaGV);

        echo $data;
      
    }
    public function add(){
        print_r($_POST);
    }
    public function Update($id, $name, $home){
        $giaovien = $this->model("GiaoVienModel");
        $kq = $giaovien->updateGiaoVien($id, $name, $home);
        $new = $giaovien->getGiaoVienWithMaGV($id);
        echo $new;
        
    }
}
?>