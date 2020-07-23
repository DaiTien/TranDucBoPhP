<html>
<body>
<head>

</head>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" value="<?=$tdb_product->image?>" multiple/>
    <input type="submit" name="up" value="upload"/>
</form>

<?php
if(isset($_POST["submit"])){
    if(isset($_FILES['upload'])&&$_FILES['upload']["name"]!=null){
        //lấy tên của file:
        $file_name=$_FILES['upload']["name"];
        //lấy đường dẫn tạm lưu nội dung file:
        $file_tmp =$_FILES['upload']['tmp_name'];
        //tạo đường dẫn lưu file:
        $path ="upload/".$file_name;
        //upload nội dung file vào đường dẫn vừa tạo:
        move_uploaded_file($file_tmp,$path);
        //tạo kết nối đến database
        $connect = mysqli_connect('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
        //localhost: tên miền
        //root: tài khoản đăng nhập tên miền
        //"": mật khẩu đăng nhập tên miền (tôi không đặt mật khẩu nên để trống)
        //devpro: database cần kết nối
        mysqli_set_charset($connect,"UTF8");//tạo kết nối có thể hiểu tiếng Việt
        //thực hiện insert vào bảng đường dẫn file vừa upload:
        mysqli_query($connect,"
					insert into upload(duongdan) values ('$path')
				");
        echo "upload thành công";
    }
}
?>
</body>

</html>