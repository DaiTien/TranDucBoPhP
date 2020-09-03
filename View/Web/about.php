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
    <!-- Page pre loader -->
    <main>
        <div class="main-part">
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
            <!-- Start Breadcrumb Part -->
            <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" style="background-image: url('asset/web/images/breadbg1.jpg');">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <h2>GIỚI THIỆU</h2>
                        <a href="?c=indexwebsite&a=index">Trang Chủ</a>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <!-- Start Welcome Part -->
            <section class="welcome-part home-icon wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="icon-default">
                    <a href="#"><img src="asset/web/images/scroll-arrow.png" alt=""></a>
                </div>
                <?php
                foreach ($introduce as $value) {
                ?>
                    <div class="container">
                        <div class="build-title">
                            <h2><?= $value->title ?></h2>
                            <h6><?= $value->summary ?></h6>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <p id="txtContent"><?= $value->content ?></p>
                                <p><img style="width: 170px;border-radius: 37px;" src="asset/web/images/signature.png" alt=""></p>
                                <p><a href="?c=indexwebsite&a=index" class="btn-black">HOME</a></p>
                            </div>
                            <div style="display:block; width: 555px;height: 392px" class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <img class="about__images" src="<?= $value->image ?>" alt="" >
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </section>
            <!-- End Welcome Part -->
            <!-- Start Food Hours -->
            <section class="food-hours banner-bg home-icon wow fadeInDown" data-background="asset/web/images/banner2.jpg" data-wow-duration="1000ms" data-wow-delay="300ms">
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
            <!-- End Food Hours -->
        </div>
    </main>
    <!-- End Main -->
    <?php
    include 'footer.php';
    ?>
    <!-- Back To Top Arrow -->
    <a href="#" class="top-arrow"></a>

    <?php
    include 'linkfooter.php';
    ?>
</body>

</html>