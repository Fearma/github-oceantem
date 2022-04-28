<h3 class="title">PHÒNG BAN & CHỨC VỤ</h3>
<div class="content__sumary">
    <div class="content__sumary__items">
        <div class="content__sumary__items__title">
            <h5>Tổng số phòng ban</h5>
            <a href="?action=employee.php">Chi tiết</a>
        </div>
        <div class="content__sumary__items__value">
            <img src="https://cdn-icons-png.flaticon.com/512/1642/1642256.png" id="img-employee">            
            <?php
                require "conn.php";
                $sql="SELECT COUNT(*) as tongPhong FROM phongban";
                $result=mysqli_query($connect,$sql);
                foreach ($result as $each){
                    ?>
                    <span id="number-employee">
                        <?php echo $each['tongPhong']." Phòng";?>
                    <?php
                }
                mysqli_close($connect);
            ?>
            </span>
        </div>
    </div>
    <div class="content__sumary__items">
        <div class="content__sumary__items__title">
            <h5>Tổng số Chức vụ</h5>
            <a href="?action=employee.php">Chi tiết</a>
        </div>
        <div class="content__sumary__items__value">
            <img src="https://media.istockphoto.com/vectors/job-position-color-icon-vector-id1173940448?k=20&m=1173940448&s=170667a&w=0&h=DjLnK5bHcI4ma-PgPby8va2jnPFI_KkPbCGE-xouboE=" id="img-employee">            
            <?php
                require "conn.php";
                $sql="SELECT COUNT(*) as tongChucVu FROM chucVu";
                $result=mysqli_query($connect,$sql);
                foreach ($result as $each){
                    ?>
                    <span id="number-employee">
                        <?php echo $each['tongChucVu']." Chức vụ";?>
                    <?php
                }
                mysqli_close($connect);
            ?>
            </span>
        </div>
    </div>
</div>
<div class="content__sumary">
    <div class="content__sumary__items">
        <h5>Danh sách phòng ban</h5>
        <a href="created_department.php?action=department">Tạo phòng mới</a>
        <table border="1" width="100%">
            <tr>
                <th>Mã</th>
                <th>Tên phòng</th>
                <th>Tên trưởng phòng</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            require "conn.php";
            $sql="SELECT * FROM phongBan";
            $result=mysqli_query($connect,$sql);
            foreach ($result as $each){?>
            <tr>
                <td><?php echo $each['id']?></td>
                <td><?php echo $each['tenPhong']?></td>
                <td><?php echo $each['tenTruongPhong']?></td>
                <td><a href="update_department.php?id=<?php echo $each['id']?>&action=department">Sửa</a></td>
                <td><a href="delete_department.php?id=<?php echo $each['id']?>&action=department">Xóa</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="content__sumary__items">
        <img src="https://files.muzli.space/319114a7b2363e08515ff485d65e3b91.jpeg" width="100%">
    </div>
    <div class="content__sumary__items">
        <h5>Danh sách Chức vụ</h5>
        <a href="created_department.php?action=position">Tạo Chức vụ mới</a>
        <table border="1" width="100%">
            <tr>
                <th>Mã</th>
                <th>Tên chức vụ</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            require "conn.php";
            $sql="SELECT * FROM chucVu";
            $result=mysqli_query($connect,$sql);
            foreach ($result as $each){?>
            <tr>
                <td><?php echo $each['id']?></td>
                <td><?php echo $each['chucVu']?></td>
                <td><a href="update_department.php?id=<?php echo $each['id']?>&action=position">Sửa</a></td>
                <td><a href="delete_department.php?id=<?php echo $each['id']?>&action=position">Xóa</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>