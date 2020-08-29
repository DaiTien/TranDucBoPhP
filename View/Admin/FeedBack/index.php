<!DOCTYPE html>
<html lang="en">
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
        <section class="container-fluid">
            <div class="row">
                <div class="col-xs-12" style="width: 100%">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-primary " style="font-size: 30px"><i class="fas fa-tasks"></i> <b>PHẢN HỒI KHÁCH HÀNG</b></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead style="text-align: center">
                                <tr id="tbheader">
                                    <th>STT</th>

                                    <th>Tên Khách Hàng</th>
                                    <th>Chủ đề</th>
                                    <th>Nội dung</th>
                                    <th>Email</th>
                                    <th>Ngày gửi</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $stt =1;
                                foreach ($data as $value){
                                ?>
                                    <tr>
                                        <td><?=$stt++?></td>

                                        <td><?=$value->name?></td>
                                        <td><?=$value->title?></td>
                                        <td><?=$value->content?></td>
                                        <td><?=$value->email?></td>
                                        <td><?=$value->date?></td>
                                        <td class="text-center">
                                            <a class="btn btn-primary glyphicon glyphicon-trash btn-sm" href="javascript:void(0);" onclick="fucAlert(this.id)" id="<?=$value->id?>"><i class="fas fa-trash-alt"></i></a>
                                            <a hidden href="?c=FeedBackAdmin&a=Delete&id=<?=$value->id?>" id="a<?=$value->id?>"></a>
                                            <a class="btn btn-success glyphicon glyphicon-eye-open btn-sm" href="?c=FeedBackAdmin&a=Update&id=<?=$value->id?>"><i class="fas fa-eye"></i></a>

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
<?php include "asset/Scripts/ScriptFooter.php";?>
<script>
    $('#qlwebsite').addClass('active');
    $('#feedback').addClass('active');

</script>
</body>
</html>


