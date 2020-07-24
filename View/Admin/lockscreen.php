<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Lockscreen</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
        <a href="#">Admin <b>Trần Đức Bo</b></a>
    </div>
    <!-- User name -->
    <div class="lockscreen-name"><?php echo $user?></div>

    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
            <img style="display: block" src="<?php echo $avatarUser?>">
        </div>
        <!-- /.lockscreen-image -->

        <!-- lockscreen credentials (contains the form) -->
        <form method="post" action="?c=indexadmin&a=openscreen" class="lockscreen-credentials">
            <div class="input-group">
                <input type="password" class="form-control" name="matkhau" placeholder="password">

                <div class="input-group-append">
                    <button type="submit" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
                </div>
            </div>
        </form>
        <!-- /.lockscreen credentials -->
    </div>
    <!-- /.lockscreen-item -->
    <div class="help-block text-center">
        <p style="color: red">
            <?php
            if (isset($_GET['r']))
            {
                if ($_GET['r']== 0)
                {
                    echo "Mật Khẩu Không Đúng!";
                }
            }
            ?>
        </p>
        Đăng nhập với mật khẩu của bạn để tiếp tục
    </div>
    <div class="text-center">
        <a href="?c=indexadmin&a=index">Đăng nhập với tài khoản khác</a>
    </div>
    <div class="lockscreen-footer text-center">
        Group 4 <b>TĐB</b><br>
        IT17A1.11
    </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="asset/admin/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="asset/admin/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
