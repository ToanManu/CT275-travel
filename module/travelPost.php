<?php
    class travelPost
    {
        private $getconect;
        private $conect;
        function __construct() {
            require_once "ConnectDatabase.php";
            $this->getconect = new connectDatabase();
            $this->conect = $this->getconect->connect();
         }
        public function getlistTraleviewing(){
            
            $sql = "SELECT * FROM travelviewing";
            $data = mysqli_query($this->conect, $sql);
            $count = mysqli_num_rows($data);
            if($count == 0) {
                $this->getconect->dieconnect($this->conect); return array();
            }
            else {
                $getdata = array(array());
                $dem=0;
                while($getdatabase = mysqli_fetch_assoc($data)){
                    $getdata[$dem][0]=$getdatabase['id'];
                    $getdata[$dem][1]=$getdatabase['iva1'];
                    $getdata[$dem][2]=$getdatabase['iva2'];
                    $getdata[$dem][3]=$getdatabase['iva3'];
                    $getdata[$dem][4]=$getdatabase['title'];
                    $getdata[$dem][5]=$getdatabase['content'];
                    $getdata[$dem][6]=$getdatabase['code'];
                    $getdata[$dem][7]=$getdatabase['Dday'];
                    $getdata[$dem][8]=$getdatabase['time'];
                    $getdata[$dem][9]=$getdatabase['startingplace'];
                    $getdata[$dem][10]=$getdatabase['ToLocation'];
                    $getdata[$dem][11]=$getdatabase['Numberofseats'];
                    $dem++;
                }
                return $getdata;
            }
            return array();
        }
        public function getTravelviewingByID($id){
            $sql = "SELECT * FROM travelviewing where id = '$id'";
            $data = mysqli_query($this->conect, $sql);
            $count = mysqli_num_rows($data);
            if($count == 0) {
                return array();
            }
            else {
                $getdata = array();
                $dem=0;
                $getdatabase = mysqli_fetch_assoc($data);
                    $getdata[0]=$getdatabase['id'];
                    $getdata[1]=$getdatabase['iva1'];
                    $getdata[2]=$getdatabase['iva2'];
                    $getdata[3]=$getdatabase['iva3'];
                    $getdata[4]=$getdatabase['title'];
                    $getdata[5]=$getdatabase['content'];
                    $getdata[6]=$getdatabase['code'];
                    $getdata[7]=$getdatabase['Dday'];
                    $getdata[8]=$getdatabase['time'];
                    $getdata[9]=$getdatabase['startingplace'];
                    $getdata[10]=$getdatabase['ToLocation'];
                    $getdata[11]=$getdatabase['Numberofseats'];
                
                  
                    $sql = "SELECT phonenumber FROM user where id = 0";
                    $getdata[12] = mysqli_fetch_assoc(mysqli_query($this->conect, $sql))['phonenumber'];

                    $dem++;
                return $getdata;
            }
            return array();
        }

        
        public function addcomment($email, $post, $cmt)
        {
         if(!$this->conect){
             return false;
         }else{
                 $sql ="INSERT INTO comment_travelviewing values(NULL, '$email', $post, '$cmt')";
                 mysqli_query($this->conect, $sql);
                 return true;
         }
         return false;
        }

        public function getListcomment($idpost){
            if(!$this->getconect){
                return false;
            }else{
                    $data = array(array());
                    $sql = "SELECT * from comment_travelviewing where id_post = $idpost";
                 
                    $getdata = mysqli_query($this->conect, $sql);
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
                            $getNameuser = mysqli_fetch_assoc(mysqli_query($this->conect, $sql))['name'];
                            $data[$dem][1] = $getNameuser;
                            $dem++;
                        }
                    }
                    return $data;
            }
            return null;
        }

        public function DeleteByID($id){
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


        public function dieconnect()
        {
            $this->getconect->dieconnect($this->conect);
        }

    }
   
    
?>