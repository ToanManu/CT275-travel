<?php
if(isset($_GET['dele'])){
    $id = $_GET['dele'];
    require_once "./module/TraveModule.php";
    $travelmudule  = new TraveModule();
    $travelmudule  = $travelmudule ->DeleteByID($id);
    if($travelmudule== true) echo '<script>alert("Điểm du lịch đã được xóa!!")</script>';
    else echo '<script>alert("Điểm du lịch không thể xóa!!")</script>';
   echo '<script>window.location="../admin/?select=travelviewingMana";</script>';
}

if(isset($_GET['edit'])){
    $id = $_GET['id'];
    $name = $_GET['edit'];
    $getonmenu = $_GET['onmenu'];
    if($id === '0'){
        echo '<script>alert("Mục này không thể chỉnh sửa")</script>';
    }else{
     //   mysqli_query($conn, "UPDATE theloai set tentheloai = '$name', onmenu = $getonmenu where id = $id");
    }
   // echo '<script>window.location="'.$domain.'/admin/?chucnang=theloai";</script>';
}
require_once "./views/travelManageView.html"
?>