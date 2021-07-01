<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm sinh viên</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="SinhVien/AddSV" method="POST">
            <div class="form-group">
              <label for="MaGV">Mã sinh viên</label>
              <input type="text" class="form-control" id="MaSV" name="MaSV">
            </div>
            <div class="form-group">
              <label for="TenGV">Tên sinh viên</label>
              <input type="text" class="form-control" id="TenSV" name="TenSV">
            </div>
            <div class="form-group">
              <label>Giới tính</label>
              <div class="form-check2">
                <input class="form-check-input2" type="radio" name="GioiTinh" id="1" value="1">
                <label class="form-check-label" for="1">
                  Nam
                </label>
              </div>
              <div class="form-check2">
                <input class="form-check-input2" type="radio" name="GioiTinh" id="0" value="0" checked>
                <label class="form-check-label" for="1">
                  Nữ
                </label>
              </div>
            </div>
            <!-- <div class="form-group">
              <label for="Quequan">Mã lớp</label>
              <input type="text" class="form-control" id="MaLop" name="MaLop">
            </div> -->
            <div class="form-group">
                <label>Lớp</label>
                <select class="form-control" name="MaLop">
                    <?php 
                        foreach ($data['lop'] as $lop) {?> 
                       <option value="<?php echo $lop["MaLop"]?>"><?php echo $lop["TenLop"]?></option>;
                   <?php } ?>
                    
                </select>
            </div>
            <div class="form-group">
              <label for="Quequan">Quê quán</label>
              <input type="text" class="form-control" id="QueQuan" name="QueQuan">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
