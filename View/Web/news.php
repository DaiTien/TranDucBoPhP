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
                <img src="/TranDucBoPhp/asset/web//TranDucBoPhP/asset/Web/images/Preloader.gif" alt="Laboom" />
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
                <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" style="background-image: url('/TranDucBoPhP/asset/Web/images/breadbg1.jpg');">
                    <div class="container">
                        <div class="breadcrumb-inner">
                            <h2>Trang Chủ</h2>
                            <a href="#">Trang Chủ</a>
                            <span>Tin Tức</span>
                        </div>
                    </div>
                </section>
                <!-- End Breadcrumb Part -->
                <!-- Start Blog List -->
                <section class="home-icon blog-main-section text-center blog-main-full wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="icon-default">
                        <img src="/TranDucBoPhP/asset/Web/images/scroll-arrow.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-right-section">
                                    <div class="blog-right-listing wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="feature-img">
                                            <img src="/TranDucBoPhP/asset/Web/images/img49.png" alt="">
                                            <div class="date-feature">27
                                                <br> <small>may</small></div>
                                        </div>
                                        <div class="feature-info">
                                            <span><i class="icon-user-1"></i> By Ali TUFAN</span>
                                            <span><i class="icon-comment-5"></i> 5 Comments</span>
                                            <h5>How Do You Like Your Sausage?</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
                                            <a href="blog_single.html" class="button-default">Read More <i class="icon-right-4"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-right-listing wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="feature-img">
                                            <img src="/TranDucBoPhP/asset/Web/images/img50.png" alt="">
                                            <div class="date-feature">27
                                                <br> <small>may</small></div>
                                        </div>
                                        <div class="feature-info">
                                            <span><i class="icon-user-1"></i> By Ali TUFAN</span>
                                            <span><i class="icon-comment-5"></i> 5 Comments</span>
                                            <h5>There are many variations of passages</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
                                            <a href="blog_single.html" class="button-default">Read More <i class="icon-right-4"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-right-listing wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="feature-img">
                                            <img src="/TranDucBoPhP/asset/Web/images/img51.png" alt="">
                                            <div class="date-feature">27
                                                <br> <small>may</small></div>
                                        </div>
                                        <div class="feature-info">
                                            <span><i class="icon-user-1"></i> By Ali TUFAN</span>
                                            <span><i class="icon-comment-5"></i> 5 Comments</span>
                                            <h5>There are many variations of passages</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
                                            <a href="blog_single.html" class="button-default">Read More <i class="icon-right-4"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-pagination">
                                        <div class="gallery-pagination-inner">
                                            <ul>
                                                <li><a href="#" class="pagination-prev"><i class="icon-left-4"></i> <span>PREV page</span></a></li>
                                                <li class="active"><a href="#"><span>1</span></a></li>
                                                <li><a href="#"><span>2</span></a></li>
                                                <li><a href="#"><span>3</span></a></li>
                                                <li><a href="#" class="pagination-next"><span>next page</span> <i class="icon-right-4"></i></a></li>
                                            </ul>
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