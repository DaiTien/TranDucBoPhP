<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý Thư Viện Ảnh</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>
    <style>
        .imageShow{
            display: block;
            width: 200px;
            height: auto;
            background-color: antiquewhite;
            border-radius: 20px;
        }
    </style>
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
                <!-- left column -->
                <div class="col-md-6" style="margin-left: 246px;">
                    <div class="card card-info mt-2">
                        <div class="card-header with-border">
                            <h3 class="card-title">Thêm Hình Ảnh</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="?c=Slide&a=SaveInsert" role="form" method="post" enctype="multipart/form-data">
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
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" name="file" id="inputFile">
                                    <img class="imageShow" id="showImage" src=""/>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Insert</button>
                                <button type="reset" class="btn btn-info">Refresh</button>
                                <a href="?c=Slide" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ~END CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~   -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include 'View/Admin/footer.php';
    ?>
</div>
<?php
include 'asset/Scripts/ScriptFooter.php';
?>
<script>
    $('#qlwebsite').addClass('active');
    $('document').ready(function () {
        $("#inputFile").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
</body>
</html>


