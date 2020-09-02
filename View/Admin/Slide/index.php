<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý Thư Viện Ảnh</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>
    <style>
        .imagee{
            display: block;
            width: 210px;
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
                            <h3 class="card-title text-primary " style="font-size: 30px"><i class="fas fa-images"></i><b> Slide</b></h3>
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
                                    echo "<script type='text/javascript'>alert('Vui lòng chọn đối tượng');</script>";
                                }
                                else{
                                    echo $_GET['action']. ' Không Thành Công!';
                                }
                            }
                            ?>
                        </p>
                        <form action="?c=Slide&a=UpActive" method="post">
                            <div class="row">
                                <div class="col-3">
                                    <a href="?c=Slide&a=Insert" class="ml-3 mt-2 btn btn-primary"><i class="fas fa-plus"></i>Thêm slide</a>
                                </div>
                                <div class="col-1">
                                    <input type="submit" name="duyet" class="ml-3 mt-2 btn btn-primary" value="Duyệt"/>
                                </div>
                                <div class="col-1">
                                    <input type="submit" name="koduyet" class="ml-3 mt-2 btn btn-primary" value="Hủy Duyệt"/>
                                </div>
                            </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr id="tbheader">
                                            <th class="text-center"></th>
                                            <th class="text-center">STT</th>
                                            <th class="text-center">Hình ảnh</th>
                                            <th class="text-center">Tình trạng</th>
                                            <th class="text-center">Hành động</th>
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

                                                <td class="text-center">
                                                    <img class="imagee" src="<?=$value->imageSlide?>">
                                                </td>
                                                <td class="text-center">
                                                    <?php
                                                    if ($value->active == 1)
                                                    {
                                                        echo 'Đã duyệt';
                                                    }else{
                                                        echo 'Chưa duyệt';
                                                    }
                                                    ?>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="fucAlert(this.id)" id="<?=$value->id?>"><i class="fas fa-trash-alt"></i></a>
                                                    <a hidden href="?c=Slide&a=Delete&id=<?=$value->id?>" id="a<?=$value->id?>"></a>
                                                    <a class="btn btn-primary btn-sm" href="?c=Slide&a=Update&id=<?=$value->id?>"><i class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            <!-- /.box-header -->
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
    $('#qlwebsite').addClass('active');
    $('#slide').addClass('active');
</script>
</body>
</html>


