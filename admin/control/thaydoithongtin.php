<?php
require_once "./module/UserModule.php";
$usermodule = new UserModule();
$data = $usermodule->getAdminInformation();
$email = $data['email'];
$ten = $data['name'];
$diachi = $data['address'];
if(isset($_POST['cgemail'])){
    $email=$_POST['cgemail'];
    $ten = $_POST['ten'];
    $diachi = $_POST['diachi'];
        require_once "./module/UserModule.php";
        $usermodule = new UserModule();
        $return = $usermodule->editAdminInformation($email, $ten, $diachi);
        if($return==true) echo '<script>alert("Thông tin admin đã được thay đổi thành công")</script>';
        else echo '<script>alert("Thông tin admin thay đổi không thành công")</script>';
}
require_once "./views/editAdminInformationViews.html";
?>