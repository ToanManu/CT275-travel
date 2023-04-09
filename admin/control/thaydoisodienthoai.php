<?php
require_once "./module/UserModule.php";
$usermodule = new UserModule();
$sdt = $usermodule->getAdminPhoneNumber();
if(isset($_POST['sdt'])){
    $sdt=$_POST['sdt'];
    require_once "./module/UserModule.php";
    $usermodule = new UserModule();
    $return = $usermodule->editAdminPhoneNumber($sdt);
    if($return==true) echo '<script>alert("Số điện thoại đã được thay đổi")</script>';
    else echo '<script>alert("Số điện thoại thay đổi thất bại)</script>';
}
require_once "./views/thaydoisodienthoai.html";
?>

