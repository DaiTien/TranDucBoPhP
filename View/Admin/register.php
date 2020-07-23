<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Registration</title>
    <?php
    include "asset/Scripts/ScriptHeader.php";
    ?>
</head>

<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>Trần Đức Bo</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <p class="pb-2" style="color: red">
            <?php
            if (isset($_GET['r']))
            {
                if ($_GET['r'] == 1)
                {
                    echo $_GET['action'] . ' Account Thành Công <a href="?c=indexadmin&a=index">Login</a>' ;
                }else if($_GET['r'] == 2){
                    echo 'Confirm Password Không Đúng, vui lòng đăng ký lại';
                } else if ($_GET['r'] == 3){
                    echo 'Vui lòng điền đầy đủ thông tin, không để trống';
                }else
                {
                    echo 'UserName bạn đăng ký đã tồn tại, vui lòng đăng ký lại';
                }
            }
            ?>
        </p>

        <form action="?c=indexadmin&a=signUp" method="post">
            <div class="form-group input-group has-feedback">
                <input type="text" class="form-control" name="username" placeholder="User Name">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            <div class="form-group input-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <i class="fas fa-key"></i>
                    </div>
                </div>
            </div>
            <div class="form-group input-group has-feedback">
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <i class="fas fa-unlock-alt"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <input type="submit" class="btn ml-2 btn-primary" value="Register">
                </div>
                <div class="col-xs-4">
                    <input type="reset" class="btn ml-2 btn-default" value="Reset">
                </div>
                <!-- /.col -->
            </div>
        </form>
        <a href="?c=indexadmin&a=index" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="asset/admin/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="asset/admin/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
