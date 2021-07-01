<div class="modal-content up" style="margin-top: 74px;">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Lớp học</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="Lop/Update/" method="POST">
            <div class="form-group">
                <label>Mã lớp</label>
                <input type="text" class="form-control" name="MaLop" value="<?php print_r($data['lop'][0]); ?>">
            </div>
            <div class="form-group">
                <label>Tên lớp</label>
                <input type="text" class="form-control" name="TenLop" value="<?php print_r($data['lop'][1]); ?>">
            </div>
            <div class="form-group">
                <label>Mã GVCN</label>
                <input type="text" class="form-control" name="MaGVCN" value="<?php print_r($data['lop'][2]); ?>">
            </div>
            <div class="form-group">
                <label>Ma Khoa</label>
                <input type="text" class="form-control" name="MaKhoa" value="<?php print_r($data['lop'][3]); ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary" name="submit">Lưu thay đổi</button>
            </div>
        </form>
    </div>
</div>