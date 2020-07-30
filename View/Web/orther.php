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
                                        <th>Giá</th>
                                        <th>Số Lượng</th>
                                        <th>Tổng Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Sản Phẩm</th>
                                        <td>
                                            <div class="product-cart">
                                                <img src="/TranDucBoPhP/asset/web/images/tnc-1.png" alt="">
                                            </div>
                                            <div class="product-cart-title">
                                                <span>Blanched Garlic</span>
                                            </div>
                                        </td>
                                        <th>Sản Phẩm</th>
                                        <td>
                                            <strong>$59</strong>
                                            <del>$5400.00</del>
                                        </td>
                                        <th>Số Lượng</th>
                                        <td>
                                            <div class="price-textbox">
                                                <span class="minus-text"><i class="icon-minus"></i></span>
                                                <input name="txt" placeholder="1" type="text">
                                                <span class="plus-text"><i class="icon-plus"></i></span>
                                            </div>
                                        </td>
                                        <th>Tổng Tiền</th>
                                        <td>
                                            $59
                                        </td>
                                        <td class="shop-cart-close"><i class="icon-cancel-5"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Sản Phẩm</th>
                                        <td>
                                            <div class="product-cart">
                                                <img src="/TranDucBoPhP/asset/web/images/tnc-2.png" alt="">
                                            </div>
                                            <div class="product-cart-title">
                                                <span>Blanched Garlic</span>
                                            </div>
                                        </td>
                                        <th>Giá</th>
                                        <td>
                                            <strong>$59</strong>
                                            <del>$5400.00</del>
                                        </td>
                                        <th>Số Lượng</th>
                                        <td>
                                            <div class="price-textbox">
                                                <span class="minus-text"><i class="icon-minus"></i></span>
                                                <input name="txt" placeholder="1" type="text">
                                                <span class="plus-text"><i class="icon-plus"></i></span>
                                            </div>
                                        </td>
                                        <th>Tổng Tiền</th>
                                        <td>
                                            $59
                                        </td>
                                        <td class="shop-cart-close"><i class="icon-cancel-5"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Sản Phẩm</th>
                                        <td>
                                            <div class="product-cart">
                                                <img src="/TranDucBoPhP/asset/web/images/tnc-3.png" alt="">
                                            </div>
                                            <div class="product-cart-title">
                                                <span>Blanched Garlic</span>
                                            </div>
                                        </td>
                                        <th>Giá</th>
                                        <td>
                                            <strong>$59</strong>
                                            <del>$5400.00</del>
                                        </td>
                                        <th>Số Lượng</th>
                                        <td>
                                            <div class="price-textbox">
                                                <span class="minus-text"><i class="icon-minus"></i></span>
                                                <input name="txt" placeholder="1" type="text">
                                                <span class="plus-text"><i class="icon-plus"></i></span>
                                            </div>
                                        </td>
                                        <th>Tổng Tiền</th>
                                        <td>
                                            $59
                                        </td>
                                        <td class="shop-cart-close"><i class="icon-cancel-5"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- <div class="product-cart-detail">
                                <div class="cupon-part">
                                    <input type="text" name="txt" placeholder="Cupon Code">
                                </div>
                                <a href="#" class="btn-medium btn-dark-coffee">Apply Coupon</a>
                                <a href="#" class="btn-medium btn-skin pull-right">UPDATE cart</a>
                            </div> -->
                        </div>
                        <div class="cart-total wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="cart-total-title">
                                <h5>Hóa Đơn</h5>
                            </div>
                            <div class="product-cart-total">
                                <small>Tổng Sản Phẩm</small>
                                <span>$140.00</span>
                            </div>
                            <div class="product-cart-total">
                                <small>Tổng Tiền Vận Chuyển</small>
                                <span>$15.00</span>
                            </div>
                            <div class="grand-total">
                                <h5>Tổng Tiền <span>$140.00</span></h5>
                            </div>
                            <div class="proceed-check">
                                <a href="shop_checkout.html" class="btn-primary-gold btn-medium">Thanh Toán</a>
                            </div>
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

</body>

</html>