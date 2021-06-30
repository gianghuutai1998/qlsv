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
             <h4 class="card-title ">Simple Table</h4>
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
                 Mã giáo viên
               </th>
               <th>
                 Tên giáo viên
               </th>
               <th>
                 Giới tính
               </th>
               <th>
                 Quê quán
               </th>
               <th>
                 <p class="thEnd">chọn</p>
               </th>
             </thead>
             <tbody>
               
              <?php 
              
              ?>
              <?php 
              foreach($data["giaovien"] as $value){
                $gt = "Nu";
                if($value["GioiTinh"])
                $gt = "Nam";
             ?>

                <tr>
                 <td>
                   <?php echo $value["MaGV"]?>
                 </td>
                 <td>
                   <a href="#" class="" data-toggle="modal" data-target="#exampleModal2"
                     data-whatever="@mdo"><?php echo $value["TenGV"]?></a>
                 </td>
                 <td>
                    <?php echo $gt;?>  
                 </td>
                 <td>
                 <?php echo $value["QueQuan"]?>
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