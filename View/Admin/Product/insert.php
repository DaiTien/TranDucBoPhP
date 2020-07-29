
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
            <form method="post" action="index.php?c=Product&a=Save" enctype="multipart/form-data">
                <!-- general form elements -->
                <div class="card mt-2 card-info">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold">THÊM SẢN PHẨM</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label style="color: #2b669a">
                                    <?php
                                    if (isset($_GET['r']))
                                    {
                                        if ($_GET['r'] == 2)
                                        {
                                            echo 'Vui lòng chọn file!';
                                        }
                                    }
                                    ?>
                                </label>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">TÊN SẢN PHẨM</label>
                                <input type="text" class="form-control" name="tenSan" placeholder="Tên Sản Phẩm">
                            </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Loại Sản Phẩm</label>
                                    <select name="productType" class="form-control">
                                        <?php
                                        foreach ($productType as $value){
                                        ?>
                                            <option value="<?=$value->id?>"><?=$value->name?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Giá (Size L) </label>
                                <input type="text"  class="form-control" name="priceL" placeholder="Nhập giá cho size lớn">
                            </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Gía (Size M) </label>
                                        <input type="text"  class="form-control" name="priceM" placeholder="Nhập giá cho size nhỏ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Giới thiệu</label>
                                        <textarea type="text" class="form-control" name="summary" rows="5" placeholder="Giới Thiệu"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung</label>
                                        <textarea type="text" class="form-control" name="content" rows="5" placeholder="Nội dung sản phẩm"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số lượng </label>
                                        <input type="text"  class="form-control" autocomplete="off" name="total" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Ảnh mô tả</label>
                                        <input type="file" name="file" id="inputFile">
                                        <img class="imageShow" id="showImage" src=""/>
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

