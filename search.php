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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <?php session_start(); ?>
        <style>

            .box-posts{
                background: #EEE5DE;
                border:none;
                border-radius: 15px;
                box-shadow: 0px 0px 5px 5px #aaa;
            }
            .box-posts:hover{
                box-shadow: 0px 0px 5px 5px #789;
            }
        </style>

    </head>
    <body>
        
    <?php include "./view/header.html" ?>


   <div class="article-composition">
        <div class="container">


<?php
    $key =  $_GET['search'];
?>

<table style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="width: 50%;">
                        <span style="color:#111;font-family: 'ZCOOL QingKe HuangYou', cursive; font-weight:500; font-size:35px;  ">
                          <?php echo $key ?> </span>
                    <span style="color:#666;font-family: 'ZCOOL QingKe HuangYou', cursive; font-weight:500; font-size:30px;  ">
                        - Search Results</span>
                <tr>
        </td>

        <td style="width: 50%;     text-align: right;">
            <div class="container-1">
                <form style="margin: 0px; padding: 0px;" method="get" action="">
                    <input name="search" type="search" id="search" placeholder="Search..." />
                    <button type="submit" value="Tìm kiếm" class="btnsearch">
                        <span class="icon"><i class="fa fa-search"></i></span>
                    </button>
                </form>
            </div>
        </td>
                </tr>
            </table>
            <br><hr><br>
                <?php
                    include './module/travelPost.php';
                    $getClass = new travelPost();
                    $getdata = $getClass->getlistTraleviewing();
                    $sum = sizeof($getdata);
                    $count = 0;
                    $check=0;
                    while($count < $sum){
                        if(!empty($key))
                    if(strlen(strstr($getdata[$count][4],$key)) > 0) {
                        $check=1;
                        echo ' <table class="box-posts">
                    <tr style="width: 100%;">
                        <td style="width: 35%;">
                        <a href="./addTravel.php?id='.$getdata[$count][0].'">  <img style="width: 100%; height:350px;  border-radius: 25px;" src="'.$getdata[$count][1].'"> </a>
                        </td>
                        <td style="width: 5%;"></td>
                        <td style="width: 60%;">
                        <a href="./addTravel.php?id='.$getdata[$count][0].'"> <div style="height: 40%;  line-height:80% ; ">
                             <h2 style="margin-top: 55px;">
                            '.$getdata[$count][4].'
                                </h2>
                            </div></a>
                            <hr>
                            <div style="height: 60%; color:#000">
                               <table>
                                     <tr>
                                         <td>
                                             <table>
                                             <tr>
                                                 <td><i class="fas fa-barcode"></i></td>
                                                 <td style="padding-left: 10px;"><b>Travel code: </b> '.$getdata[$count][6].'</td>
                                             </tr>
                                             <tr>
                                                     <td><i class="fas fa-calendar-alt"></i></td>
                                                     <td style="padding-left: 10px;"><b>Departure day: </b>'.$getdata[$count][7].'</td>
                                                 </tr>
                                                 <tr>
                                                     <td><i class="far fa-clock"></i></td>
                                                     <td style="padding-left: 10px;"><b>Time: </b> '.$getdata[$count][8].' day</td>
                                                 </tr>
                                                 <tr>
                                                     <td> <i class="fas fa-plane-departure"></i></td>
                                                     <td style="padding-left: 10px;"><b>starting place: </b>'.$getdata[$count][9].'</td>
                                                 </tr>
                                             </table>
                                             <td style="padding-left: 50px;">
                                                 <table> 
                                                     <tr>
                                                         <td> <i class="fas fa-plane-arrival"></i></td>
                                                         <td style="padding-left: 10px;"><b>To Location: </b> '.$getdata[$count][10].'</td>
                                                     </tr>
                                                     <tr>
                                                         <td> <i class="fas fa-chair"></i></td>
                                                         <td style="padding-left: 10px;"><b>Number of seats: </b> '.$getdata[$count][11].'</td>
                                                     </tr>
                                                 </table>
                                             </td>
                                         </td>
                                     </tr>
                               </table>
                            </div>
                            
                        </td>
                    </tr>
                </table>';
                    }
                $count++;
                    }
                    if ($check==0) echo '<h1>Không có kết quả tìm kiếm</h1>';
                ?>
           
        </div>
   </div>

   <?php include"./view/footer.php"; ?>
   
</body>
</html>