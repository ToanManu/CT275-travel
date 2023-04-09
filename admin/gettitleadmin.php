<?php
    if(isset($_POST['act'])) echo '<title>Đăng xuất</title>';
    if(!isset($_SESSION['loginadmin']))  echo '<title>Đăng nhập</title>';
    else echo '<title>Trang quản trị</title>';
    ?>