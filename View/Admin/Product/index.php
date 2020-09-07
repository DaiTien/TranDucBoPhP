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
                <div class="col-xs-12" style="width: 100%">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-primary " style="font-size: 30px"><i class="fas fa-align-justify"></i> <b>Sản Phẩm</b></h3>
                        </div>
                        <p class="pl-3" style="color: red">
                            <?php
                            if (isset($_GET['r']))
                            {
                                if ($_GET['r'] ==1)
                                {
                                    echo $_GET['action'] .' Thành Công';
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
                        <form action="?c=Product&a=UpActive" method="post">
                            <div class="row">
                                <div class="col-3">
                                    <a class="ml-3 btn btn-primary btn" href="?c=Product&a=insert"><i class="fas fa-plus"></i> Thêm</a>
                                </div>
                                <div class="col-1">
                                    <input type="submit" name="duyet" class="ml-3 btn btn-primary" value="Duyệt"/>
                                </div>
                                <div class="col-1">
                                    <input type="submit" name="koduyet" class="ml-3 btn btn-danger" value="Hủy Duyệt"/>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead style="text-align: left">
                                    <tr id="tbheader">
                                        <th></th>
                                        <th>STT</th>
                                        <th>Mã loại</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Giới thiệu</th>
                                        <th>Giá</th>
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

                                            <td class="text-center"><?=$value->type?></td>
                                            <td class="text-center"><?=$value->name?></td>
                                            <td class="text-center">
                                                <img class="imagee" style="width: 105px" height="100px" src="<?=$value->image?>">
                                            </td>
                                            <td class="text-center"><?=$value->summary?></td>
                                            <td class="text-center"><?=$value->price?></td>
                                            <td class="text-center">
                                                <?php
                                                if ($value->active == 1)
                                                {
                                                    echo '<i class="fas fa-eye text-primary" style="font-size: 36px"></i>';
                                                }
                                                else{
                                                    echo '<i class="fas fa-eye-slash text-danger" style="font-size: 36px"></i>';
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-danger glyphicon glyphicon-trash btn-sm" href="javascript:void(0);" onclick="fucAlert(this.id)" id="<?=$value->id?>"><i class="fas fa-trash-alt"></i></a>
                                                <a hidden href="?c=Product&a=Delete&id=<?=$value->id?>" id="a<?=$value->id?>"></a>
                                                <a class="btn btn-primary glyphicon glyphicon-pencil btn-sm" href="?c=Product&a=Update&id=<?=$value->id?>"><i class="fas fa-edit"></i></a>
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
include 'asset/Scripts/ScriptFooter.php';
?>
<script>
    $('#qlsanpham').addClass('active');
    $('#sanpham').addClass('active');
</script>
</body>
</html>


