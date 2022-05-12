<?php session_start();
if(isset($_SESSION['id'])){
    header('location:admin/index.php');} ?>
<form action="attendance.php" method="POST">
    username: <input type="text" name="username" id="username"><br><span id="username_error"></span><br>
    password: <input type="password" name="password" id="password"><br><span id="password_error"></span><br>
    <button onclick="return validate();">Đăng nhập</button>
</form>
<?php
$action= $_GET['action'] ?? '';
if($action == 't'){
    ?>
    <span id="successful">Successful</span>
    <?php
}else if($action == 'f'){
    ?>
    <span id="fail">Tài khoản hoặc mật khẩu không đúng</span>
    <?php
}else if($action == 'dup'){
    ?>
    <span id="duplicate">Hôm nay bạn đã chấm công rồi</span>
    <?php
}
?>
<?php
include 'jQuery.php';
?>
<script type="text/javascript">
    function validate() {
        check=0;
        username = $('#username').val();
        if(username.length > 0) {
            check++;
        }else{
            $('#username_error').text('ô này đang để trống');
        }
        password = $('#password').val();
        if(password.length > 0) {
            check++;
        }else{
            $('#password_error').text('ô này đang để trống');
        }
        if(check!=1){
            return true;
        }else{
            return false;
        }
    }
    url = location.href
    if(url!="http://localhost/quanliluong/index.php" )
    {
        setTimeout(()=>{
            window.location.replace('index.php')
        },5000)
    }
    
</script>
