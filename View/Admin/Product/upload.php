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
        move_uploaded_file($_FILES['image']['tmp_name'], 'upload/' . $_FILES['image']['name']);
        echo "upload thành công <br/>";


    }
}
?>
</body>

</html>