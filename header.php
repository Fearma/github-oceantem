<!doctype html>
<html lang="en">
  <head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&display=swap" rel="stylesheet">
    <link href="fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="body.css">
    <body>
        <header>
            <ul class="header__navbar header__navbar--left">
                <li class="header__navbar__items">
                    <a id="menu-on"><i class="fa-solid fa-bars" ></i></a>
                </li>
                <li class="header__navbar__items">
                    <i class="fa-solid fa-address-book"></i><span style="font-size:20px"> Thông tin nhân sự</span> 
                </li>
                <li class="header__navbar__items">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" id="search-box" placeholder="Tìm theo mã nhân viên, địa chỉ, email, ...">
                </li>
            </ul>
            <ul class="header__navbar header__navbar--right">
                <li class="header__navbar__items">
                    <i class="fa-solid fa-bell"></i>
                </li>
                <li class="header__navbar__items">
                    <i class="fa-solid fa-circle-question"></i>
                </li>
                <li class="header__navbar__items" id="img-admin">
                    <img src="https://previews.123rf.com/images/bsd555/bsd5552003/bsd555200302924/143157301-admin-support-blue-rgb-color-icon-virtual-assistant-online-consultant-manager-managing-and-assistanc.jpg">
                </li>
            </ul>
        </header>
        <section>
            <div id="navbar__expand">
                <ul class="navbar__expand__box-menu">
                    <li class="navbar__expand__items">
                        <a href="?action=home.php"><i class="fa-solid fa-house-chimney"></i> Tổng quan</a>
                    </li>
                    <li class="navbar__expand__items">
                        <a href="?action=employee.php"><i class="fa-solid fa-user"></i> Nhân viên</a>
                    </li>
                    <li class="navbar__expand__items">
                        <a href="?action=contract.php"><i class="fa-solid fa-file-contract"></i> Hợp đồng</a>
                    </li>
                    <li class="navbar__expand__items">
                        <a href="?action=departments.php"><i class="fa-solid fa-folder-tree"></i> Phòng ban <br>& Chức vụ</a>
                    </li>
                    <li class="navbar__expand__items">
                        <a href="?action=timekeeping.php"><i class="fa-solid fa-calculator"></i> Chấm công</a>
                    </li>
                    <li class="navbar__expand__items">
                        <a href="?action=history.php"><i class="fa-solid fa-clock-rotate-left"></i>Lịch sử</a>
                    </li>
                    <li class="navbar__expand__items navbar__expand__items--bottom">
                        <a href="#" id="menu-off"><i class="fa-solid fa-angle-left"></i> Thu gọn</a>
                    </li>
                </ul>
            </div>
            <div id="content__homepage">
                <?php
                if(isset($_GET['action'])){
                    $url = $_GET['action'];
                }else{
                    $url="home.php";
                }
                include $url;
                ?>
            </div>
        </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="navbar-menu.js"></script>
</body>
</html>