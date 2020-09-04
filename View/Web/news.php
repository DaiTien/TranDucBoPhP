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
                <img src="asset/web/asset/Web/images/Preloader.gif" alt="Laboom" />
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
                <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" style="background-image: url('asset/web/images/breadbg1.jpg');">
                    <div class="container">
                        <div class="breadcrumb-inner">
                            <h2>Tin Tức</h2>
                            <a href="#">Trang Chủ</a>
                            <span>Tin Tức</span>
                        </div>
                    </div>
                </section>
                <!-- End Breadcrumb Part -->
                <!-- Start Blog List -->
                <section class="home-icon blog-main-section text-center blog-main-full wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="icon-default">
                        <img src="asset/web/images/scroll-arrow.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-right-section">
                                    <div class="blog-right-listing wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="feature-img">
                                            <img src="<?=$news->image?>" alt="">
                                            <!-- <div class="date-feature">27
                                                <br> <small>may</small></div> -->
                                        </div>
                                        <div class="feature-info feature-info--modify">
                                            <!-- <span><i class="icon-user-1"></i> By Ali TUFAN</span>
                                            <span><i class="icon-comment-5"></i> 5 Comments</span> -->
                                            <h5><?=$news->title?></h5>
                                            <p><?=$news->content?></p>
                                            <!-- <a href="blog_single.html" class="button-default">Read More <i class="icon-right-4"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Blog List -->
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