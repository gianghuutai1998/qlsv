<div class="modal-content up" style="margin-top: 74px;">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Môn học</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="SinhVien/Update/" method="POST">
            <div class="form-group">
                <label for="MaSV">Mã môn học</label>
                <input type="text" class="form-control" id="MaSV" name="MaSV" value="<?php print_r($data['sinhvien'][0]); ?>">
            </div>
            <div class="form-group">
                <label for="TenGV">Tên môn học</label>
                <input type="text" class="form-control" id="TenSV" name="TenSV" value="<?php print_r($data['sinhvien'][1]); ?>">
            </div>
            <div class="form-group">
                <label for="Quequan">Lớp</label>
                <input type="text" class="form-control" id="MaLop" name="MaLop" value="<?php print_r($data['sinhvien'][3]); ?>">
            </div>
            <div class="form-group">
                <label for="Quequan">Số tín chỉ</label>
                <input type="text" class="form-control" id="QueQuan" name="QueQuan" value="<?php print_r($data['sinhvien'][4]); ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary" name="submit">Lưu thay đổi</button>
            </div>
        </form>
    </div>
</div>