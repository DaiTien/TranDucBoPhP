
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý website</title>
    <?php include "asset/Scripts/ScriptHeader.php";?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!--Header -->
    <?php
    include 'View/Admin/header.php';
    ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php
    include 'View/Admin/menu.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- CONTEN HERE ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info mt-2">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">Mạng Xã Hội</h3>
                        </div>
                        <form method="post" action="index.php?c=SocialNetworkAdmin&a=LuuSua">
                                <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div hidden class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">MÃ Khách Hàng</label>
                                            <input type="text"value="<?=$socialNetworkAdmin->id?>"  class="form-control" name="id" readonly  placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">FaceBook</label>
                                            <input type="text"value="<?=$socialNetworkAdmin->facebook?>"  class="form-control" name="facebook"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">twitter </label>
                                            <input type="text"value="<?=$socialNetworkAdmin->twitter?>"  class="form-control" name="twitter"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Instagram </label>
                                            <input type="text"value="<?=$socialNetworkAdmin->instagram?>"  class="form-control" name="instagram"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Google </label>
                                            <input type="text"value="<?=$socialNetworkAdmin->google?>"  class="form-control" name="google"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                        <button type="reset" class="btn btn-info">Refresh</button>
                                        <a href="?c=SocialNetworkAdmin&a=index" class="btn btn-danger">Đóng</a>
                                    </div>
                        </form>
                    </div>
                </div>

            </div>

            <!-- /.row -->
        </section>
        <!-- ~END CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~   -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include 'View/Admin/footer.php';
    ?>
</div>
<?php include "asset/Scripts/ScriptFooter.php";?>
<script>
    $('#qlwebsite').addClass('active');
</script>
</body>
</html>

