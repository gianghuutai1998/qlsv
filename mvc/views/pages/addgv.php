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
          <form action="" method="POST">
            <div class="form-group">
              <label for="addMaGV">Mã giáo viên</label>
              <input type="text" class="form-control" id="addMaGV" name="MaGV">
            </div>
            <div class="form-group">
              <label for="TenGV">Tên giáo viên</label>
              <input type="text" class="form-control" id="addTenGV" name="TenGV">
            </div>
            <div class="form-group">
              <label>Giới tính</label>
              <div class="form-check2">
                <input class="form-check-input2" type="radio" name="addGioiTinh" id="addNam" value="Nam" >
                <label class="form-check-label" for="addNam">
                  Nam
                </label>
              </div>
              <div class="form-check2">
                <input class="form-check-input2" type="radio" name="addGioiTinh" id="addNu" checked value="Nu">
                <label class="form-check-label" for="addNu">
                  Nữ
                </label>
              </div>

            </div>
            <div class="form-group">
              <label for="Quequan">Quê quán</label>
              <input type="text" class="form-control" id="addQuequan" name="QueQuan">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="addGVBtn">Lưu thông tin</button>
            </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>