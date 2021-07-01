<div class="content">

  <!-- sang tabel-xóa ở đay -->

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
            </div>

            <!-- end bnt add -->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>Mã sinh viên</th>
                  <th>Tên sinh viên</th>
                  <th>Lớp</th>
                  <th>Khoa</th>
                </thead>
                <tbody>
                  <?php
                  foreach ($data["home"] as $value) {
                  ?>
                    <tr>
                      <td>
                        <?php echo $value["MaSV"] ?>
                      </td>
                      <td>
                        <a href="SinhVien"><?php echo $value["TenSV"] ?></a>
                      </td>
                      <td>
                        <?php echo $value['TenLop']; ?>
                      </td>
                      <td>
                        <?php echo $value["TenKhoa"] ?>
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