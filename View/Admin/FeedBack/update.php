
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
                            <h3 class="card-title font-weight-bold">Nội Dung Phản Ánh</h3>
                        </div>
                        <form method="post" action="index.php?c=Product&a=LuuSua">
                                <!-- form start -->
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tên Khách Hàng</label>
                                            <input type="text"value="<?=$tdb_product->name?>"  class="form-control" name="name" readonly placeholder="Tên Sản Phẩm">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Ngày Tháng </label>
                                            <input type="text"value="<?=$tdb_product->date?>"  class="form-control" name="soLuong" readonly placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email </label>
                                            <input type="text"value="<?=$tdb_product->email?>"  class="form-control" name="email" readonly placeholder="">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Bạn Muốn Phản Ánh Gì</label>
                                    <textarea type="text"  class="form-control" name="summary" readonly placeholder="Chủ đề"><?=$tdb_product->title?></textarea>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung Phản Ánh</label>
                                    <textarea type="text"  class="form-control" name="summary" readonly placeholder="Nội dung"><?=$tdb_product->content?></textarea>

                                </div>
                                    </div>
                                </div>
                            </div>
                                    <div class="card-footer">
                                        <a href="?c=FeedBackAdmin&a=index" class="btn btn-danger">Trở Về</a>
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
    $('#qlwebsite').addClass('active');
</script>
</body>
</html>

