<style>
    #btnLogout{
        border: 1px solid white;
        display: block;
        width: 73px;
        height: 35px;
        position: absolute;
        right: -69%;
        bottom: 20%;
        text-align: center;
        line-height: 30px;
        padding: 0;
    }
</style>
<div class="header-bottom">
                    <div class="container">
                        <div class="header-info">
                            <div class="header-info-inner menu-main">
                                <ul>
                                    <li class="has-child">
                                        <a class="menu__link" href="#gallery">Thư Viện Ảnh</a>

                                    </li>
                                    <li class="has-child">
                                        <a class="menu__link" id="lienhe" href="#contract">Liên Hệ</a>
                                    </li>
                                    <li class="has-child">
                                        <?php

                                        if (isset($_SESSION['login']) && $_SESSION['login'] == 1)
                                        {
                                            echo '<a >Xin chào ' .$user .'</a>';
                                            echo '<a href="?c=IndexWebsite&a=Logout" id="btnLogout" class="btn">Logout</a>';
                                        }
                                        else
                                        {
                                            echo "<a id=\"login_register\" href=\"#login\">Đăng Nhập&nbsp;/&nbsp;Đăng Ký</a>";
                                        }
                                        ?>
                                        <ul class="drop-nav">
                                        <li><a href="homepage1.html">Giỏ hàng</a></li>
                                        <li><a href="homepage2.html">Sản phẩm yêu thích</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!--<div class="search-part">
                                    <a class="search-part" href="#"></a>
                                    <div class="search-box">
                                        <input type="text" name="txt" placeholder="Search">
                                        <input type="submit" name="submit" value=" ">
                                    </div>
                                </div>-->

                            </div>
                        </div>
                        <div class="menu-icon">
                            <a href="#" class="hambarger">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </div>
                        <div class="book-table header-collect book-sm">
                            <a href="#" data-toggle="modal" data-target="#booktable"><img src="/TranDucBoPhp/asset/web/images/icon-table.png" alt="">Book a Table</a>
                        </div>
                        <div class="menu-main">
                            <ul>
                                <li class="has-child">
                                    <a href="?c=IndexWebsite">Trang Chủ</a>
                                </li>
                                <li class="mega-menu">
                                    <a class="menu__link" href="#products">Sản Phẩm</a>
                                    
                                </li>
                                <li class="has-child">
                                    <a class="menu__link" href="#reach-to">Giới Thiệu</a>
        
                                </li>
                                <li class="has-child">
                                    <a class="menu__link" href="#news">Tin Tức</a>
                                 
                                </li>
                            </ul>
                        </div>
                        <div class="logo">
                            <a href="index.php"><img src="/TranDucBoPhp/asset/web/images/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>