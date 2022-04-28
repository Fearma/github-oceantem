<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
switch($action){
    case 'department':
        echo '<form action="process_created_department.php?action=department" method="POST">
        Tên phòng: <input type="text" name="name_department"><br>
        Tên Trưởng Phòng: <input type="text" name="own_department"><br>
        <button>Thêm</button>
        </form>';
        break;
    case 'position':
        echo '<form action="process_created_department.php?action=position" method="POST">
        Chức vụ: <input type="text" name="name_position"><br>
        <button>Thêm</button>
        </form>';
        break;
}
