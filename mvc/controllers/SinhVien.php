<?php
class SinhVien extends Controller{

    public function Default(){
        $sinhvien = $this->model("SinhVienModel");
        $data = $sinhvien->display();

        $this->view("master_1", [
            "page"=>"sinhvien",
            "sinhvien"=>$data,
            "func_page"=>["addsinhvien"]
        ]);
    }
}
?>