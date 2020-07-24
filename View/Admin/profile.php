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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img style="display: block" class="profile-user-img img-fluid img-circle"
                                         src="UpLoadFile/Avatars/avatar.png"
                                         />
                                </div>

                                <h3 class="profile-username text-center"><?php echo $user?></h3>

                                <p class="text-muted text-center">Member IT17A1.11 Class</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Followers</b> <a class="float-right">1,322</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Following</b> <a class="float-right">543</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Gender</b> <a class="float-right"><?php echo $data->genDer?></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Profile</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <div class="col-6 row">
                                                    <label class="col-4 col-form-label">UserName</label>
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" name="userName" value="<?=$data->userName?>" id="inputName" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-6 row">
                                                    <label class="col-4 col-form-label">Mật khẩu</label>
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" name="password" value="<?=$data->passWord?>" placeholder="Password">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="fullName" value="<?=$data->fullName?>" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="<?=$data->email?>" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="phone" value="<?=$data->phone?>" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                </div>
            </div>
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
</script>
</body>
</html>


