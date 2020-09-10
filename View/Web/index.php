<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'linkheader.php';
    ?>

</head>

<body>
    <!-- <div id="pre-loader">
        <div class="loader-holder">
            <div class="frame">
                <img src="asset/web/images/Preloader.gif" alt="Laboom" />
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
                <!-- Start Slider Part -->
                <?php
                include 'slide.php';
                ?>
                <!-- End Slider Part -->
                <!-- Start Welcome Part -->
                <?php
                include 'aboutindex.php';
                ?>
                <!-- End Welcome Part -->
                <!-- Start Dishes Part -->

                <!-- End Dishes Part -->
                <!-- Start Menu Part -->
                <?php
                include 'product.php';
                ?>
                <!-- End Menu Part -->
                <!-- Start Chef -->
                <!-- End Chef -->
                <!-- Start Food Hours -->
                <section class="food-hours home-icon wow fadeInDown" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" data-wow-duration="1000ms" data-wow-delay="300ms" style="background-image: url('asset/web/images/banner2.jpg');">
                    <div class="icon-default icon-gold">
                        <img src="asset/web/images/icon19.png" alt="">
                    </div>
                    <div class="container">
                        <div class="food-blog">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                    <div class="food-blog-inner">
                                        <div class="food-item">
                                            <div class="food-item-inner">
                                                <img src="asset/web/images/icon15.png" alt="">
                                            </div>
                                        </div>
                                        <h2>Breakfast</h2>
                                        <span>8.00 am 10.00 am</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                    <div class="food-blog-inner">
                                        <div class="food-item">
                                            <div class="food-item-inner">
                                                <img src="asset/web/images/icon16.png" alt="">
                                            </div>
                                        </div>
                                        <h2>Lunch</h2>
                                        <span>1.00 am 2.00 am</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                    <div class="food-blog-inner">
                                        <div class="food-item">
                                            <div class="food-item-inner">
                                                <img src="asset/web/images/icon17.png" alt="">
                                            </div>
                                        </div>
                                        <h2>Dinner</h2>
                                        <span>7.00 am 9.00 am</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 food-mxs">
                                    <div class="food-blog-inner">
                                        <div class="food-item">
                                            <div class="food-item-inner">
                                                <img src="asset/web/images/icon18.png" alt="">
                                            </div>
                                        </div>
                                        <h2>Dessert</h2>
                                        <span>All Day</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <a href="?c=indexwebsite&a=Order">
                    <div class="cart">
                        <i class="fa fa-shopping-cart cart__fixed" aria-hidden="true"></i>
                        <span class="cart__count" id="displayCount">
                            <?php
                            $tongSanPham = 0;
                            if (isset($_SESSION['Cart']))
                            {
                                foreach ($_SESSION['Cart'] as $val)
                                {
                                    $tongSanPham = $tongSanPham + $val['qty'];
                                }
                                echo $tongSanPham;
                            }
                            else{
                                echo $tongSanPham;
                            }
                            ?>
                        </span>
                    </div>
                </a>

                <!-- End Food Hours -->
                <!-- Start Feature Blog -->
                <?php
                include 'newsindex.php';
                ?>
                <!-- End Feature Blog -->
                <!-- Start Client Say -->
                <?php
                include 'client.php';
                ?>
                <!-- End Client Say -->
                <!--Contract  -->
                <?php
                include 'contract.php';
                ?>

                <!--End Contrac  -->
                <!-- Start Feature list -->
                <?php
                include 'service.php';
                ?>
                <!-- End Feature list -->

                <!-- Start Instagram -->
                <?php
                include 'galleryindex.php';
                ?>
                <!-- End Instagram -->
            </div>
        </main>
        <!-- End Main -->
        <!-- Login  -->
        <?php
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login'] == 1) {
                echo '';
            }
        } else {
            include 'login.php';
        }
        ?>
        <!-- Register -->
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
    <?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "SendMessage") {
            echo "<script type=\"text/javascript\"> $(document).ready(function(){ $('#lienhe').click()});</script>";
        }
        if ($_GET['action'] == "Register") {
            echo "<script type=\"text/javascript\"> $(document).ready(function(){ $('#login_register').click()});</script>";
        }
        if ($_GET['action'] == "SanPham") {
            echo "<script type=\"text/javascript\"> $(document).ready(function(){ $('#san_pham').click()});</script>";
        }
    }
    ?>
    <script>
        function myFunction(x) {
            //alert(x.id);
            //document.getElementById('a'+x.id).click();
            x.classList.toggle("icon__dislike");
        }
        function functionAlert(x) {
            document.getElementById('cart'+x.id).click();
            swal("Bạn Đã Thêm Vào Giỏ Hàng", "Hãy kiểm tra giỏ hàng của bạn!", "success");
        }
        function functionOrder(x) {
            document.getElementById('a'+x.id).click();
        }

    </script>

</body>

</html>