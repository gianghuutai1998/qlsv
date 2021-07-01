<?php
class ThongKeModel extends MySQLDB{

    public function AVG_DiemTheoLop($malop){
        $sql ="select lop.TenLop, round(avg(diemthi.DiemThi), 1) as DiemTB from diemthi
        join sinhvien on diemthi.MaSV = sinhvien.MaSV
        join lop on lop.MaLop = sinhvien.MaLop
        group by lop.TenLop";

        $getData = $this->conn->prepare($sql);
        return $getData->fetchAll();
    }

    
}
?>