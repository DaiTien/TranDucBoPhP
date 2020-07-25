<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý Tin Tức</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>
    <style>
        .imagee{
            display: block;
            width: 130px;
            height: auto;
            background-color: antiquewhite;
            border-radius: 20px;
            margin: 0 auto;
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
        <section class="container-fluid">
            <div class="row">
                <div class="col-xs-12" style="width: 100%">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-primary " style="font-size: 30px"><i class="far fa-newspaper"></i><b> List News</b></h3>
                        </div>
                        <a href="?c=NewsAdmin&a=Insert" class="col-1 ml-3 mt-2 btn btn-primary glyphicon glyphicon-plus"><i class="fas fa-plus"></i> Add</a>
                        <!-- /.box-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr id="tbheader">
                                    <th>STT</th>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Tóm lược</th>
                                    <th>Nội dung</th>
                                    <th>Ảnh</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $stt =1;
                                foreach ($data as $value){
                                ?>
                                    <tr>
                                        <td><?=$stt++?></td>
                                        <td><?=$value->id?></td>
                                        <td><?=$value->title?></td>
                                        <td><?=$value->summary?></td>
                                        <td>
                                            <textarea class="textarea form-control" ><?=$value->content?></textarea>
                                        </td>
                                        <td>
                                            <img class="imagee" src="<?=$value->image?>">
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-danger glyphicon glyphicon-trash btn-sm" href="?c=NewsAdmin&a=Delete&id=<?=$value->id?>"><i class="fas fa-trash-alt"></i></a>
                                            <a class="btn btn-primary glyphicon glyphicon-pencil btn-sm" href="?c=NewsAdmin&a=Update&id=<?=$value->id?>"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
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
    $('#qltintuc').addClass('active');
</script>
</body>
</html>


