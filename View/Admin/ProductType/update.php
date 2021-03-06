
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
                <div class="col-md-12">
                    <div class="card card-info mt-2">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">CHỈNH SỬA LOẠI SẢN PHẨM</h3>
                        </div>
                        <form method="post" action="index.php?c=ProductType&a=SaveUpdate" enctype="multipart/form-data">
                            <div class="card mt-2 card-info">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">MÃ LOẠI SẢN PHẨM</label>
                                            <input type="text"  class="form-control" value="<?=$data->id?>" name="id" readonly >
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Tên loại sản phẩm</label>
                                                <input type="text"  class="form-control" value="<?=$data->name?>" name="name" placeholder="Tên loại sản phẩm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                        <button type="reset" class="btn btn-info">Refresh</button>
                                        <a href="?c=ProductType&a=index" class="btn btn-danger">Đóng</a>
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
include "asset/Scripts/ScriptFooter.php";
?>
<script>
    $('#qlsanpham').addClass('active');
    $('#loaiSanpham').addClass('active');
</script>
</body>
</html>

