<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Điền thông tin giáo viên</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/MonHoc/AddMonHoc" method="POST">
            <div class="form-group">
              <label for="MaMH">Mã Môn Học</label>
              <input type="text" class="form-control" id="MaMH" name="MaMH">
            </div>
            <div class="form-group">
              <label for="TenMH">Tên Môn Học</label>
              <input type="text" class="form-control" id="TenMH" name="TenMH">
            </div>
            <div class="form-group">
              <label for="SoTinChi">Số Tín Chỉ</label>
              <input type="text" class="form-control" id="SoTinChi" name="SoTinChi">
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