
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý website</title>
    <?php
    include "asset/Scripts/ScriptHeader.php";
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
                <div class="col-md-12" >
                    <p>
                        <?php
                        if (isset($_GET['r']))
                        {
                            if ($_GET['r'] == 0)
                            {
                                echo "<script type='text/javascript'>Swal.fire({";
                                echo "icon: 'error',";
                                echo "title: 'Tên đăng nhập hoặc Email đã được sử dụng!',";
                                echo "text: 'vui lòng kiểm tra lại!',";
                                echo "})</script>";
                            }
                        }
                        ?>
                    </p>
                    <form method="post" action="index.php?c=Customer&a=Save" >
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
                                        <input type="text"  class="form-control" name="id" readonly  placeholder="">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Tên đăng nhập</label>
                                                <input type="text" class="form-control" name="userName" placeholder="Nhập user" required value="<?php if (isset($_GET['u']) && $_GET['u'] != null ){echo $_GET['u'];}?>"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mật Khẩu </label>
                                                <input type="password" class="form-control" name="password" placeholder="******" required value="<?php if (isset($_GET['pass']) && $_GET['pass'] != null ){echo $_GET['pass'];}?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Họ và tên: </label>
                                                <input type="text"  class="form-control" name="fullName" placeholder="Nguyễn Văn A" required value="<?php if (isset($_GET['full']) && $_GET['full'] != null ){echo $_GET['full'];}?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Số Điện Thoại </label>
                                                <input type="text" class="form-control" name="phone" placeholder="036xxx" required value="<?php if (isset($_GET['phone']) && $_GET['phone'] != null ){echo $_GET['phone'];}?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email </label>
                                                <input type="email" class="form-control" name="email" placeholder="xxxx@gmail.com" required value="<?php if (isset($_GET['email']) && $_GET['email'] != null ){echo $_GET['email'];}?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Giới Tính</label>
                                                <select name="gender" class="form-control" required>
                                                    <option value="">None</option>
                                                    <option value="1" <?php if(isset($_GET['gender']) && $_GET['gender']== 1) {?> selected="selected" <?php } ?>>Nam</option>
                                                    <option value="0" <?php if(isset($_GET['gender']) && $_GET['gender']== 0) {?> selected="selected" <?php } ?>>Nữ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                    <input type="reset" class="btn btn-info" value="Refresh">
                                    <a href="?c=Customer&a=index" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                        </table>
                    </form>
                </div>
                <!-- <div class="col-md-6">
                    <div class="card mt-2 card-info">
                        <div class="card-header with-border">
                            <img style="display: block;width: 100%;margin: 2px 10px 2px 0px;" src="asset/admin/admin_images/logo2_p001.png"/>
                        </div>
                    </div>
                </div> -->
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
include "asset/Scripts/ScriptFooter.php";
?>
<script>
    $('#qlwebsite').addClass('active');
    $('#customer').addClass('active');

    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>

</body>
</html>

