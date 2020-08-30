<!DOCTYPE html>
<html lang="ve">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý thành viên</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>
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
                    <form method="post" action="index.php?c=Customer&a=LuuSua" >
                        <!-- general form elements -->
                        <div class="card mt-2 card-info">
                            <div class="card-header">
                                <h3 class="card-title font-weight-bold">Tài Khoảng khách hàng</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">

                                    <div hidden class="form-group">
                                        <label for="exampleInputEmail1">Id</label>
                                        <input type="text"value="<?=$cus->id?>"  class="form-control" name="id" readonly  placeholder="">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Tên Khách Hàng</label>
                                                <input type="text"value="<?=$cus->userName?>"  class="form-control" name="userName"  placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mật Khẩu</label>
                                                <input type="text"value="<?=$cus->password?>"  class="form-control" name="password"  placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Số Điện Thoại </label>
                                                <input type="text"value="<?=$cus->phone?>"  class="form-control" name="phone"  placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email </label>
                                                <input type="text"value="<?=$cus->email?>"  class="form-control" name="email"  placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                    <input type="reset" class="btn btn-info" value="Refresh">
                                    <a href="?c=Customer&a=index" class="btn btn-danger">Đóng</a>
                                </div>
                            </form>
                        </div>
                        </table>
                    </form>
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
<?php
include 'asset/Scripts/ScriptFooter.php';
?>
<script>
    $('#qlwebsite').addClass('active');
    $('#customer').addClass('active');
</script>
</body>
</html>


