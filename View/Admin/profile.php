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
        .imgs:hover .imgChanger{
            display: block;
        }
        .imgChanger{
            background-color:rgba(55,0,0,0.6);
            position: absolute;
            display: none;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            top: 19px;
            left: 80px;
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <form method="post" enctype="multipart/form-data" action="?c=IndexAdmin&a=updateAvatar">
                                    <div class="text-center imgs">
                                        <div class="imgChanger">
                                            <a href="#" onclick="upAvatar()"><i style="font-size: 30px;padding-top: 36%; color: white" class="fas fa-camera-retro"></i></a>
                                        </div>
                                        <input hidden type="file" name="file" id="inputFile">
                                        <input hidden type="submit" name="file" id="avatars">
                                        <img id="imgUser" style="display: block;width: 100px;height: 100px" class="profile-user-img img-fluid img-circle"
                                             src="<?php echo $avatarUser?>"
                                        />
                                    </div>
                                </form>
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
                            <p class="text-center">
                                <?php
                                if (isset($_GET['u']))
                                {
                                    if ($_GET['u'] == 1)
                                    {
                                        echo $_GET['action'] . ' thành công!';
                                    }
                                }
                                ?>
                            </p>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <h1 class="text-primary"><i class="far fa-address-card"></i> Profile</h1>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings">
                                        <form method="post" action="?c=IndexAdmin&a=UpdateProfile" class="form-horizontal">
                                            <div class="form-group row">
                                                <div class="col-6 row">
                                                    <label class="col-4 col-form-label">UserName</label>
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" readonly name="userName" value="<?=$data->userName?>" id="inputName" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-6 row">
                                                    <label class="col-3 col-form-label">Mật khẩu</label>
                                                    <div class="col-7">
                                                        <input type="text" class="form-control" name="password" value="<?=$data->passWord?>" placeholder="Password">
                                                    </div>
                                                    <div class="col-4">
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
                                                    <input type="text" class="form-control" name="email" value="<?=$data->email?>" placeholder="Email">
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
                                                    <p>
                                                        <?php
                                                        if (isset($_GET['r']))
                                                        {
                                                            if ($_GET['r'] == 1)
                                                            {
                                                                echo $_GET['action'].' thành công';
                                                            }
                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                                    <button type="reset" class="btn btn-info">Refresh</button>
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
    function upAvatar() {
        document.getElementById('inputFile').click();
    };
    $('document').ready(function () {
        $("#inputFile").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgUser').attr('src', e.target.result);
                    document.getElementById('avatars').click()
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
</body>
</html>


