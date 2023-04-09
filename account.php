<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welecom to VietNam</title>
        <link rel="icon" href="./upload/logodulichht.png">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle45646.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
        <script src="./include/script/myjs.js"></script>
        <?php session_start(); ?>
        <style>
            body{
                background-image: url("./upload/VinhHaLong.jpg");
            }
        </style>
    </head>
    <body>
    <?php require_once './view/header.html' ?>
    <?php
        if(isset($_POST['logout'])){
            require_once "./control/logout.php";
            $logout = new Logout();
            $logout = $logout->logout();
            echo '<script>window.location="./";</script>';
        }
    require_once "./control/xulythaydoimatkhau.php";
    require_once "./control/xulythaydoithongtin.php";
    require_once "./module/ClassUser.php";
        $getClass = new classUser();
        $getemail = $_SESSION['email'];
        $getdata = $getClass->getUserByid($getemail);
      
    ?>
    <div class = "container" style="margin-top: 50px; margin-bottom:50px">
    <div class="row">

                <div class="col-4">
                    <div class="box-black">
                        <div style="width: 100%; text-align:center; color:#f2f2f2">
                            <h1>Account</h1>
                        </div>
                        <hr style="height: 1px; background:#ccc">
                        <div class="menu-account" onclick="BlockInformation()">
                            <h4>Personal Information</h4>
                        </div>
                        <?php
                            if(isset($_SESSION['email']))
                            {
                                if($_SESSION['email'] != 'admin')
                                 echo '<hr style="height: 1px; background:#ccc">
                                 <div class="menu-account" onclick="BlockChangeInformation()">
                                     <h4>Change Information</h4>
                                 </div>
                                 <hr style="height: 0.5px; background:#ccc">
                                <div class="menu-account" onclick="BlockChangePassword()">
                                    <h4>Change Password</h4>
                                </div>
                                 ';
                                 else echo ' <hr style="height: 1px; background:#ccc">
                                 <a href="./admin"><div class="menu-account" onclick="BlockInformation()">
                                     <h4>Administration</h4>
                                 </div></a>';
                            }
                        ?>
                        <hr style="height: 1px; background:#ccc">
                        <div style="width: 100%; text-align:center">
                            <form method="POST">
                                <input type="text" name="logout" style="display: none;">
                                <button style="border: 0px; background:none;"><h4 class="menu-account-logout">Logout</h4></button>
                            </form>
                        </div>
                    </div>
                </div>
                 <!--Hien thi  thong tin-->
                 <div class="col-8" id="Information">
                <div class="box-black">
                        <div style="width: 100%;color:#f2f2f2">
                            <h1>Personal Information</h1>
                            <div style="width: 350px; height:5px; background:#ccc">
                                <div style="width: 100px; height:5px; background:#456"></div>
                            </div>
                            <div style="width: 100%; text-align:center; margin-top:50px;">
                                <img src="./upload/unnamed.png" style="height: 200px; border-radius:200px;">
                                <p style="font-size: 35px; color:#e00;"><?php echo $getdata['name'] ?></p>
                               <hr style="width: 250px; background:chocolate; height:3px;">
                            </div>
           
                <div class="form-group">
                    <label id="tieudeten" style="color: #865;">Name</label>
                    <p style="font-size: 18px; color:#eee;"><?php echo $getdata['name'] ?></p>
                </div>
                <div class="form-group">
                    <label for="" style="color: #865;">Email</label>
                    <p style="font-size: 18px; color:#eee;"><?php echo $getdata['email'] ?></p>
                </div>
            <div id="emaill" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Invalid email</div>
                
                 <div id="passerror" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Password incorrect</div>
                <div class="form-group">
                    <label for="" style="color: #865;">Phone number</label>
                    <p style="font-size: 18px; color:#eee;"><?php echo $getdata['phonenumber'] ?></p>
                </div>
                     <div id="sdt" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Invalid phone number</div>
                <div class="form-group">
                    <label for="" style="color: #865;">Address</label>
                    <p style="font-size: 18px; color:#eee;"><?php echo $getdata['address'] ?></p>
                  </div>
                  
                        </div>
                 </div>
                </div>
                <!--thay doi thong tin-->
                <div style="display:none" class="col-8" id="ChangeInformation">
                <div class="box-black">
                        <div style="width: 100%;color:#f2f2f2">
                            <h1>Change Information</h1>
                            <div style="width: 350px; height:5px; background:#ccc">
                                <div style="width: 100px; height:5px; background:#456"></div>
                            </div>
                           
            <form  method="post" action="#" style="margin-top: 30px; margin-bottom: 30px; ">
          
                <div class="form-group">
                    <label id="tieudeten" style="color: #f2f2f2;">Name</label>
                    <input type="text" class="form-control"   id="name" value="<?php echo $getdata['name'] ?>" required="" placeholder="Tan Cu Chan" name="name">
                </div>
                <div class="form-group">
                    <label for="" style="color: #f2f2f2;">Email</label>
                    <input type="text" class="form-control" id="email" value="<?php echo $getdata['email'] ?>" required="" placeholder="nguyenvana@gmail.com" name="email">
                </div>
            <div id="emaill" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Invalid email</div>
                
                 <div id="passerror" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Password incorrect</div>
                <div class="form-group">
                    <label for="" style="color: #f2f2f2;">Phone number</label>
                    <input type="text" class="form-control" id="phonenumber"  value="<?php echo $getdata['phonenumber'] ?>" required="" placeholder="0347194217" name="phonenumber">
                </div>
                     <div id="sdt" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Invalid phone number</div>
                <div class="form-group">
                    <label for="" style="color: #f2f2f2;">Address</label>
                    <input type="text" class="form-control" id="address"  value="<?php echo $getdata['address'] ?>"  required=""  placeholder="xom Son Tien - xa Quet Thang - tp.Thai Nguyen" name="address">
                  </div>
                  <div style="text-align: center"><button style="margin-top: 10px;" class="btn btn-secondary">Change Information</button></div>
                  </form>
                        </div>
                 </div>
                </div>
                <!--Thay doi mat khau-->
                <div class="col-8" style="display: none;" id="ChangePassword">
                <div class="box-black">
                        <div style="width: 100%;color:#f2f2f2">
                            <h1>Change Password</h1>
                            <div style="width: 350px; height:5px; background:#ccc">
                                <div style="width: 100px; height:5px; background:#456"></div>
                            </div>
                            
            <form  method="post" action="#" style="margin-top: 30px; margin-bottom: 30px">
            <div class="form-group">
                    <label for="" style="color: #f2f2f2;">Old Password</label>
                    <input type="password" class="form-control"  id="password" required="" placeholder="Enter your password" name="oldpassword">
                </div>

             <div class="form-group">
                    <label for="" style="color: #f2f2f2;">A new password</label>
                    <input type="password" class="form-control"  id="password" required="" placeholder="Enter your password" name="new1password">
                </div>
                <div class="form-group">
                    <label for="" style="color: #f2f2f2;">Confirm password</label>
                    <input type="password" class="form-control"  id="password2" required="" placeholder="Enter your confirm password" name="new2password">
                </div>

                  <div style="text-align: center"><button style="margin-top: 10px;" class="btn btn-secondary">Change Password</button></div>
                  </form>
                        </div>
                 </div>
                </div>

        </div>
   </div>

   <?php require_once"./view/footer.php";?>
</body>
</html>