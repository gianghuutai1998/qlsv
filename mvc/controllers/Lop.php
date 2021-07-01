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

            if(! $lop->LopExists($lop_data[0])){
                $lop->AddLop($lop_data);
                header('location: /Lop');
            } else {
                echo "<script>alert('Mã lớp đã tồn tại! Vui lòn nhập lại mã lớp khác.'); window.history.back();</script>";
            }
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
        $lop->DeleteLop($malop);
        header('location: /Lop');
    }   
}
?>