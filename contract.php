<h3 class="title">THÔNG TIN HỢP ĐỒNG</h3>
<div class="content__sumary">
    <div class="content__sumary__items">
     <a href="created_department.php?action=insurance">Tạo bảo hiểm mới</a>
     <!--search từ đây-->
    <form action="header.php" method="get">
    <input type="hidden" name="action" value="contract.php">
    <?php 
    $search="";
    if(isset($_GET["search"])){
        $search=$_GET["search"];
    }
    ?>
    Search: <input type="text" name="search" value="<?php echo $search;?>" placeholder="Tìm loại bảo hiểm">
    <button><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <a href="header.php?action=contract.php" >Xem tất cả</a>
    <!--đến đây(dưới còn nữa)-->
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
            //Từ đây nữa nhé thêm chỗ WHERE tên_cột LIKE '%$search%'"
            $sql= "SELECT * from BaoHiem WHERE loaiBaohiem LIKE '%$search%'";
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
        <form action="header.php" method="get">
        <input type="hidden" name="action" value="departments.php">
    <?php 
        $search="";
        if(isset($_GET["search"])){
            $search=$_GET["search"];
                }
    ?>
    Search: <input type="text" name="search" value="<?php echo $search;?>" placeholder="Tìm phòng ban">
    <button><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <a href="header.php?action=departments.php" >Xem tất cả</a>
    <?php
            require "conn.php";
            //Từ đây nữa nhé thêm chỗ WHERE tên_cột LIKE '%$search%'"
            $sql= "SELECT * from phongBan WHERE tenPhong  LIKE '%$search%'";
            ?> 
                 <?php 
        mysqli_close($connect);
         ?>

         </div>
         <div>  
        <form action="header.php" method="get">
        <input type="hidden" name="action" value="department.php">
    <?php 
        $search="";
        if(isset($_GET["search"])){
            $search=$_GET["search"];
                }
    ?>
    Search: <input type="text" name="search" value="<?php echo $search;?>" placeholder="Tìm chức vụ">
    <button><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <a href="header.php?action=departments.php" >Xem tất cả</a>
    <?php
            require "conn.php";
            //Từ đây nữa nhé thêm chỗ WHERE tên_cột LIKE '%$search%'"
            $sql= "SELECT * from chucVu WHERE tenChucVu  LIKE '%$search%'";
            ?> 
                 <?php 
        mysqli_close($connect);
         ?>

         </div>
<div>