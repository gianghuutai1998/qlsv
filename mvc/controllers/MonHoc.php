<?php
class MonHoc extends Controller{
    public function Default(){
        $monhoc = $this->model("MonHocModel");
        $data = $monhoc->display();

        $this->view("master_1", [
            "page"=>"monhoc",
            "func_page"=>"addmonhoc",
            "monhoc"=>$data        
        ]);
    }
}
?>