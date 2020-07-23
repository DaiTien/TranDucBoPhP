<html>
<body>
<head>

</head>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" value="<?=$tdb_product->image?>" multiple/>
    <input type="submit" name="up" value="upload"/>
</form>

<?php
if (isset($_POST['up']) && isset($_FILES['image'])) {
    if ($_FILES['image']['error'] > 0)
        echo "Upload lỗi rồi!";
    else {
        $file_name = $_FILES['image']['name'];
        $size = $_FILES['image']['size'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'asset/upload/' . $_FILES['image']['name']);
        echo "upload thành công <br/>";
    }
    $connect = mysqli_connect('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    mysqli_set_charset($connect,"UTF8");
    $danh_sach_anh = mysqli_query($connect,"
			select * from tdb_product
		");
    //duyệt từng bản ghi và hiện ra tất cả ảnh có đường dẫn như trong database:
    foreach ($danh_sach_anh as $tung_anh) {
        $link = $tung_anh['Image'];
        echo "<img src=".$link." />";
    }
}
?>
</body>

</html>