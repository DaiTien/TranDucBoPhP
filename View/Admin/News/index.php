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
                        <form action="?c=NewsAdmin&a=UpActive" method="post">
                            <div class="row">
                                <div class="col-3">
                                    <a href="?c=NewsAdmin&a=Insert" class="ml-3 mt-2 btn btn-primary"><i class="fas fa-plus"></i>Thêm</a>
                                </div>
                                <div class="col-1">
                                    <input type="submit" name="duyet" class="ml-3 mt-2 btn btn-primary" value="Duyệt"/>
                                </div>
                                <div class="col-1">
                                    <input type="submit" name="koduyet" class="ml-3 mt-2 btn btn-primary" value="Hủy Duyệt"/>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead style="text-align: center">
                                    <tr id="tbheader">
                                        <th></th>
                                        <th>STT</th>
                                        <!-- <th>ID</th> -->
                                        <th>Tiêu đề</th>
                                        <!-- <th>Tóm lược</th>-->
                                        <th>Nội dung</th>
                                        <th>Hình ảnh</th>
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
                                            <td><input type="checkbox" name='array[]' value="<?=$value->id?>"></td>
                                            <td><?=$stt++?></td>
                                            <!-- <td><?=$value->id?></td> -->
                                            <td><?=$value->title?></td>
                                            <!-- <td><?=$value->summary?></td>-->
                                            <td>
                                                <textarea class="textarea form-control" cols="155" rows="5" ><?=$value->content?></textarea>
                                            </td>
                                            <td>
                                                <img class="imagee" src="<?=$value->image?>">
                                            </td>
                                            <td>
                                                <?php
                                                if ($value->active==1)
                                                {
                                                    echo 'Đã Duyệt';
                                                }else{
                                                    echo 'Chưa Duyệt';
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-danger glyphicon glyphicon-trash btn-sm" href="javascript:void(0);" onclick="fucAlert(this.id)" id="<?=$value->id?>"><i class="fas fa-trash-alt"></i></a>
                                                <a href="?c=NewsAdmin&a=Delete&id=<?=$value->id?>" id="a<?=$value->id?>" hidden></a>
                                                <a class="btn btn-primary glyphicon glyphicon-pencil btn-sm" href="?c=NewsAdmin&a=Update&id=<?=$value->id?>"><i class="fas fa-edit"></i></a>
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
    $('#qltintuc').addClass('active');
</script>
</body>
</html>


