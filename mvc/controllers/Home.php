<?php 
class Home extends Controller{
    public function Default(){
        $home = $this->model("HomeModel");
        $data = $home->display();
        
        $this->view("master_1",[
            "page"=>"home",
            "home"=>$data
        ]);
    }
}
?>