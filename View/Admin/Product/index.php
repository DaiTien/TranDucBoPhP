<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý website</title>
    <!-- Tell the browser to be responsive to screen width -->
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
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Sản Phẩm</b></h3>
                        </div>
                        <p style="color: red">
                            <?php
                            if (isset($_GET['r']))
                            {
                                if ($_GET['r'] ==1)
                                {
                                    echo $_GET['action'] .' Thành Công';
                                }else{
                                    echo $_GET['action'] .' Không Thành Công';
                                }
                            }
                            ?>
                        </p>
                        <a class="col-1 ml-3 btn btn-primary glyphicon glyphicon-plus btn-sm" href="?c=Product&a=insert">Thêm</a>
                        <!-- /.box-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr id="tbheader">
                                    <th><input type="checkbox" id="check-all-gd"></th>
                                    <th>STT</th>
                                    <th>ID</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Hình Ảnh</th>
                                    <th>Giới Thiệu</th>
                                    <th>Số Lượng</th>
                                    <th>Giá</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $stt =1;
                                foreach ($data as $value){
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" class="cbsp" value="<?=$value->id?>"></td>
                                        <td><?=$stt++?></td>
                                        <td><?=$value->id?></td>
                                        <td><?=$value->name?></td>
                                        <td><?=$value->image?></td>
                                        <td><?=$value->summary?></td>
                                        <td><?=$value->soLuong?></td>
                                        <td><?=$value->price?></td>
                                        <td class="text-center">
                                            <a class="btn btn-danger glyphicon glyphicon-trash btn-sm" href="?c=Product&a=Delete&id=<?=$value->id?>"></a>
                                            <a class="btn btn-primary glyphicon glyphicon-pencil btn-sm" href="?c=Product&a=Update&id=<?=$value->id?>"></a>
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
    $('#qlsanpham').addClass('active');
</script>
</body>
</html>


