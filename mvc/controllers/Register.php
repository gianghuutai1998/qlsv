<?php  
class Register extends Controller{
    public function Default(){
        $this->view("master_1", [
            "page"=>'register'
        ]);
    }
    public function dangky(){
        echo "dang ky";
        print_r($_POST);
    }
}
?>