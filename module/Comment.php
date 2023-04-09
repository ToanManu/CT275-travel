<?php


class Comment
{
    private $conect;

    public function __construct()
    {
        require_once "ConnectDatabase.php";
        $this->conect = new connectDatabase();
        $this->conect = $this->conect->connect();
    }

    public function getlistComment()
    {
        if (!$this->conect) {
            return false;
        } else {
            $data = array(array());
            $sql = "SELECT * from comment ";
            $getcmtPost = mysqli_query($this->conect, $sql);

            $sql = "SELECT * from comment_travelviewing ";
            $getcmtTravel = mysqli_query($this->conect, $sql);
            if (mysqli_num_rows($getcmtPost) <= 0 && mysqli_num_rows($getcmtTravel) <=0) {
                return array();
            }
            else {
                $dem = 0; $check=0; $check2=0;
                while (true) {
                    if($data2 = mysqli_fetch_assoc($getcmtTravel))
                    {
                        $data[$dem][0]=1;
                        $data[$dem][1]=$data2['id'];
                        $data[$dem][2]=$data2['id_user'];
                        $data[$dem][3]=$data2['id_post'];
                        $data[$dem][4]=$data2['cmt'];
                        $dem++;
                    }else{
                        if($check2==1) break;
                        else $check=1;
                    }
                    if($data1 = mysqli_fetch_assoc($getcmtPost)){
                        $data[$dem][0]=0;
                        $data[$dem][1]=$data1['id'];
                        $data[$dem][2]=$data1['id_user'];
                        $data[$dem][3]=$data1['id_post'];
                        $data[$dem][4]=$data1['cmt'];
                        $dem++;
                    } else {
                        if($check==1) break;
                        else $check2=1;
                    }
                }
            }
            return $data;
        }
        return array();
    }

    public function deleteCommentByID($id, $classify)
    {
       if($classify == 0) $sql = "delete from comment where id = $id";
       else  $sql = "delete from comment_travelviewing where id = $id";
       echo $sql;
        try {
            mysqli_query($this->conect, $sql);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
