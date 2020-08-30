
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
            <form method="post" action="index.php?c=ProductType&a=SaveInsert" enctype="multipart/form-data">
                <!-- general form elements -->
                <div class="card mt-2 card-info">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold">THÊM LOẠI SẢN PHẨM</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                        <div class="card-body">
                            <div hidden class="form-group">
                                <label for="exampleInputEmail1">MÃ LOẠI SẢN PHẨM</label>
                                <input type="text"  class="form-control" name="id" readonly >
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên loại sản phẩm</label>
                                        <input type="text"  class="form-control" name="name" placeholder="Tên loại sản phẩm">
                                        <span class="text-danger">
                                            <?php
                                            if (isset($_GET['r']))
                                            {
                                                if ($_GET['r']==2)
                                                {
                                                    echo 'Vui lòng điền thông tin';
                                                }
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <input type="reset" class="btn btn-info" value="Refresh">
                            <a href="?c=ProductType&a=index" class="btn btn-danger">Cancel</a>
                        </div>
                </div>
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
include "asset/Scripts/ScriptFooter.php";
?>
<script>
    $('#qlsanpham').addClass('active');
    $('#loaiSanpham').addClass('active');
</script>
</body>
</html>

