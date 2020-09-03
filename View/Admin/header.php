<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i style="font-size: 30px" class="fas fa-user-secret"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header"><?php echo '<b>' .$user.'</b>' ?></span>
                <div class="dropdown-divider"></div>
                <a href="?c=IndexAdmin&a=logout" class="dropdown-item text-center">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <div class="dropdown-divider"></div>
                <a href="?c=IndexAdmin&a=profile" class="dropdown-item text-center">
                    <i class="fas fa-users mr-2"></i> My profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="?c=IndexAdmin&a=lockscreen" class="dropdown-item text-center">
                    <i class="fas fa-user-lock"></i> LockScreen
                </a>
                <div class="dropdown-divider"></div>
            </div>
        </li>
    </ul>
</nav>