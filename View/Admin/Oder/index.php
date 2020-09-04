<!DOCTYPE html>
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
                <div class="col-xs-12" style="width: 100%;">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-primary " style="font-size: 30px"><i class="fas fa-share-alt-square"></i><b>ĐƠn Hàng</b></h3>
                        </div>
                        <p class="pl-3" style="color: red">
                            <?php
                            if (isset($_GET['r']))
                            {
                                if ($_GET['r'] == 1)
                                {
                                    echo $_GET['action']. ' Thành Công!';
                                    //echo "<script type='text/javascript'>alert('$message');</script>";
                                }else if ($_GET['r'] == 2){
                                    echo "<script type='text/javascript'>Swal.fire({";
                                    echo "icon: 'error',";
                                    echo "title: 'Bạn chưa chọn đối tượng nào!!',";
                                    echo "text: 'Vui lòng chọn đối tượng!',";
                                    echo "})</script>";
                                }
                                else{
                                    echo $_GET['action']. ' Không Thành Công!';
                                }
                            }
                            ?>
                        </p>
                        <form action="?c=Oder&a=UpTransport" method="post">
                            <div class="row">
                                <div class="col-3">
                                    <input type="submit" name="duyet" class="ml-3 mt-2 btn btn-primary" value="Đã giao"/>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead style="text-align: center">
                                    <tr id="tbheader">
                                        <th></th>
                                        <th>STT</th>
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Giao hàng</th>
                                        <th>Tình trạng</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $stt =1;
                                    foreach ($data as $value){
                                        ?>
                                        <tr>
                                            <td class="text-center"><input type="checkbox" name='array[]' value="<?=$value->id?>"></td>
                                            <td class="text-center"><?=$stt++?></td>
                                            <td class="text-center"><?=$value->name?></td>
                                            <td class="text-center"><?=$value->phone?></td>
                                            <td class="text-center"><?=$value->address?></td>
                                            <td class="text-center">
                                                <?php
                                                if ($value->transport == 1)
                                                {
                                                    echo 'Đã giao';
                                                }else{
                                                    echo 'Chưa giao hàng';
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                if ($value->active == 1)
                                                {
                                                    echo 'Đã xem';
                                                }else{
                                                    echo 'Chưa xem';
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="fucAlert(this.id)" id="<?=$value->id?>"><i class="fas fa-trash-alt"></i></a>
                                                <a  href="?c=Oder&a=Delete&id=<?=$value->id?>" id="a<?=$value->id?>"></a>
                                                <a class="btn btn-success btn-sm" href="?c=Oder&a=Update&id=<?=$value->id?>"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
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
include "asset/Scripts/ScriptFooter.php";
?>
<script>
    $('#qlsanpham').addClass('active');
    $('#order').addClass('active');
</script>
</body>
</html>


