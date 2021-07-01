<div class="modal-content up" style="margin-top: 74px;">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Update Môn học</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form action="/MonHoc/Update/" method="POST">
      <div class="form-group">
        <label for="MaGV">Mã môn học</label>
        <input type="text" class="form-control" id="MaMH" name="MaMH" value="<?php print_r($data['monhoc'][0]); ?>">
      </div>
      <div class="form-group">
        <label for="TenGV">Tên môn học</label>
        <input type="text" class="form-control" id="TenMH" name="TenMH" value="<?php print_r($data['monhoc'][1]); ?>">
      </div>
      <div class="form-group">
        <label for="Quequan">Số tín chỉ</label>
        <input type="text" class="form-control" id="SoTC" name="SoTC" value="<?php print_r($data['monhoc'][2]); ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" name="submit">Lưu thay đổi</button>
      </div>
    </form>
  </div>
</div>