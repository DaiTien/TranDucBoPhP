<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i style="font-size: 30px" class="far fa-bell"></i>
                <span style="font-size: 15px"  class="badge badge-danger navbar-badge">
                    <?php
                    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                    $result = $mysqli->query("select * from tdb_order where active = 0");
                    $total = mysqli_num_rows($result);
                    $result2 = $mysqli->query("select * from tdb_order where transport = 0");
                    $total2 = mysqli_num_rows($result2);
                    $sum = $total + $total2;
                    echo $sum
                    ?>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="?c=Oder&a=index" class="dropdown-item">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="dropdown-item-title font-weight-bold">
                                Đơn hàng
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Bạn có
                                <b class="text-danger">
                                    <?php
                                    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                    $result = $mysqli->query("select * from tdb_order where active = 0");
                                    $total = mysqli_num_rows($result);
                                    echo $total
                                    ?>
                                </b> đơn hàng chưa xem!!
                            </p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="?c=Oder&a=index" class="dropdown-item">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="dropdown-item-title font-weight-bold">
                                Giao hàng
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Bạn có
                                <b class="text-danger">
                                    <?php
                                    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                    $result = $mysqli->query("select * from tdb_order where transport = 0");
                                    $total = mysqli_num_rows($result);
                                    echo $total
                                    ?>
                                </b> đơn hàng chưa giao!!
                            </p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i style="font-size: 30px" class="fas fa-user-secret"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header"><?php echo '<b>' .$user.'</b>' ?></span>
                <div class="dropdown-divider"></div>
                <a href="?c=indexadmin&a=logout" class="dropdown-item text-center">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <div class="dropdown-divider"></div>
                <a href="?c=indexadmin&a=profile" class="dropdown-item text-center">
                    <i class="fas fa-users mr-2"></i> My profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="?c=indexadmin&a=lockscreen" class="dropdown-item text-center">
                    <i class="fas fa-user-lock"></i> LockScreen
                </a>
                <div class="dropdown-divider"></div>
            </div>
        </li>
    </ul>
</nav>