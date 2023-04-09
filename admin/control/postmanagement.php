<?php
if(isset($_GET['dele'])){
    $id = $_GET['dele'];
    include "../module/ClassPosts.php";
    $getlistpost  = new ClassPosts();
    $getlistpost  = $getlistpost ->DeletePost($id);
    if($getlistpost== true) echo '<script>alert("Bài viết đã được xóa!!")</script>';
    else echo '<script>alert("Bài viết không thể xóa!!")</script>';
    echo '<script>window.location="../admin/?select=postmanagement";</script>';
}

if(isset($_GET['edit'])){
    $id = $_GET['id'];
    $name = $_GET['edit'];
    $getonmenu = $_GET['onmenu'];
    if($id === '0'){
        echo '<script>alert("Mục này không thể chỉnh sửa")</script>';
    }else{
     //   mysqli_query($conn, "UPDATE theloai set tentheloai = '$name', onmenu = $getonmenu where id = $id");
    }
   // echo '<script>window.location="'.$domain.'/admin/?chucnang=theloai";</script>';
}
?>
<div style="background: #0056b3; height: 33px; color: #f2f2f2; font-size: 18px; padding-left: 10px; line-height: 33px; ">
    <i class="fab fa-pied-piper-square"></i>
    Quản lý bài viết
</div>

<br>
<table style="width: 100%; margin: 5px;">
    <tr style="font-weight: 600; color: #000; font-size: 18px;">
        <td colspan="8" style="text-align: left">
            <i class="fas fa-bars" style="margin-right: 3px;"></i>
            Danh sách bài viết</td>
    </tr>
    <tr style="background: #fff; text-align: center">
        <td style="color: #cc0000; font-weight: 500">STT</td>
        <td style="color: #115095; font-weight: 500">Id</td>
        <td style="color: #115095; font-weight: 500">Ảnh đại diện</td>
        <td style="color: #115095; font-weight: 500">Tiều đề</td>
        <td style="color: #115095; font-weight: 500">Hành động</td>
    </tr>
    <?php
    include "../module/ClassPosts.php";
    $getlistpost  = new ClassPosts();
    $getlistpost  = $getlistpost ->getlistTitleAndAvatar();
    $sumcount = sizeof( $getlistpost);
    $count = 0;
        while ($count < $sumcount){

            echo '<tr style="background: ';
            if($count%2 == 0) echo '#e8ffff'; else echo "#fff";
            echo '">
                <td>'.$count.'</td>
                <td style="text-align: center">'.$getlistpost[$count][0].'</td>
                 <td style="text-align: center"><img style="width: 80px; height: 50px" src=".'.$getlistpost[$count][2].'"></td>
          
               <td >'.$getlistpost[$count][1].'</td>
              <td style="color: #b21f2d;  font-weight: 500; text-align: center"> 
             <button onClick="deleteitemn(this.id)" class="btn btn-danger   "  id="'.$getlistpost[$count][0].'">Xóa</button>
            <a href="?select=edit&id='.$getlistpost[$count][0].'"><button  onClick="edititem(this.id)" id="'.$getlistpost[$count][0].'" class="btn btn-primary">Chỉnh sửa</button></a>
                   
                    
</td>
            </tr>';
            $count++;
        }
        ?>
        <div style="display: none" id="num-rows"><?php echo $count ?></div>
        <script>
            var n=(parseInt(document.getElementById('num-rows').textContent));

        </script>
</table>

<dialog id="xacnhanxoa" style="border: none; width: 500px;  box-shadow: 0px 0px 5px 5px #666; border-radius: 5px">
    <p style="font-size: 18px;">Bạn có thực sự muốn xóa mục này!!</p>
    <hr>
    <button class="btn btn-danger" style="float: right; margin-left: 10px; padding: 5px;" id="huydelete">Hủy</button>
    <form style="float: right">
        <input name="select" value="postmanagement" style="display: none">
        <input id = "dele" name="dele" value="" style="display: none">
        <button style="padding: 5px;" class="btn btn-primary" id="xacnhandelete">Xác nhận</button>
    </form>
</dialog>
<script>function deleteitemn(clicked_id)
    {
        var xacnhan = document.getElementById('xacnhanxoa');
        var id =  document.getElementById(clicked_id);
        var huydelete = document.getElementById('huydelete');
        var dele = document.getElementById('dele');
        dele.value = clicked_id;
        huydelete.addEventListener('click', function() {
            xacnhan.close();
        });
        xacnhan.showModal();
    }</script>