<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'linkheader.php';
    ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- <div id="pre-loader">
        <div class="loader-holder">
            <div class="frame">
                <img src="/TranDucBoPhp/asset/web//TranDucBoPhP/asset/Web//TranDucBoPhP/asset/web/images/Preloader.gif" alt="Laboom" />
            </div>
        </div>
    </div> -->
    <div class="wrapper">
        <!-- Start Header -->
        <header>
            <div class="header-part header-reduce sticky">
                <?php
                include 'header.php';
                ?>
                <?php
                include 'menu.php';
                ?>
            </div>
        </header>
        <!-- End Header -->
        <!-- Start Main -->
        <main>
            <div class="main-part">
                <!-- Start Breadcrumb Part -->
                <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" style="background-image: url('/TranDucBoPhP/asset/web/images/breadbg1.jpg');">
                    <div class="container">
                        <div class="breadcrumb-inner">
                            <h2>ORTHER</h2>
                            <a href="#">Trang Chủ</a>
                            <span>Orther</span>
                        </div>
                    </div>
                </section>
                <!-- End Breadcrumb Part -->
                <section class="home-icon shop-cart bg-skeen">
                    <div class="icon-default icon-skeen">
                        <img src="/TranDucBoPhP/asset/web/images/scroll-arrow.png" alt="">
                    </div>
                    <div class="container">
                        <!-- <div class="checkout-wrap wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <ul class="checkout-bar">
                                <li class="active">Shopping Cart</li>
                                <li>Checkout</li>
                                <li>Order Complete</li>
                            </ul>
                        </div> -->
                        <div class="shop-cart-list wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <table class="shop-cart-table">
                                <thead>
                                    <tr>
                                        <th>Sản Phẩm</th>
                                        <th>Giá (VNĐ)</th>
                                        <th class="text-center">Số Lượng</th>
                                        <th>Tổng Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($_SESSION['Cart'] as $key => $value)
                                {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="product-cart">
                                                <img src="<?=$value['img']?>" alt="">
                                            </div>
                                            <div class="product-cart-title">
                                                <span><?=$value['name']?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <strong id="giaTien"><?=$value['gia']?></strong>
                                            <!--<del>$5400.00</del>-->
                                        </td>
                                        <td>
                                            <div class="price-textbox">
                                                <!--<span class="minus-text"><i class="icon-minus"></i></span>-->
                                                <input id="soLuong" readonly name="txt" value="<?=$value['qty']?>" placeholder="1" type="text">
                                                <!--<span class="plus-text"><i class="icon-plus"></i></span>-->

                                            </div>
                                        </td>
                                        <td>
                                            <span id="tongTien"><?=$value['tongTien']?></span>
                                        </td>
                                        <td class="shop-cart-close"><i class="icon-cancel-5"></i></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <form class="login-form" method="post" name="login">
                                <div class="col-md-7 col-sm-7 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="shop-checkout-left">
                                        <h6>Thông Tin Người Chuyển Hàng</h6>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <h5>Thông Tin Chi Tiết</h5>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <input type="text" name="userName" placeholder="Tên Người Nhận" required>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <input type="text" name="phone" placeholder="Số Điện Thoại" required>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <h5>Địa Chỉ Giao Hàng</h5>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <textarea placeholder="Địa Chỉ Giao Hàng" required></textarea>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="cart-total wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="cart-total-title">
                                            <h5>Hóa Đơn</h5>
                                        </div>
                                        <div class="product-cart-total">
                                            <small>Tổng Sản Phẩm</small>
                                            <span><?=$_SESSION['total']?></span>
                                        </div>
                                        <div class="product-cart-total">
                                            <small>Tiền Vận Chuyển</small>
                                            <span>15000 VNĐ</span>
                                        </div>
                                        <div class="grand-total">
                                            <h5>Tổng Tiền <span>Chưa tính được</span></h5>
                                        </div>
                                        <div class="proceed-check">
                                            <input type="submit" value="Thanh Toán" class="btn-primary-gold btn-medium"/>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>
                </section>
            </div>
        </main>
        <!-- End Main -->
        <!-- Start Footer -->
        <?php
        include 'footer.php';
        ?>
        <!-- End Footer -->
        <!-- Start Book Table -->

        <!-- End Book Table -->
    </div>
    <!-- Back To Top Arrow -->
    <a href="#" class="top-arrow"></a>
    <?php
    include 'linkfooter.php';
    ?>
    <script>
        $(document).ready(function()
        {
            var gia = document.getElementById('giaTien').value();
            var soLuong = document.getElementById('soLuong').value();
            $('#tongTien').innerHTML = gia * soLuong;
        });
    </script>
</body>

</html>