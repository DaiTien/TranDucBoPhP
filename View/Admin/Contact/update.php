
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
                            <h3 class="card-title font-weight-bold">Quản Lý Thông Tin</h3>
                        </div>
                        <form method="post" action="index.php?c=Contact&a=LuuSua">
                            <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div hidden class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Id</label>
                                            <input type="text"value="<?=$contact->id?>"  class="form-control" name="id" readonly  placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="text"value="<?=$contact->email?>"  class="form-control" name="email"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone </label>
                                            <input type="text"value="<?=$contact->phone?>"  class="form-control" name="phone"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address </label>
                                            <input type="text"value="<?=$contact->address?>"  class="form-control" name="address"  placeholder="">
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-info">Refresh</button>
                                <a href="?c=Contact&a=index" class="btn btn-danger">Cancel</a>
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
    $('#thongtin').addClass('active');
</script>
</body>
</html>

