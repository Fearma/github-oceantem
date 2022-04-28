<?php
        $id = $_GET['id'];
        $action = $_GET['action'];
        //Kết nối DB
        require 'conn.php' ;
        switch( $action){
                case 'department':
                $sql = "DELETE FROM phongBan WHERE id = $id";
                mysqli_query($connect, $sql);
                mysqli_close($connect);
                header("location:header.php?action=departments.php");
                break;
                case 'position':
                $sql = "DELETE FROM chucVu WHERE id = $id";
                mysqli_query($connect, $sql);
                mysqli_close($connect);
                header("location:header.php?action=departments.php");
                break;
        }
        
        
?>