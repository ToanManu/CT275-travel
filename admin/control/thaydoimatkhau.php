<?php
if(isset($_POST['pass'])){
    $passold=$_POST['pass'];
    $newpass = $_POST['newpass'];
    $newpass1 = $_POST['newpass1'];
    require_once "./module/UserModule.php";
    $usermodule = new UserModule();
    $usermodule->editAdminPassword($newpass, $newpass1, $passold);
}
require_once "./views/editAdminPassViews.html";
?>
