<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
switch($action){
    case '':
        echo "NGHỊCH LINH TINH GÌ THẾ";
        break;
    case 'department':
        echo '<form action="process_created_department.php?action='.$action.'" method="POST">
        Tên phòng: <input type="text" name="name_department"><br>
        Tên Trưởng Phòng: <input type="text" name="own_department"><br>
        <button>Thêm</button>
        </form>';
        break;
    case 'position':
        echo '<form action="process_created_department.php?action='.$action.'" method="POST">
        Chức vụ: <input type="text" name="name_position"><br>
        <button>Thêm</button>
        </form>';
        break;
    case 'insurance':
        echo '<form action="process_created_department.php?action='.$action.'" method="POST">
        Loại bảo hiểm: <input type="text" name="name_insurance"><br>
        Số tiền bảo hiểm: <input type="number" step="0.01" name="money_insurance">%<br>
        <button>Thêm</button>
        </form>';
        break;
}
