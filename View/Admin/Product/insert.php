
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
            <form method="post" action="index.php?c=Product&a=Save">
                <!-- general form elements -->
                <div class="card mt-2 card-info">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold">THÊM SẢN PHẨM</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div hidden class="form-group">
                                <label for="exampleInputEmail1">MÃ ĐƠN HÀNG</label>
                                <input type="text"  class="form-control" name="id" readonly  placeholder="Mã Đơn Hàng">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">TÊN SẢN PHẨM</label>
                                <input type="text"  class="form-control" name="name" placeholder="Tên Sản Phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">GIỚI THIỆU</label>
                                <input type="text"  class="form-control" name="summary" placeholder="Giới Thiệu">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Số lượng </label>
                                <input type="text"  class="form-control" name="soLuong" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Gía </label>
                                <input type="text"  class="form-control" name="price" placeholder="Gía">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hình Ảnh Sản Phẩm</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"  class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <input type="reset" class="btn btn-info" value="Refresh">
                            <a href="?c=Product&a=index" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
                </table>
            </form>
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

