<!DOCTYPE>
<html>
<head>
<script src="include/script/ckeditorbasic/ckeditor.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login user account </title>
        <link rel="icon" href="./upload/logodulichht.png">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle45646.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
        <?php session_start(); ?>
</head>
<body style=" background-image: url('upload/hinh-anh-du-lich-ha-long.jpg');">
<?php if(isset($_SESSION['email'])) {
    echo '<H1 style="color:#f22 ">Bạn đang đăng nhập</H1>';
    echo ' <script>
        var timer = setTimeout(function() {
            window.location="./"
        }, 3000);
    </script>';
    die();
} ?>
<?php include "./view/header.html" ?>
<?php include "./view/registrationform.html" ?>
    <?php
    include "./control/xulydangky.php"
    ?>

    <?php require_once "./view/footer.php"; ?>
</body>
</html>
