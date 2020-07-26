
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
                <div class="col-md-6">
                    <div class="card card-info mt-2">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">Chỉnh Sửa Đơn Hàng</h3>
                        </div>
                        <form method="post" action="index.php?c=Product&a=LuuSua" enctype="multipart/form-data">
                                <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label style="color: #2b669a">
                                        <?php
                                        if (isset($_GET['r']))
                                        {
                                            if ($_GET['r'] == 2)
                                            {
                                                echo 'Hình Ảnh này đã được thêm vào trước đó!';
                                            }else{
                                                echo 'Vui lòng chọn file';
                                            }
                                        }
                                        ?>
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">MÃ ĐƠN HÀNG</label>
                                            <input type="text"value="<?=$tdb_product->id?>"  class="form-control" name="id" readonly  placeholder="Mã Đơn Hàng">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">TÊN SẢN PHẨM</label>
                                            <input type="text"value="<?=$tdb_product->name?>"  class="form-control" name="name" placeholder="Tên Sản Phẩm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Số lượng </label>
                                            <input type="text"value="<?=$tdb_product->soLuong?>"  class="form-control" name="soLuong" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Gía </label>
                                            <input type="text"value="<?=$tdb_product->price?>"  class="form-control" name="price" placeholder="Gía">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">GIỚI THIỆU</label>
                                    <input type="text" value="<?=$tdb_product->summary?>" class="form-control" name="summary" placeholder="Giới Thiệu">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" name="file" id="inputFile">
                                    <img class="imageShow" id="showImage" style="width: 150px" height="100px" src="<?=$tdb_product->image?>"/>
                                </div>
                            </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-info">Refresh</button>
                                        <a href="?c=Product&a=index" class="btn btn-danger">Cancel</a>
                                    </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-2 card-info">
                        <div class="card-header with-border">
                            <img style="display: block;width: 100%;margin: 2px 10px 2px 0px;" src="asset/admin/admin_images/logo2_p001.png"/>
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
    $('#sanpham').addClass('active');
</script>
</body>
</html>

