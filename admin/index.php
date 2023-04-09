<!DOCTYPE html>
<html lang="en">
<head>
   <?php  session_start();
   include 'gettitleadmin.php'?>
    <meta charset="UTF-8">
    <link rel="icon" href="../upload/image/iconadmin.jpg">
    <link rel="stylesheet" href="../include/style/mycss89.css">
    <link rel="stylesheet" href="../include/style/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../include/script/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="../include/fontawesome/css/all.css">
</head>
<body style="background: #dedede">
    <?php
    if(isset($_POST['email'])){
        $taikhaon = $_POST['email'];
        $pass = $_POST['password'];
        require_once "../module/ConnectDatabase.php";
        $getconect = new connectDatabase();
        $getconect = $getconect->connect();
        $sql = "SELECT password FROM user where id=0";
        $getpass = mysqli_fetch_assoc(mysqli_query($getconect, $sql))['password'];
        if($taikhaon === 'admin' && $pass=== $getpass){
            $_SESSION['loginadmin'] = 1;
        }
    }else if(isset($_SESSION['email'])){
        if($_SESSION['email'] === 'admin')  $_SESSION['loginadmin'] = 1;
    }
    if(isset($_POST['act'])){
        unset( $_SESSION['loginadmin']);
        unset($_SESSION['email']);
    }
    if(isset($_SESSION['loginadmin'])) include 'mannager.php';
    else require_once 'login.html';
    ?>
</body>
</html>