<h3 class="title">THÔNG TIN HỢP ĐỒNG</h3>
<div class="content__sumary">
    <div class="content__sumary__items">
     <a href="created_department.php?action=insurance">Tạo bảo hiểm mới</a>
     <table border="1" width="100%">
         <tr>
             <td>Mã</td>
             <td>Loại bảo hiểm</td>
             <td>Tiền bảo hiểm</td>
             <td></td>
             <td></td>
         </tr>
         <?php
            require "conn.php";
            $sql= "SELECT * from BaoHiem";
            $result= mysqli_query($connect,$sql); 
            foreach($result as $each){
         ?> 
         <tr>
             <td><?php echo $each['id'] ?></td>
             <td><?php echo $each['loaiBaohiem'] ?></td>
             <td><?php echo $each['tienBaohiem']." %" ?></td>
             <td><a href="update_department.php?id=<?php echo $each['id']?>&action=insurance">Sửa</a></td>
             <td><a href="delete_department.php?id=<?php echo $each['id']?>&action=insurance">Xóa</a></td>
         </tr>
        <?php }
        mysqli_close($connect);
         ?>
     </table>   
    </div>
<div>