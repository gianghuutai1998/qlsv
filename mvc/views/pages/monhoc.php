<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <!-- bnt add-->
            <div class="btn-toolbar justify-content-between">
              <div>
                <h4 class="card-title ">Danh sách môn học</h4>
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
                  <th>Mã môn học</th>
                  <th>Tên môn học</th>
                  <th>Số tín chỉ</th>
                  <th>
                    <p class="thEnd">chọn</p>
                  </th>
                </thead>
                <tbody>
                  <?php
                  foreach ($data["monhoc"] as $value) {
                  ?>
                    <tr>
                      <td>
                        <?php echo $value["MaMH"] ?>
                      </td>
                      <td>
                        <a href="/MonHoc/Update/<?php
                                                echo sprintf("%s/%s/%s", $value["MaMH"],  $value["TenMH"], $value['SoTinChi']);
                                                ?>"><?php echo $value["TenMH"] ?></a>
                      </td>
                      <td>
                        <?php echo $value['SoTinChi']; ?>
                      </td>
                      <td class="text-primary">
                        <a onclick="return confirm('Xác nhận xoá <?php echo $value['TenMH'] ?>? ')" href="/MonHoc/Delete/<?php echo $value['MaMH']; ?>" class="btn btn-primary btn-round">Xóa</a>
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