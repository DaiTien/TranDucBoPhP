<!DOCTYPE html>
<html lang="ve">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý thành viên</title>
    <!-- Tell the browser to be responsive to screen width -->
    <?php include 'asset/Scripts/ScriptHeader.php';?>
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
                            <h3 class="card-title font-weight-bold">THÊM THÀNH VIÊN</h3>
                        </div>
                        <p class="text-danger text-center pt-3">
                            <?php
                            if (isset($_GET['r']))
                            {
                                if ($_GET['r'] == 3)
                                {
                                    echo 'Vui lòng không để trống phần có [ * ]';
                                }
                            }
                            ?>
                        </p>
                        <form role="form" method="POST" action="?c=UserAdmin&a=InsertSave">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Tên Đăng Nhập <sup class="text-danger" style="font-size: 15px">*</sup></label>
                                                <input id="input1" type="text" class="form-control" name="userName" value='<?php if (isset($_GET['n'])) {echo $_GET['n'];}?>' required>
                                                <p class="text-danger">
                                                    <?php
                                                    if (isset($_GET['r']))
                                                    {
                                                        if ($_GET['r'] == 2)
                                                        {
                                                            //echo 'UserName đã tồn tại!';
                                                            echo "<script type='text/javascript'>Swal.fire({";
                                                            echo "icon: 'error',";
                                                            echo "title: 'Tên đăng nhập được sử dụng!',";
                                                            echo "text: 'vui lòng dùng Tên khác!',";
                                                            echo "})</script>";
                                                        }
                                                    }
                                                    ?>
                                                </p>
                                            </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Họ Và Tên</label>
                                            <input type="text" class="form-control" name="fullName" value='<?php if (isset($_GET['ht'])) {echo $_GET['ht'];}?>' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mật Khẩu <sup class="text-danger" style="font-size: 15px">*</sup></label>
                                            <input type="password" class="form-control" name="password" value='<?php if (isset($_GET['pass'])) {echo $_GET['pass'];}?>' required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Điện Thoại</label>
                                            <input type="text" class="form-control" name="phone" value='<?php if (isset($_GET['p'])) {echo $_GET['p'];}?>' id="edit1" size="0" maxlength="10" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email <sup class="text-danger" style="font-size: 15px">*</sup></label>
                                            <input type="email" class="form-control" name="email" value='<?php if (isset($_GET['e'])) {echo $_GET['e'];}?>' required>
                                            <p class="text-danger">
                                                <?php
                                                if (isset($_GET['r']))
                                                {
                                                    if ($_GET['r'] == 0)
                                                    {
                                                        //echo 'Email này đã được sử dụng, vui lòng dùng email khác';
                                                        echo "<script type='text/javascript'>Swal.fire({";
                                                        echo "icon: 'error',";
                                                        echo "title: 'Email này đã được sử dụng!',";
                                                        echo "text: 'vui lòng dùng email khác!',";
                                                        echo "})</script>";
                                                    }
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Giới Tính</label>
                                            <select name="gender" class="form-control" required>
                                                <option value="">None</option>
                                                <option value="1" <?php if(isset($_GET['g']) && $_GET['g']== 1) {?> selected="selected" <?php } ?>>Nam</option>
                                                <option value="0" <?php if(isset($_GET['g']) && $_GET['g']== 0) {?> selected="selected" <?php } ?>>Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="box-footer">
                                <input type="submit" class="btn ml-2 mb-2 btn-primary" value="Thêm">
                                <input type="reset" class="btn mb-2 btn-info" value="Refresh">
                                <a href="?c=UserAdmin&a=index" class="btn mb-2 btn-danger">Cancel</a>
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
    $('#qlthanhvien').addClass('active');
</script>
</body>
</html>


