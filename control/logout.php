<?php
    class Logout{
        public function logout()
        {
            if(isset($_SESSION['email'])){
                unset($_SESSION['email']);
                return true;
            }else return false;
        }
    }
?>