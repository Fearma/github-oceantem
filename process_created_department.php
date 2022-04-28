<?php
$action=$_GET['action'];
switch($action){
    case 'department':
        if(isset($_POST['name_department'])){
            $name_department = $_POST['name_department'];
        }
        if(isset($_POST['own_department'])){
            $own_department = $_POST['own_department'];
        }
        require 'conn.php';
        $sql = "INSERT INTO phongBan(tenPhong,tenTruongPhong) 
        VALUES ('$name_department','$own_department')";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header("location:header.php?action=departments.php");
        break;
    case 'position':
        if(isset($_POST['name_position'])){
            $name_position = $_POST['name_position'];
        }
        require 'conn.php';
        $sql = "INSERT INTO chucVu(chucVu) 
        VALUES ('$name_position')";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header("location:header.php?action=departments.php");
        break;
}
    
    
    