<?php
class DiemThi extends Controller{

    public function Default(){
        $diemthi = $this->model("DiemThiModel");
        $data = $diemthi->display();

        $this->view("master_1", [
            "page"=>"diemthi",
            "diemthi"=>$data,
            "func_page"=>["adddiemthi"]
        ]);
    }
}
?>