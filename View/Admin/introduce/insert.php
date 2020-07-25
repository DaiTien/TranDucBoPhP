
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý website</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
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
                        <div class="card-header with-border">
                            <h3 class="card-title">THÊM Giới THIỆU</h3>
                        </div>
                        <form role="form" method="post" action="?c=Introduce&a=InsertSave" enctype="multipart/form-data">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Hình Ảnh</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tóm lược</label>
                                            <textarea name="summary" class="form-control" id="my-textarea" cols="65" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Thời gian đăng</label>
                                            <input type="date" class="form-control" name="dateup" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="exampleInputPassword1">Nội dung</label>
                                        <div class="">
                                            <textarea name="content" class="textarea form-control" placeholder="Place some text here" style="font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" value="Thêm">
                                <input type="reset" class="btn btn-info" value="Refresh">
                                <a href="?c=Introduce&a=index" class="btn btn-danger">Cancel</a>
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
include 'asset/Scripts/ScriptFooter.php';
?>
<script>
    $('#qlwebsite').addClass('active');
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

