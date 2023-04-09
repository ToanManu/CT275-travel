<?php
if(isset($_POST['title'])){
    $name = $_POST['title'];
    $pathav = "../upload/image/noavata.jpg";
    $pathav2 = "../upload/image/noavata.jpg";
    $pathav3 = "../upload/image/noavata.jpg";
    $post=$_POST['post'];
    $code =  $_POST['code'];
    $date=  $_POST['Dday'];
    $time =  $_POST['time'];
    $startingplace =  $_POST['startingplace'];
    $ToLocation =  $_POST['ToLocation'];
    $Numberofseats =  $_POST['Numberofseats'];

    if($_FILES['imgInp']['error'] == 0)
    {
        //lay phan mo rong cua file
        $imageFileType = pathinfo($_FILES['imgInp']['name'],PATHINFO_EXTENSION);
        //cac kieu file hop le
        $allowtypes = array('jpg', 'png');
        if (in_array($imageFileType,$allowtypes ))
        {
            $file = $_FILES['imgInp']['tmp_name'];
            $pathav = "../upload/image/".$_FILES['imgInp']['name'];
            move_uploaded_file($file, $pathav);
            $pathav = substr($pathav, 1);
        }else{
            echo '<script>alert("Tất cả ảnh phải có định dạng JPG, PNG")</script>';
        }
    }
    if($_FILES['imgInp2']['error'] == 0)
    {
        //lay phan mo rong cua file
        $imageFileType = pathinfo($_FILES['imgInp2']['name'],PATHINFO_EXTENSION);
        //cac kieu file hop le
        $allowtypes = array('jpg', 'png');
        if (in_array($imageFileType,$allowtypes ))
        {
            $file = $_FILES['imgInp2']['tmp_name'];
            $pathav2 = "../upload/image/".$_FILES['imgInp2']['name'];
            move_uploaded_file($file, $pathav2);
            $pathav2 = substr($pathav2, 1);
        }else{
            echo '<script>alert("Tất cả ảnh phải có định dạng JPG, PNG")</script>';
        }
    }
    if($_FILES['imgInp3']['error'] == 0)
    {
        //lay phan mo rong cua file
        $imageFileType = pathinfo($_FILES['imgInp3']['name'],PATHINFO_EXTENSION);
        //cac kieu file hop le
        $allowtypes = array('jpg', 'png');
        if (in_array($imageFileType,$allowtypes ))
        {
            $file = $_FILES['imgInp3']['tmp_name'];
            $pathav3= "../upload/image/".$_FILES['imgInp3']['name'];
            move_uploaded_file($file, $pathav3);
            $pathav3 = substr($pathav3, 1);
        }else{
            echo '<script>alert("Tất cả ảnh phải có định dạng JPG, PNG")</script>';
        }
    }
    require_once "./module/TraveModule.php";
    $travel = new TraveModule();
    $return = $travel->addTravel($name, $pathav, $pathav2, $pathav3,$post, $code, $date,$time,$startingplace,$ToLocation,$Numberofseats);
    if(false==true) echo '<script>alert("Địa điểm đã được thêm")</script>';
    else  echo '<script>alert("Địa điểm chưa được thêm")</script>';
   echo '<script>window.location="./?select=travelviewing";</script>';
}
require_once "./views/addTravelView.html";
?>