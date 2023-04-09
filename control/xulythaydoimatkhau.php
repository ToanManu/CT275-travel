<?php
class xulythaydoimatkhau {
    function __construct()
    {
        if(isset($_POST['oldpassword'])){
            $oldpass = $_POST['oldpassword'];
            $pass1 =  $_POST['new1password'];
            $pass2 =  $_POST['new2password'];
            if($pass1!=$pass2){
                echo '<script>alert("Mật khẩu không khớp...")</script>';
            }elseif(strlen($pass2) < 5){
                echo '<script>alert("Mật khẩu phải lớn hơn 5 ký t..")</script>';
               
            } else{
                require_once "./module/Account.php";
                $accout = new Account();
                $emal = $_SESSION['email'];
                $access = $accout->ChangePassword($emal, $oldpass, $pass1);
                if($access==true) echo '<script>alert("Mật khẩu đã được thay đổi...")</script>';
                else echo '<script>alert("Thay đổi mật khẩu thất bại...")</script>';
            }
            echo '<script>window.location="./account.php";</script>'; 
        }
    }
}
$render = new xulythaydoimatkhau();
?>