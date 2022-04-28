<?php
    $id = $_GET['id'];
    $action= $_GET['action'];
    //Kết nối DB
    switch ($action){
        case 'department':
            require 'conn.php';
            $sql = "SELECT * FROM phongBan WHERE id = $id";
            $result = mysqli_query($connect,$sql);
            foreach ($result as $each){
        echo '
            <form action="process_update_department.php?action='.$action.'" method="post">
            <input type="hidden" name="id" value="'. $each['id'].'">
            Tên phòng: <input type="text" name="name_department" value="'. $each['tenPhong'].'"><br>
            Tên Trưởng Phòng: <input type="text" name="own_department" value="'. $each['tenTruongPhong'].'"><br>
            <button>Sửa</button>
            </form>';
            }
        break;
        case 'position':
            require 'conn.php';
            $sql = "SELECT * FROM chucVu WHERE id = $id";
            $result = mysqli_query($connect,$sql);
            foreach ($result as $each){
        echo '
            <form action="process_update_department.php?action='.$action.'" method="post">
            <input type="hidden" name="id" value="'. $each['id'].'">
            Chức vụ: <input type="text" name="name_position" value="'. $each['chucVu'].'"><br>
            <button>Sửa</button>
            </form>';
            }
        break;
        case 'insurance':
            require 'conn.php';
            $sql = " SELECT * from baoHiem where id = $id";
            $result = mysqli_query($connect,$sql);
            foreach ($result as $each) {
        echo '
            <form action="process_update_department.php?action='.$action.'" method="post">
            <input type="hidden" name="id" value="'. $each['id'].'">
            Loại bảo hiểm: <input type="text" name="name_insurance" value="'. $each['loaiBaohiem'].'"><br>
            Tiền bảo hiểm: <input type="number" step="0.01" name="money_insurance" value="'. $each['tienBaohiem'].'">%<br>
            <button>Sửa</button>
            </form>';
            }
        break;
    }
    mysqli_close($connect);
?>