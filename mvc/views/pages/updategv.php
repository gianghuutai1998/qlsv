<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">thông tin giáo viên</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" method="POST">
            <div class="form-group">
              <label for="MaGV">Mã giáo viên</label>
              <input type="text" class="form-control" id="MaGV">
            </div>
            <div class="form-group">
              <label for="TenGV">Tên giáo viên</label>
              <input type="text" class="form-control" id="TenGV">
            </div>
            <div class="form-group">
              <label>Giới tính</label>

              <style>
                .form-check-new{
                  padding-left: 18px;
                }
              </style>
             
              <div class="form-check-new">
                <input class="form-check-input" type="radio" name="GioiTinh" id="Nam">
                <label class="form-check-label" for="Nam">
                  Nam
                </label>
              </div>
              <div class="form-check-new">
                <input class="form-check-input" type="radio" name="GioiTinh" id="Nu">
                <label class="form-check-label" for="Nu">
                  Nữ
                </label>
              </div>
            

            </div>
            <div class="form-group">
              <label for="Quequan">Quê quán</label>
              <input type="text" class="form-control" id="Quequan">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary">Lưu thay đổi</button>
        </div>
      </div>
    </div>
  </div>