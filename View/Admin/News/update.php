<!DOCTYPE html>
<html lang="ve">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý thành viên</title>
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
                <div class="col-md-6">
                    <div class="card mt-2 card-info">
                        <div class="card-header with-border">
                            <h3 class="card-title font-weight-bold">Update Tin Tức</h3>
                        </div>
                        <form role="form" method="post" action="?c=NewsAdmin&a=Save">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ID</label>
                                            <input type="text" class="form-control" name="id" readonly value="<?=$data->id?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title" value="<?=$data->title?>">
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tóm lược</label>
                                        <textarea name="summary" id="my-textarea" value="<?=$data->summary?>" cols="65" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nội dung</label>
                                            <textarea name="content" id="my-textarea" value="<?=$data->content?>" cols="65" rows="4"></textarea>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ảnh</label>
                                    <input type="text" class="form-control" name="image" value="<?=$data->image?>">
                                </div>
                               

                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" value="Update">
                                <input type="reset" class="btn btn-info" value="Refresh">
                                <a href="?c=NewsAdmin&a=index" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-info mt-2">
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
    $('#qltintuc').addClass('active');
</script>
</body>
</html>


