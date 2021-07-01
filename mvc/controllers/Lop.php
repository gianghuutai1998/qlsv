<?php
class Lop extends Controller{

    public function Default(){
        $lop = $this->model("LopModel");
        $data = $lop->GetLops();

        $this->view("master_1", [
            "page"=>"lop",
            "func_page"=>["addlop"],
            "lop"=>$data
        ]);
    }

    public function Add(){
        if(isset($_POST)){
            $lop_data = [];
            $lop = $this->model("LopModel");
            foreach($_POST as $value){
                array_push($lop_data, $value);
            }
            $lop->AddLop($lop_data);
            header('location: /Lop');
        }
    }

    public function Update($malop = null, $tenlop = null, $magvcn = null, $makhoa){
        if(isset($_POST['submit'])){
            $lop = $this->model("LopModel");
            $lop->UpdateLop([$_POST['TenLop'], $_POST['MaGVCN'], $_POST['MaKhoa'], $_POST['MaLop']]);
            header('location: /Lop');
        }

        $this->view("master_1", [
            "page"=>"updatelop",
            "lop"=>[$malop, $tenlop, $magvcn, $makhoa]       
        ]);
    }

    public function Delete($malop = []){
        $lop = $this->model("LopModel");
        $lop->DeleteMH($malop);
        header('location: /Lop');
    }    
}
?>