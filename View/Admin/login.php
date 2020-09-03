<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Log in</title>
    <?php
    include "asset/Scripts/ScriptHeader.php";
    ?>
</head>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>Trần Đức Bo</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <p class="login-box-msg" style="color: #ff0000;">
             <?php
                  if (isset($_GET['r']))
                  {
                      if ($_GET['r'] == 0)
                      {
                          echo "Tên đăng nhập hoặc mật khẩu không đúng";
                      }else if ($_GET['r'] == 1){
                          echo "Vui lòng không để trống";
                      }
                  }
             ?>
         </p>
        <form action="?c=IndexAdmin&a=login" method="post">
            <div class="form-group input-group has-feedback">
                <input type="text" name="user" class="form-control" placeholder="UserName">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            <div class="form-group input-group has-feedback">
                <input type="password" name="pass" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <i class="fas fa-key"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <input type="submit" class="btn ml-2 form-control btn-primary" value="Đăng Nhập">
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- <a href="#">I forgot my password</a><br> -->
        <div class="row">
            <div class="col-6">
                <a href="index.php?c=IndexAdmin&a=register" class="text-center">Đăng ký thành viên mới</a>
            </div>
            <div class="col-6">
                <a href="index.php?c=IndexAdmin&a=forgotPassword" class="text-center">Quên mật khẩu ?</a>
            </div>
        </div>
        </br>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="asset/admin/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="asset/admin/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
