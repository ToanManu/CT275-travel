<?php
require_once "../module/ConnectDatabase.php";
$getconect = new connectDatabase();
$getconect = $getconect->connect();
$getid = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id = $getid";
$getData = mysqli_fetch_assoc(mysqli_query($getconect, $sql));
if(isset($_POST['title'])){
    $name = $_POST['title'];
    $post=$_POST['post'];

    if($_FILES['imgInp']['error'] == 0)
    {
        //lay phan mo rong cua file
        $imageFileType = pathinfo($_FILES['imgInp']['name'],PATHINFO_EXTENSION);
        //cac kieu file hop le
        $allowtypes = array('jpg', 'png');
        if (in_array($imageFileType,$allowtypes ))
        {
            $file = $_FILES['imgInp']['tmp_name'];
            $pathav = "../upload/image/".$_FILES['imgInp']['name'];
            move_uploaded_file($file, $pathav);
            $pathav = substr($pathav, 1);
            $sql = "UPDATE posts SET avatar='$pathav' where id=$getid";
            mysqli_query($getconect, $sql);
        }else{
            echo '<script>alert("ảnh đại diện phải có định dạng JPG, PNG")</script>';
        }
    }
    $sql = "UPDATE posts SET name='$name', posts = '$post' where id=$getid";
    mysqli_query($getconect, $sql);
    echo '<script>alert("Bài viết đã được chỉnh sửa")</script>';
    echo '<script>window.location="./?select=postmanagement";</script>';
 }
?>

<div class="title-content" style="color: #eee;">
    <i style="margin-right: 5px" class="fas fa-plus-square"></i>
    Chỉnh sửa bài viết
</div>
<div class="content">
    <div class="row">
        <div class = "col-9">
           <form method="POST"  enctype="multipart/form-data">
           <table style="width:100%">
                <tr>
                    <td>
                        <i class="fas fa-plus-square"></i>
                        <span style="font-weight: 600;">Nội dung bài viết</span>
                    </td>
                </tr>
                <tr>
                    <td>
                         <textarea name="post" id="cmt"><?php echo $getData['posts']?></textarea>
                         <script> CKEDITOR.replace('cmt');</script>  
                    </td>
                </tr>
            </table>
        </div>
        <div class = "col-3">
            <table style="width:100%">
                <tr>
                <td>
                        <i class='fas fa-plus-square'></i>
                        <span style="font-weight: 600;">Các thành phần</span>
                    </td>
                </tr>
                <tr>
                    <td style="background: #f2f2f2; padding: 5px;">
                        <label style="color: #000; font-weight: 500;" for="">Tiêu đề bài viết</label>
                        <input type="text" class="form-control"  id="password" required="" value="<?php echo $getData['name'] ?>" placeholder="enter post title" name="title">
                            <br>
                         <div class="form-group">
                            <label style="color: #000; font-weight: 500;" for="">Ảnh đại diện cho bài viết</label><br>
                            <img id="blah" src="" alt="Ảnh đại diện" style="height: 140px; width: 200px;" /><br><br>
                            <input type='file' style="font-size: 12px;" name="imgInp" id="imgInp" />
                         </div>

                        <br><br>
                        <div style="width:100%; text-align:center" >        
                         <button class="btn btn-danger">Chỉnh sửa</button></div> <br>
                    </td>
                </tr>
                
            </table>
           </form>
        </div>
    </div>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
</script>