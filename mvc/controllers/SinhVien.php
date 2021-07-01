<?php
class SinhVien extends Controller{

    public function Default(){
        $sinhvien = $this->model("SinhVienModel");
        $lop = $this->model("LopModel");
        $data = $sinhvien->display();
        

        $this->view("master_1", [
            "page"=>"sinhvien",
            "sinhvien"=>$data,
            "lop"=>$lop->GetLops(),
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
            if(! $sinhvien->SVExist($sv_data[0])){
                $sinhvien->AddSV($sv_data);
            header('location: /SinhVien');
            } else {
                echo "<script>alert('Sinh viên đã tồn tại! Vui lòn nhập lại mã sinh viên khác.'); window.history.back();</script>";
            }
        }
    }

    public function Update($masv = null, $tensv = null, $gioitinh = 1, $malop = null, $quequan = null){
        if(isset($_POST['submit'])){
            $sinhvien = $this->model("SinhVienModel");
            $sinhvien->UpdateSinhVien([$_POST['TenSV'], $_POST['GioiTinh'], $_POST['MaLop'], $_POST['QueQuan'], $_POST['MaSV']]);
            header('location: /Sinhvien');
        }

        $lop = $this->model("LopModel");
        $this->view("master_1", [
            "page"=>"updatesinhvien",
            "lop"=>$lop->GetLops(),
            "sinhvien"=>[$masv, $tensv, $gioitinh, $malop, $quequan]       
        ]);
    }

    public function Delete($masv = []){
        $sinhvien = $this->model("SinhVienModel");
        $sinhvien->DeleteSinhVien($masv);
        header('location: /SinhVien');
    }
        ]);
    }
}
?>