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
        <section class="container-fluid">
            <div class="row">
                <div class="col-xs-12" style="width: 100%">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-primary " style="font-size: 30px"><i class="fas fa-address-card"></i> <b>THÀNH VIÊN</b> </h3>
                        </div>
                        <p class="pl-3" style="color: red">
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
                        <a href="?c=UserAdmin&a=Insert" class="col-1 ml-3 btn btn-primary"><i class="fas fa-plus"></i> Thêm</a>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead style="text-align: left">
                                <tr id="tbheader">
                                    <th>STT</th>
                                    <!--<th>ID</th>-->
                                    <th>Tên đăng nhập</th>
                                    <!--<th>Mật khẩu</th>-->
                                    <th>Họ và tên</th>
                                    <th>Giới tính</th>
                                    <th>Điện thoại</th>
                                    <th>Email</th>
                                    <!--<th>Chức năng</th>-->
                                    <th style="width: 56px">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $stt =1;
                                foreach ($data as $value){
                                    ?>
                                    <tr>
                                        <td><?=$stt++?></td>
                                        <!--<td><?=$value->id?></td>-->
                                        <td><?=$value->userName?></td>
                                        <!--<td><?=$value->password?></td>-->
                                        <td><?=$value->fullName?></td>
                                        <td>
                                            <?php
                                            if ($value->gender == 1)
                                            {
                                                echo 'Nam';
                                            }else if ($value->gender == 0){
                                                echo 'Nữ';
                                            }
                                            ?>
                                        </td>
                                        <td><?=$value->phone?></td>
                                        <td><?=$value->email?></td>
                                        <!--<td><?=$value->role?></td>-->
                                        <td class="text-center">
                                            <a class="btn btn-danger glyphicon glyphicon-trash btn-sm" href="javascript:void(0);" onclick="fucAlert(this.id)" id="<?=$value->id?>"><i class="fas fa-trash-alt"></i></a>
                                            <a hidden href="?c=UserAdmin&a=Delete&id=<?=$value->id?>" id="a<?=$value->id?>"></a>
                                            <a class="btn btn-primary glyphicon glyphicon-pencil btn-sm" href="?c=UserAdmin&a=Update&id=<?=$value->id?>"><i class="fas fa-edit"></i></a>
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
    $('#qlthanhvien').addClass('active');
    $('#userAdmin').addClass('active');
</script>
</body>
</html>


