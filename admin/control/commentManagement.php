<?php
require_once "../module/comment.php";
$getlist  = new comment();
if(isset($_GET['dele'])){
    $id = $_GET['dele'];
    $classify = $_GET['classify'];
    $getlist  = $getlist ->deleteCommentByID($id, $classify);

    if($getlist==true) echo '<script>alert("Comment đã được xóa!!")</script>';
    else echo '<script>alert("Comment không thể xóa!!")</script>';
    echo '<script>window.location="../admin/?select=commentManagement";</script>';
}
require_once "./views/commentMagementView.html";
?>

