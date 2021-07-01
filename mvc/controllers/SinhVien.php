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

    public function AddSV(){        
        if(isset($_POST)){
            $sv_data = [];
            $sinhvien = $this->model("SinhVienModel");
            foreach($_POST as $value){
                array_push($sv_data, $value);
            }
            $sinhvien->AddSV($sv_data);
            header('location: /SinhVien');
        }
    }

    public function Update($masv = null, $tensv = null, $gioitinh = 1, $malop = null, $quequan = null){
        if(isset($_POST['submit'])){
            $sinhvien = $this->model("SinhVienModel");
            $sinhvien->UpdateSinhVien([$_POST['TenSV'], $_POST['GioiTinh'], $_POST['MaLop'], $_POST['QueQuan'], $_POST['MaSV']]);
            header('location: /Sinhvien');
        }

        $this->view("master_1", [
            "page"=>"updatesinhvien",
            "sinhvien"=>[$masv, $tensv, $gioitinh, $malop, $quequan]       
        ]);
    }

    public function Delete($masv = []){
        $sinhvien = $this->model("SinhVienModel");
        $sinhvien->DeleteSinhVien($masv);
        header('location: /SinhVien');
    }
}
?>