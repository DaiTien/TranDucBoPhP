
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
                            <h3 class="card-title font-weight-bold">ĐƠN HÀNG</h3>
                        </div>

                                <!-- form start -->
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tên Khách Hàng </label>
                                            <input type="text"value="<?=$tdb_order->name?>"  class="form-control" name="name" readonly placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Số Điện Thoại </label>
                                            <input type="text"value="<?=$tdb_order->phone?>"  class="form-control" name="phone" readonly placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Số Lượng </label>
                                            <input type="text"value="<?=$tdb_order->totalProduct?>"  class="form-control" name="totalProduct" readonly placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tổng tiền </label>
                                            <input type="text"value="<?=$tdb_order->totalPrice?> VNĐ"  class="form-control" name="totalPrice" readonly placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Địa Chỉ </label>
                                            <textarea type="text" rows="5"  class="form-control" name="address" readonly placeholder=""><?=$tdb_order->address?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Thông Tin Đơn Hàng</label>
                                            <textarea type="text" rows="5" class="form-control" name="content" readonly placeholder=""><?=$tdb_order->content?></textarea>
                                        </div>
                                    </div>

                                </div>


                            </div>
                                    <div class="card-footer">
                                        <a href="?c=Oder&a=index" class="btn btn-danger">Trở Về</a>
                                    </div>

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
</script>
</body>
</html>

