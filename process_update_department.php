<?php
$action='';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
$id = $_POST['id'];
switch($action){
    case '': 
        echo "NGHỊCH LINH TINH GÌ THẾ";
        break;
    case 'department':
        if(isset($_POST['name_department'])){
            $name_department = $_POST['name_department'];
        }
        if(isset($_POST['own_department'])){
            $own_department = $_POST['own_department'];
        }
        //Kết nối DB
        require 'conn.php';
        //sql
        $sql = "UPDATE phongBan SET tenPhong = '$name_department', tenTruongPhong = '$own_department' WHERE id = $id";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header("location:header.php?action=departments.php");
        break;
    case 'position':
        if(isset($_POST['name_position'])){
            $name_position = $_POST['name_position'];
        }
        //Kết nối DB
        require 'conn.php';
        //sql
        $sql = "UPDATE chucVu SET chucVu = '$name_position' WHERE id = $id";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header("location:header.php?action=departments.php");
        break;
    case 'insurance':
        if(isset($_POST['name_insurance'])){
            $name_insurance = $_POST['name_insurance'];
        }
        if(isset($_POST['money_insurance'])){
            $money_insurance = $_POST['money_insurance'];
        }
        //Kết nối DB
        require 'conn.php';
        //sql
        $sql = "UPDATE baoHiem SET loaiBaohiem = '$name_insurance', tienBaohiem = '$money_insurance' WHERE id = $id";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header("location:header.php?action=contract.php");
        break;    
}
    
    
?>