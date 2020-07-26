<!DOCTYPE html>
<html lang="ve">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý thành viên</title>
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
                <div class="col-xs-12" style="width: 100%;">
                    <div class="card">
                        <div class="card-header ">
                            <h3 class="card-title text-primary " style="font-size: 30px"><i class="fas fa-file-signature"></i> <b>Giới Thiệu</b></h3>
                        </div>
                        <p style="color: red" class="pl-3">
                            <?php
                            if (isset($_GET['r']))
                            {
                                if ($_GET['r'] == 1)
                                {
                                    echo $_GET['action']. ' Thành Công!';
                                    //echo "<script type='text/javascript'>alert('$message');</script>";
                                }else{
                                    echo $_GET['action']. ' Không Thành Công!';
                                }
                            }
                            ?>
                        </p>
                        <!-- /.box-header -->
                        <a href="?c=Introduce&a=Insert" class="col-1 ml-3 btn btn-primary "><i class="fas fa-plus"></i> Thêm</a>
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
                                    <th>THời gian đăng</th>
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
                                        <td><?=$value->dateup?></td>
                                        <td class="text-center">
                                            <a class="btn btn-danger btn-sm" href="?c=Introduce&a=Delete&id=<?=$value->id?>"><i class="fas fa-trash-alt"></i></a>
                                            <a class="btn btn-primary btn-sm" href="?c=Introduce&a=Update&id=<?=$value->id?>"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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
    $('#qlwebsite').addClass('active');
    $('#gioithieu').addClass('active');
</script>
</body>
</html>


