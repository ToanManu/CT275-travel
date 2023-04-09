<?php


class UserModule
{
    private $getconect;
    private $conect=false;
    function __construct() {
        require_once "../module/ConnectDatabase.php";
        $this->getconect = new connectDatabase();
        $this->conect = $this->getconect->connect();
    }
    public function editAdminInformation($email, $ten, $diachi)
    {
        if(!$this->getconect){
            return false;
        }
        try{
            mysqli_query($this->conect,"UPDATE user set email = '$email', name = '$ten', address='$diachi'  where id = 0");
            return true;
        }catch (Exception $e){return false;}
        return false;
    }
    public function getAdminInformation()
    {
        if(!$this->getconect){
            return false;
        }
        try{
            $data = mysqli_fetch_assoc(mysqli_query($this->conect, "SELECT * from user where id = 0"));
            return $data;
        }catch (Exception $e){
            return false;
        }
        return false;
    }
    public function editAdminPhoneNumber($sdt)
    {
        if(!$this->getconect){
            return false;
        }
        try{
            mysqli_query($this->conect,"UPDATE user set 	phonenumber = '$sdt' where id = 0");
            return true;
        }catch (Exception $e){return false;}
        return false;
    }

    public function getAdminPhoneNumber()
    {
        if(!$this->getconect){
            return false;
        }
        try{
            $data = mysqli_fetch_assoc(mysqli_query($this->conect, "SELECT phonenumber from user where id = 0"))['phonenumber'];
            return $data;
        }catch (Exception $e){
            return false;
        }
        return false;
    }
    public function editAdminPassword($newpass, $newpass1, $passold)
    {
        if(!$this->getconect){
            return false;
        }
        if($newpass!=$newpass1){
            echo '<script>alert("Thay đổi thất bại, mật khẩu không khớp")</script>';
            return false;
        }
        else if(strlen($newpass) < 5) {
            echo '<script>alert("Thay đổi thất bại, mật khẩu phải có trên 5 ký tự")</script>';
            return false;
        }
        else{
            require_once "../module/ConnectDatabase.php";
            $getconect = new connectDatabase();
            $conn =  $getconect->connect();
            $getdata = mysqli_query($conn, "SELECT password from user where id = 0");
            $adminpass = mysqli_fetch_assoc($getdata)['password'];

            if($passold != $adminpass){
                echo '<script>alert("Thay đổi thất bại, mật khẩu xác nhận không đúng")</script>';
                return false;
            }
            else{
                mysqli_query($conn,"UPDATE user set password = '$newpass' where id = 0");
                echo '<script>alert("Mật khẩu đã được thay đổi thành công")</script>';
                return true;
            }
        }
        return false;
    }

    public function editUserInformation($email, $phonenumber, $pass,$name, $address, $getid)
    {
        if(!$this->getconect){
            return false;
        }
        require_once "../include/classnumber.php";
        $classnumber = new classnumber;
        $hl = true;
        if(strlen(strstr($email,"@")) <= 0 || strlen(strstr($email,".")) <= 0){
            echo '<script>alert("Email không hợp lệ...")</script>';
            $hl = false;

        }
        if(!$classnumber->itemstringisnumber($phonenumber)){
            echo '<script>alert("Số điện thoại không hợp lệ...")</script>';
            $hl = false;
        }
        if($hl==true){
            $sql = " UPDATE user SET email='$email', password = '$pass', name='$name', phonenumber='$phonenumber', address='$address' where id = $getid";
            echo $sql;
            mysqli_query($this->conect, $sql);
            echo '<script>alert("Thông tin đã được thay đổi đã được thay đổi...")</script>';
            return true;
        }
        return false;
    }

}