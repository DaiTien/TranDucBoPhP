<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="asset/admin/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <!--<p><?php echo $_SESSION['admin']['ten'] ?></p> -->
                <p><?php echo 'Xin chào ' .$user ?></p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!--
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <span type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </span>
            </span>
            </div>
        </form>
        -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li id="dashboard"><a href="?c=indexAdmin&a=trangchu"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li id="qlwebsite" class="treeview">
                <a href="#">
                    <i class="fa fa-server"></i> <span>Quản Lý Website</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="#"><i class="fa fa-circle-o"></i> Slide</a>
                    </li>
                    <!--<li>
                        <a href="#"><i class="fa fa-circle-o"></i> Hệ thống chi nhánh</a>
                    </li>-->
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Giới thiệu</a>
                    </li>
                    <li>
                        <a href="?c=FeedBackAdmin&a=index"><i class="fa fa-circle-o"></i> Phản hồi khách hàng</a>
                    </li>
                    <li>
                        <a href="?c=SocialNetworkAdmin&a=index"><i class="fa fa-circle-o"></i> Mạng Xã Hội</a>
                    </li>
                </ul>
            </li>
            <li id="qlsanpham" class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Quản Lý Sản Phẩm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="?c=Product&a=index"><i class="fa fa-circle-o"></i> Sản phẩm</a></li>

                </ul>
            </li>
            <li id="qltvanh" class="treeview">
                <a href="#">
                    <i class="fa fa-file-archive-o"></i>
                    <span>Quản Lý TV Ảnh</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-file-image-o"></i> Thư Viện Ảnh</a></li>
                </ul>
            </li>
            <li id="qltintuc"><a href="#"><i class="fa fa-newspaper-o"></i> <span>Quản Lý Tin Tức</span></a></li>
            <li id="qlthanhvien"><a href="#"><i class="fa fa-users"></i> <span>Quản Lý Thành Viên</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>