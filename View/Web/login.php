<section id="login" class="home-icon login-register bg-skeen">
    <div class="icon-default icon-skeen">
        <img src="asset/web/images/icon11.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="build-title">
                <h2>Đăng Nhập &amp; Đăng Ký</h2>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

                <div class="login-wrap form-common">
                    <div class="title text-center">
                        <h3 class="text-coffee">Đăng Nhập</h3>
                        <span class="text-uppercase text-danger">
                            <?php
                            if (isset($_GET['lg'])) {
                                if ($_GET['lg'] == 0) {
                                    echo 'Tài khoản hoặc mật khẩu không đúng!';
                                }
                            }
                            ?>
                        </span>
                    </div>
                    <form class="login-form" method="post" name="login" action="?c=indexwebsite&a=Login">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="user" placeholder="Username" class="input-fields" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="password" name="password" placeholder="********" class="input-fields" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a href="#" class="pull-right" data-toggle="modal" data-target="#booktable">Quên mật khẩu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" name="submit" value="ĐĂNG NHẬP" class="button-default button-default-submit">
                            </div>
                        </div>
                    </form>
<!--                    <div class="divider-login">-->
<!--                        <hr>-->
<!--                        <span>Or</span>-->
<!--                    </div>-->
                    <!--                    <div class="row">-->
                    <!--                        <div class="col-md-6 col-sm-12 col-xs-12">-->
                    <!--                            <a href="#" class="facebook-btn btn-change button-default"><i class="fa fa-facebook"></i>Đăng Nhập Facebook</a>-->
                    <!--                        </div>-->
                    <!--                        <div class="col-md-6 col-sm-12 col-xs-12">-->
                    <!--                            <a href="#" class="tweeter-btn btn-change button-default"><i class="fa fa-twitter"></i>Đăng Nhập Twitter</a>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
            </div>
            <!-- Start Book Table -->
            <p>
                <?php
                if (isset($_GET['p']))
                {
                    if ($_GET['p'] == 1)
                    {
                        echo "<script type='text/javascript'>Swal.fire({";
                        echo "icon: 'error',";
                        echo "title: 'Mật khẩu mới đã được gửi vào email của!',";
                        echo "text: 'Vui lòng kiểm tra email!',";
                        echo "})</script>";
                    }else{
                        echo "<script type='text/javascript'>Swal.fire({";
                        echo "icon: 'error',";
                        echo "title: 'Tên đăng nhập hoặc email không tồn tại!!',";
                        echo "text: 'Vui lòng chọn kiểm tra lại!',";
                        echo "})</script>";
                    }
                }
                ?>
            </p>
            <form method="post" action="?c=indexwebsite&a=forgotPassword">
                <div class="modal fade booktable" id="booktable" tabindex="-1" role="dialog" aria-labelledby="booktable">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <div class="table-title">
                                    <h2>Khôi Phục Mật Khẩu</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="userName" placeholder="Tên đăng nhập" required>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="submit" name="submit" value="KHÔI PHỤC MẬT KHẨU" class="btn-big button-default button-default-submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- End Book Table -->
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="register-wrap form-common">
                    <div class="title text-center">
                        <h3 class="text-coffee">Đăng Ký</h3>
                        <span class="text-uppercase text-danger">
                            <?php
                            if (isset($_GET['g'])) {
                                if ($_GET['g'] == 1) {
                                    echo 'Đăng ký tài khoản thành công!';
                                } else if ($_GET['g'] == 2) {
                                    echo 'Xác nhận mật khẩu không chính xác!';
                                } else {
                                    echo 'Email or Tên đăng nhập đã tồn tại!';
                                }
                            }
                            ?>
                        </span>
                    </div>
                    <form class="register-form" method="post" name="register" action="?c=indexwebsite&a=Register">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="userName" placeholder="Tên Đăng Nhập" class="input-fields" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="fullName" placeholder="Họ Và Tên" class="input-fields" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select name="gender" class="input-fields" required>
                                    <option value="">Giới Tính</option>
                                    <option value="True">Nam</option>
                                    <option value="False">Nữ</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="email" name="email" placeholder="Email" class="input-fields" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="phone" placeholder="Số điện thoại" class="input-fields" id="edit" size="0" maxlength="10" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="password" name="password" placeholder="Mật Khẩu" class="input-fields" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="password" name="confirmPassword" placeholder="Nhập Lại Mật Khẩu" class="input-fields" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" name="submit" class="button-default button-default-submit" value="Đăng Ký">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>