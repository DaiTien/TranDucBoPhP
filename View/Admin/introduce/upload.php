<!DOCTYPE html>
<html lang="ve">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý thành viên</title>
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
                <div class="col-md-6">
                    <div class="card card-info mt-2">
                        <div class="card-header with-border">
                            <h3 class="box-title">Update</h3>
                        </div>
                        <form role="form" method="post" action="?c=Introduce&a=Save">
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
                                            <label for="exampleInputPassword1">Title</label>
                                            <input type="text" class="form-control" name="title" value="<?=$data->title?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Sammary</label>
                                            <input type="text" class="form-control" name="summary" value="<?=$data->summary?>">
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Content</label>
                                    <input type="text" class="form-control" name="content" value="<?=$data->content?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">image</label>
                                    <input type="text" class="form-control" name="image" value="<?=$data->image?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DateUp</label>
                                    <input type="text" class="form-control" name="dateup" value="<?=$data->dateup?>">
                                </div>
                               

                            </div>
                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary" value="Update">
                                <input type="reset" class="btn btn-info" value="Refresh">
                                <a href="?c=Introduce&a=index" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-info mt-2">
                        <div class="card-header with-border">
                            <img style="display: block;width: 100%;margin: 2px 10px 63px 0px;" src="asset/admin/admin_images/logo2_p001.png"/>
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
include 'asset/Scripts/ScriptFooter.php';
?>
<script>
    $('#qlwebsite').addClass('active');
</script>
</body>
</html>


