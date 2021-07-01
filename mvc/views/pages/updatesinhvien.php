<div class="modal-content up" style="margin-top: 74px;">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update sinh viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="SinhVien/Update/" method="POST">
            <div class="form-group">
                <label for="MaSV">Mã sinh viên</label>
                <input type="text" class="form-control" id="MaSV" name="MaSV" value="<?php print_r($data['sinhvien'][0]); ?>">
            </div>
            <div class="form-group">
                <label for="TenGV">Tên sinh viên</label>
                <input type="text" class="form-control" id="TenSV" name="TenSV" value="<?php print_r($data['sinhvien'][1]); ?>">
            </div>
            <div class="form-group">
                <label>Lớp</label>
                <select class="form-control" name="MaLop">
                    <?php 
                        foreach ($data['lop'] as $lop) {?> 
                       <option value="<?php echo $lop["MaLop"]?>"
                            <?php 
                                if($lop["MaLop"] == $data['sinhvien'][3]) echo "selected";
                            ?>
                       ><?php echo $lop["TenLop"]?></option>;
                   <?php } ?>
                    
                </select>
            </div>
            
            <div class="form-group">
                <label for="Quequan">Quê quán</label>
                <input type="text" class="form-control" id="QueQuan" name="QueQuan" value="<?php print_r($data['sinhvien'][4]); ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary" name="submit">Lưu thay đổi</button>
            </div>
        </form>
    </div>
</div>