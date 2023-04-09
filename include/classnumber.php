<?php
class classnumber
{
    function itemstringisnumber($phonenumber){
        for($i = 0; $i < strlen($phonenumber); $i++){
            if(!is_numeric($phonenumber[$i])) return false;
        }
        return true;
    }
}
?>