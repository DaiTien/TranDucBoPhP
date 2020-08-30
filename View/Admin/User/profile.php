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
                    <div class="card mt-2 card-info">
                        <div class="card-header with-border">
                            <h3 class="card-title text-center font-weight-bold">Thông Tin</h3>
                        </div>
                        <form role="form" method="post" action="?c=UserAdmin&a=Save">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ID</label>
                                            <input type="text" class="form-control" name="id" readonly value="<?=$data->id?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Họ Và Tên</label>
                                            <input type="text" class="form-control" name="fullName" value="<?=$data->fullName?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tên Thành Viên</label>
                                            <input type="text" class="form-control" name="userName" value="<?=$data->userName?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mật Khẩu</label>
                                            <input type="text" class="form-control" name="password" value="<?=$data->password?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Điện Thoại</label>
                                            <input type="text" class="form-control" name="phone" value="<?=$data->phone?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="text" class="form-control" name="email" value="<?=$data->email?>">
                                            <p class="text-danger">
                                                <?php
                                                if (isset($_GET['r']))
                                                {
                                                    if ($_GET['r'] == 0)
                                                    {
                                                        echo 'Email này đã được đăng ký, vui lòng sử dụng email khác';
                                                    }
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Giới Tính</label>
                                            <input type="text" class="form-control" name="gender" value="<?=$data->gender?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Chức Vụ</label>
                                            <input type="text" readonly class="form-control" name="role" value="<?=$data->role?>">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="box-footer">
                                <input type="submit" class="ml-2 mb-2 btn btn-primary" value="Cập Nhật">
                                <input type="reset" class="btn mb-2 btn-info" value="Refresh">
                                <a href="?c=UserAdmin&a=index" class="btn mb-2 btn-danger">Đóng</a>
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
<?php
include 'asset/Scripts/ScriptFooter.php';
?>>
<script>
    $('#qlthanhvien').addClass('active');
</script>
</body>
</html>


