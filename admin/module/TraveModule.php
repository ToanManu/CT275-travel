<?php


class TraveModule
{
    private $getconect;
    private $conect=false;
    function __construct() {
        require_once "../module/ConnectDatabase.php";
        $this->getconect = new connectDatabase();
        $this->conect = $this->getconect->connect();
    }
    public function DeleteByID($id){
        if(!$this->getconect){
            return false;
        }
        $sql = "delete from travelviewing where id = $id";
        echo $sql;
        try {
            mysqli_query($this->conect, $sql);
            $sql = "delete from comment_travelviewing where id_post = $id";
            echo $sql;
            mysqli_query($this->conect, $sql);
            return true;
        }catch (Exception $e) {
            return false;
        }
    }
    public function deleteCommentById($id)
    {

    }

    public function addTravel($name, $pathav, $pathav2, $pathav3,$post, $code, $date,$time,$startingplace,$ToLocation,$Numberofseats)
    {
        if(!$this->getconect){
            return false;
        }
        try{
            $sql = "INSERT INTO travelviewing values(null,'$name', '$pathav', '$pathav2', '$pathav3','$post', '$code', '$date',$time,'$startingplace','$ToLocation',$Numberofseats)";
            echo $sql;
            mysqli_query($this->conect, $sql);
            return true;
        }catch (Exception $e)
        {
            return false;
        }
        return false;
    }

    public function editTravel($name,$post,$code,$date,$time,$startingplace,$ToLocation,$Numberofseats,$getid)
    {
        if(!$this->getconect){
            return false;
        }
        try{
            $sql = "UPDATE travelviewing  SET title = '$name', content = '$post',code= '$code', Dday = '$date',time = $time,startingplace = '$startingplace',ToLocation = '$ToLocation',Numberofseats = $Numberofseats where  id=$getid";
            mysqli_query($this->conect, $sql);
            return true;
        }catch (Exception $e){return false;}
        return false;
    }
}