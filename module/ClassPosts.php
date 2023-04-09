<?php
    class ClassPosts{
        private $getconect;
        public function __construct()
        {
            require_once "ConnectDatabase.php";
            $this->getconect = new connectDatabase();
            $this->getconect = $this->getconect->connect();
        }
        public function closeConect(){
            mysqli_close($this->getconect);
        }
        public function getlistTitleAndAvatar(){
            $sql = "SELECT * FROM posts";
            $data = mysqli_query($this->getconect, $sql);
            $count = mysqli_num_rows($data);
            if($count == 0) return array();
            else {
                $getdata = array(array());
                $dem=0;
                while($getdatabase = mysqli_fetch_assoc($data)){
                    $getdata[$dem][0]=$getdatabase['id'];
                    $getdata[$dem][1]=$getdatabase['name'];
                    $getdata[$dem][2]=$getdatabase['avatar'];
                    $dem++;
                }
                return $getdata;
            }
            return array();
        }

        
        public function getPostContent($id){
            $sql = "SELECT * FROM posts where id=$id";
            $data = mysqli_query($this->getconect, $sql);
            if(mysqli_num_rows($data) == 0) return null;
            else {
                $dt = mysqli_fetch_assoc($data)['posts'];
              //  echo $dt;
                return $dt;
            }
        }

        public function getPostTitle($id){
            $sql = "SELECT * FROM posts where id=$id";
            $data = mysqli_query($this->getconect, $sql);
            if(mysqli_num_rows($data) == 0) return null;
            else {
                $dt = mysqli_fetch_assoc($data)['name'];
              //  echo $dt;
                return $dt;
            }
        }

        public function DeletePost($id){
            $sql = "delete from posts where id = $id";
            echo $sql;
            try {
                mysqli_query($this->getconect, $sql);
                $sql = "delete from comment where id_post = $id";

                mysqli_query($this->getconect, $sql);
                return true;
            } catch (Exception $e) {
                return false;
            }
        }

        public function addcomment($email, $post, $cmt)
        {
         if(!$this->getconect){
             return false;
         } else {
                 $sql ="INSERT INTO comment values(NULL, '$email', $post, '$cmt')";
                 mysqli_query($this->getconect, $sql);
                 return true;
         }
         return false;
        }

        public function getListcomment($idpost){
            if(!$this->getconect){
                return false;
            }else{
                    $data = array(array());
                    $sql = "SELECT * from comment where id_post = '$idpost'";
                    $getdata = mysqli_query($this->getconect, $sql);
                    if(mysqli_num_rows($getdata) <= 0) return false;
                    else{
                        $dem=0;
                        while($linedata = mysqli_fetch_assoc($getdata)){
                            $data[$dem][0] = $linedata['cmt'];
                            $getiduserinpost =  $linedata['id_user'];
                         //   echo "id: ".$getiduserinpost; 
                         //   echo "---". $data[$dem][0]."----".$idpost;
                            $sql = "SELECT name from user where email = '$getiduserinpost'";
                         //   echo $sql;
                            $getNameuser = mysqli_fetch_assoc(mysqli_query($this->getconect, $sql))['name'];
                            $data[$dem][1] = $getNameuser;
                            $dem++;
                        }
                    }
                    return $data;
            }
            return false;
        }


    }
