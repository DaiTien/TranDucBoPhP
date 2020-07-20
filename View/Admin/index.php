<?php
if (isset($_POST["nút submit"])) {
    // lấy thông tin người dùng
    $username = $_POST["username"];
    $password = $_POST["password"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($username == "" || $password =="") {
        echo "username hoặc password bạn không được để trống!";
    }else{
        $sql = "select * from users where username = '$username' and password = '$password' ";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            echo "tên đăng nhập hoặc mật khẩu không đúng !";
        }else{
            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $username;
            // Thực thi hành động sau khi lưu thông tin vào session
            // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
            header('Location: index.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang quản trị admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/admin/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.css">
    <script src="asset/admin/admin_js/jquery-latest.js"></script>
    <script type="text/javascript" src="asset/admin/admin_js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" style="background-color: #2c56b5; text-align: center; margin-bottom: 20px">
    <img src="asset/web/images/logo.png">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="?c=indexadmin&a=login" method="post">
                <legend>Đăng Nhập Vào Page Trần ĐỨc Bo Admin</legend>
                <span><i id="err" style="color: red"></i></span>
                <span style="color: red;font-weight: bold">
                    <?php
                    if (isset($_GET['r']))
                    {
                        if ($_GET['r'] == 0)
                        {
                            echo "Tên đăng nhập hoặc mật khẩu không đúng";
                        }
                    }
                    ?>
                </span>
                <br>
                <div class="form-group">
                    <label for="">Tên tài khoản</label>
                    <input type="text" class="form-control" name="user" id="username">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="text" class="form-control" name="pass" id="password">
                </div>
                <input type="submit" class="btn btn-success" value="Đăng Nhập">
                <a href="index.php?c=indexadmin&a=register">
                    <span class="btn btn-primary" >Đăng ký</span>
                </a>
            </form>
        </div>
    </div>
</div>
</body>
</html>