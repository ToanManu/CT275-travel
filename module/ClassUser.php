<?php


class ClassUser
{
    private $conect;
    public function __construct()
    {
        require_once "ConnectDatabase.php";
        $this->conect = new connectDatabase();
        $this->conect = $this->conect->connect();
    }

    public function getlistUser()
    {
        if (!$this->conect) {
            return false;
        } else {
            $data = array(array());
            $sql = "SELECT * from user ";
            $getdata = mysqli_query($this->conect, $sql);
            if (mysqli_num_rows($getdata) <= 0) return false;
            else {
                $dem = 0;
                while ($linedata = mysqli_fetch_assoc($getdata)) {
                    $data[$dem][0] = $linedata['id'];
                    $data[$dem][1] = $linedata['email'];
                    $data[$dem][2] = $linedata['password'];
                    $data[$dem][3] = $linedata['name'];
                    $data[$dem][4] = $linedata['phonenumber'];
                    $data[$dem][5] = $linedata['address'];
                    $dem++;
                }
            }
            return $data;
        }
        return false;
    }
    public function deleteUserByID($id)
    {
        $sql = "delete from user where email = '$id'";
        $sql2 = "delete from comment_travelviewing where id_user = '$id'";
        $sql3 = "delete from comment where id_user = '$id'";
        try {
            mysqli_query($this->conect, $sql);
            mysqli_query($this->conect, $sql2);
            mysqli_query($this->conect, $sql3);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    public function getUserByid($email)
    {
        if (!$this->conect) {
            return false;
        } else {
            $data = array(array());
            $sql = "SELECT * from user where  email='$email'";
            $getdata = mysqli_query($this->conect, $sql);
            if (mysqli_num_rows($getdata) <= 0) return false;
            else {
                $datart = mysqli_fetch_assoc(mysqli_query($this->conect, $sql));
                return $datart;
            }
            return $data;
        }
        return false;
    }
}
