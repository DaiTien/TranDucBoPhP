<style>
    .image{
        display: block;
        background-color: red;
        width: 57px;
        height: 57px;
        border-radius: 39px;
        margin-left: 20px;
        padding-left: 0 !important;
    }
    .image img{
        display: block;
        width: 100%;
        height: 100%;
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-light">Admin <b>Trần Đức Bo</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $avatarUser?>" class="img-circle">
            </div>
            <div class="info">
                <!--<p><?php echo $_SESSION['admin']['ten'] ?></p> -->
                <p style="color: white"><?php echo 'Xin chào <b>' .$user.'</b>' ?>
                </br>
                    <span><i class="fas fa-circle text-success"></i> Online</span>
                </p>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a id="dashboard" href="?c=indexAdmin&a=trangchu" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a id="qlwebsite" href="#" class="nav-link">
                        <i class="nav-icon fas fa-pager"></i>
                        <p>
                            Quản Lý Website
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link" id="slide" href="?c=Slide&a=index"><i class="far fa-circle nav-icon"></i> Slide</a>
                        </li>
                        <!--<li>
                            <a class="nav-link" href="#"><i class="far fa-circle nav-icon"></i> Hệ thống chi nhánh</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" id="gioithieu" href="?c=Introduce&a=index"><i class="far fa-circle nav-icon"></i> Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="feedback" href="?c=FeedBackAdmin&a=index"><i class="far fa-circle nav-icon"></i> Phản hồi khách hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mxh" href="?c=SocialNetworkAdmin&a=index"><i class="far fa-circle nav-icon"></i> Mạng Xã Hội</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a id="qlsanpham" href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Quản Lý Sản Phẩm
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?c=Product&a=index" id="sanpham" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?c=ProductType&a=index" id="loaiSanpham" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Loại sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a id="qltvanh" href="#" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            QL Thư Viện Ảnh
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?c=LibraryImage&a=index" id="anh" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ảnh</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="qltintuc" href="?c=NewsAdmin&a=index" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Quản Lý Tin Tức
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="qlthanhvien" href="?c=UserAdmin&a=index" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Quản Lý Thành Viên
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>