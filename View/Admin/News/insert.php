
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
                    <div class="card mt-2 card-info">
                        <div class="card-header with-border">
                            <h3 class="card-title font-weight-bold">Thêm Tin Tức</h3>
                        </div>
                        <form role="form" method="post" action="?c=NewsAdmin&a=InsertSave" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ID</label>
                                            <input type="text" readonly class="form-control" name="id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title" >
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                            <p class="text-primary">
                                                <?php
                                                if (isset($_GET['r']))
                                                {
                                                    if ($_GET['r'] == 2)
                                                    {
                                                        echo 'Vui lòng chọn hình ảnh';
                                                    }
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                         <div class="form-group">
                                            <label for="my-exampleInputPassword1">Tóm lược</label>
                                            <textarea class="form-control" name="summary" id="my-textarea" cols="65" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nội dung</label>
                                            <div class="">
                                                <textarea name="content" class="textarea form-control" placeholder="Place some text here" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn ml-3 btn-primary" value="Thêm">
                                <input type="reset" class="btn btn-info" value="Refresh">
                                <a href="?c=NewsAdmin&a=index" class="btn btn-danger">Cancel</a>
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
    $('#qltintuc').addClass('active');
</script>
<script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
</body>
</html>

