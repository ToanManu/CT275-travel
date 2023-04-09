
<?php

        if (isset($_POST['name'])) {
            echo $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phonenumber = $_POST['phonenumber'];
            require_once "./include/classnumber.php";
            $classnumber = new classnumber;
            $hl = true;

            if (strlen(strstr($email, "@")) <= 0 || strlen(strstr($email, ".")) <= 0) {
                echo '<script>document.getElementById("emaill").style.display = "block"</script>';
                $hl = false;
            }
            if (!$classnumber->itemstringisnumber($phonenumber)) {
                echo '<script>document.getElementById("sdt").style.display = "block"</script>';
                $hl = false;
            }
            if ($password != $password2) {
                echo "hmm";
                echo '<script>document.getElementById("passerror").style.display = "block"</script>';
                $hl = false;
            } elseif (strlen($password) < 5) {
                echo '<script>document.getElementById("passerror").style.display = "block";
                document.getElementById("passerror").textContent = "Mật khẩu phải có trên 5 ký tự";
                </script>';
                $hl = false;
            }
            if ($hl == true) {
                include "./module/Account.php";
                $accout = new Account();
                $access = $accout->Registration($email, $password, $name, $phonenumber, $address);
                if ($access === true) {
                    $_SESSION['email'] = $email;

                    echo '<script>window.location="./";</script>';
                } else {

                }
            }
        }
            ?>
