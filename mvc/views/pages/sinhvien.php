<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <!-- bnt add-->
            <div class="btn-toolbar justify-content-between">
              <div>
                <h4 class="card-title ">Danh sách sinh viên</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
              </div>
              <div>
                <!-- sang-bntadd -->
                <a href="javascript:;" class="btn btn-primary btn-round " data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Thêm mới</a>
              </div>
            </div>

            <!-- end bnt add -->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>Mã sinh viên</th>
                  <th>Tên sinh viên</th>
                  <th>Giới tính</th>
                  <th>Tên lớp</th>
                  <th>Quê quán</th>
                  <th>
                    <p class="thEnd">chọn</p>
                  </th>
                </thead>
                <tbody>
                  <?php
                  foreach ($data["sinhvien"] as $value) {
                  ?>
                    <tr>
                      <td>
                        <?php echo $value["MaSV"] ?>
                      </td>
                      <td>
                        <a href="SinhVien/Update/<?php echo sprintf("%s/%s/%s/%s/%s", $value["MaSV"], $value["TenSV"], $value['GioiTinh'], $value['MaLop'], $value['QueQuan']) ?> ">
                          <?php echo $value["TenSV"] ?>
                        </a>
                      </td>
                      <td>
                        <?php echo ($value["GioiTinh"] ? "Nam" : "Nữ")  ?>
                      </td>
                      <td>
                        <?php echo $value['TenLop']; ?>
                      </td>
                      <td>
                        <?php echo $value["QueQuan"] ?>
                      </td>
                      <td class="text-primary">
                        <a onclick="return confirm('Xác nhận xoá <?php echo $value['TenSV'] ?>? ')" href="/SinhVien/Delete/<?php echo $value['MaSV']; ?>" class="btn btn-primary btn-round">Xóa</a>
                      </td>
                    </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>