<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Forgot Password</title>
    <?php include "asset/Scripts/ScriptHeader.php";?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#">Admin <b>Trần Đức Bo</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Bạn quên mật khẩu? Tại đây bạn có thể dễ dàng lấy lại một mật khẩu mới.</p>

            <form action="?c=indexadmin&a=requestPassword" method="post">
                <div class="input-group mb-2 justify-content-center">
                    <span class="text-danger">
                        <?php
                        if (isset($_GET['r']))
                        {
                            if ($_GET['r']==1)
                            {
                                echo 'Vui lòng kiểm tra email!';
                            }else{
                                echo 'Xin lỗi, Email không tồn tại!';
                            }
                        }
                        ?>
                    </span>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Vui lòng nhập email của bạn">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Yêu cầu mật khẩu mới</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="?c=indexadmin">Đăng nhập.</a>
            </p>
            <p class="mb-0">
                <a href="?c=indexadmin&a=register" class="text-center">Đăng ký thành viên mới.</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<?php include "asset/Scripts/ScriptFooter.php";?>
</body>
</html>
