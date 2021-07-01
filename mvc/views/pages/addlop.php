<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Điền thông tin lớp học</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/Lop/Add" method="POST">
            <div class="form-group">
              <label for="MaMH">Mã Lớp</label>
              <input type="text" class="form-control" name="MaLop">
            </div>
            <div class="form-group">
              <label for="TenMH">Tên Lớp</label>
              <input type="text" class="form-control" name="TenLop">
            </div>
            <div class="form-group">
              <label for="SoTinChi">Mã GVCN</label>
              <input type="text" class="form-control" name="MaGVCN">
            </div>
            <div class="form-group">
              <label for="SoTinChi">Mã Khoa</label>
              <input type="text" class="form-control" name="MaKhoa">
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