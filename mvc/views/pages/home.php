<?php 
// print_r($data["giaovien"]);
?>
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
           <div>
             <!-- sang-bntadd -->
             <a href="javascript:;" class="btn btn-primary btn-round " data-toggle="modal"
               data-target="#exampleModal1" data-whatever="@mdo">Thêm mới</a>
           </div>
         </div>

         <!-- end bnt add -->
       </div>
       <div class="card-body">
         <div class="table-responsive">
           <table class="table">
             <thead class=" text-primary">
               <th>
                 Mã sinh viên
               </th>
               <th>
                 Tên sinh viên
               </th>
               <th>
                 Lớp
               </th>
               <th>
                 Khoa
               </th>
               <th>
                 <p class="thEnd">chọn</p>
               </th>
             </thead>
             <tbody>
               
              <?php 
              
              ?>
              <?php 
              foreach($data["home"] as $value){
             ?>

                <tr>
                 <td>
                   <?php echo $value["MaSV"]?>
                 </td>
                 <td>
                   <a href="#" class="" data-toggle="modal" data-target="#exampleModal2"
                     data-whatever="@mdo"><?php echo $value["TenSV"]?></a>
                 </td>
                 <td>
                 <?php echo $value['TenLop'];?>
                 </td>
                 <td>
                 <?php echo $value["TenKhoa"]?>
                 </td>
                 <td class="text-primary">
                   <a href="javascript:;" class="btn btn-primary btn-round">Xóa</a>
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

<!-- xóa ở trên tới đay -->

</div>