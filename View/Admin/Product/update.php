
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trần Đức Bo | Quản lý website</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="asset/admin/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        .custom-banner{
            max-height: 400px;
            overflow: hidden;
            text-align: center;
        }
        .custom-banner a{
            position: relative;
            top: 200px;
            z-index: 1;
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
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="card-title">Chỉnh Sửa Đơn Hàng</h3>
                        </div>
                        <form method="post" action="index.php?c=Product&a=LuuSua">
                                <!-- form start -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">MÃ ĐƠN HÀNG</label>
                                            <input type="text"value="<?=$tdb_product->id?>"  class="form-control" name="id" readonly  placeholder="Mã Đơn Hàng">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">TÊN SẢN PHẨM</label>
                                            <input type="text"value="<?=$tdb_product->name?>"  class="form-control" name="name" placeholder="Tên Sản Phẩm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Số lượng </label>
                                            <input type="text"value="<?=$tdb_product->soLuong?>"  class="form-control" name="soLuong" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Gía </label>
                                            <input type="text"value="<?=$tdb_product->price?>"  class="form-control" name="price" placeholder="Gía">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">GIỚI THIỆU</label>
                                    <input type="text" value="<?=$tdb_product->summary?>" class="form-control" name="summary" placeholder="Giới Thiệu">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile">Hình Ảnh Sản Phẩm</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"value="<?=$tdb_product->image?>"  class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-info">Refresh</button>
                                        <a href="?c=Product&a=index" class="btn btn-danger">Cancel</a>
                                    </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
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
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="asset/admin/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="asset/admin/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="asset/admin/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="asset/admin/AdminLTE/bower_components/raphael/raphael.min.js"></script>
<script src="asset/admin/AdminLTE/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="asset/admin/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="asset/admin/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="asset/admin/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="asset/admin/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="asset/admin/AdminLTE/bower_components/moment/min/moment.min.js"></script>
<script src="asset/admin/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="asset/admin/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="asset/admin/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="asset/admin/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="asset/admin/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- DataTables -->
<script src="asset/admin/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="asset/admin/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/admin/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="asset/admin/AdminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/admin/AdminLTE/dist/js/demo.js"></script>
<script>
    $('#qlsanpham').addClass('active');
</script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
</body>
</html>

