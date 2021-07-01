<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <!-- bnt add-->
            <div class="btn-toolbar justify-content-between">
              <div>
                <h4 class="card-title ">Danh sách các lớp</h4>
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
                  <th>
                    Mã Lớp
                  </th>
                  <th>
                    Tên Tên lớp
                  </th>
                  <th>
                    Mã Khoa
                  </th>
                  <th>
                    Mã Giáo viên CN
                  </th>
                  <th>
                    <p class="thEnd">chọn</p>
                  </th>
                </thead>
                <tbody>
                  <?php
                  foreach ($data["lop"] as $value) {
                  ?>
                    <tr>
                      <td>
                        <?php echo $value["MaLop"] ?>
                      </td>
                      <td>
                        <a href="/Lop/Update/<?php
                                                echo sprintf("%s/%s/%s/%s", $value["MaLop"],  $value["TenLop"], $value['MaGVCN'], $value['MaKhoa']);
                                                ?>"><?php echo $value["TenLop"] ?></a>
                      </td>
                      <td>
                        <?php echo $value['MaKhoa']; ?>
                      </td>
                      <td>
                        <?php echo $value['MaGVCN']; ?>
                      </td>
                      <td class="text-primary">
                        <a onclick="return confirm('Xác nhận xoá <?php echo $value['TenLop'] ?>? ')" href="/Lop/Delete/<?php echo $value['MaLop']; ?>" class="btn btn-primary btn-round">Xóa</a>
                      </td>
                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>