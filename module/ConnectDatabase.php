<?php
   class ConnectDatabase {
      
      private $servername;
      private $username;
      private $password;
      private $dbname;
      
      function __construct() {
         $this->servername = "localhost";
         $this->username = "root";
         $this->password = "";
         $this->dbname = "travelvietnam";
      }
      function connect() {
         $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            return false;
         } 
         else{
            return $conn;
         }
      }
      public function dieconnect($conn)
      {
         mysqli_close($conn);
      }
   }
?>
