<?php
class MonHoc extends Controller{
    public function Default(){
        $monhoc = $this->model("MonHocModel");
        $data = $monhoc->display();

        $this->view("master_1", [
            "page"=>"monhoc",
            "func_page"=>["addmonhoc"],
            "monhoc"=>$data
        ]);
    }

    public function AddMonhoc(){
        if(isset($_POST)){
            $mh_data = [];
            $monhoc = $this->model("MonHocModel");
            foreach($_POST as $value){
                array_push($mh_data, $value);
            }
            $monhoc->addMonhoc($mh_data);
            header('location: /MonHoc');
        }
    }
    public function Update($maMH = null, $tenmh = null, $sotc = null){
        if(isset($_POST['submit'])){
            $monhoc = $this->model("MonHocModel");
            $monhoc->updateMonHoc([$_POST['TenMH'], $_POST['SoTC'], $_POST['MaMH']]);
            header('location: /MonHoc');
        }

        $this->view("master_1", [
            "page"=>"updatemonhoc",
            "monhoc"=>[$maMH, $tenmh, $sotc]       
        ]);
    }

    public function Delete($mamh = []){
        $monhoc = $this->model("MonHocModel");
        $monhoc->DeleteMH($mamh);
        header('location: /MonHoc');
    }
        ]);
    }
}
?>