<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
        
        <main>
            <div class="main-part">
             
                <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" style="background-image: url('asset/web/images/breadbg1.jpg');">
                    <div class="container">
                        <div class="breadcrumb-inner">
                            <h2>Hướng dẫn mua hàng Online</h2>
                           
                            
                        </div>
                    </div>
                </section>
                <!-- End Breadcrumb Part -->
                <!-- Start Blog List -->
                <section class="welcome-part home-icon wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="icon-default">
                    <a href="#"><img src="asset/web/images/scroll-arrow.png" alt=""></a>
                </div>
                <?php
                foreach ($huongdan as $value) {
                ?>
                    <div class="container">
                        <div class="build-title">
                            <h2><?= $value->title ?></h2>                       
                                <p id="txtContent"><?= $value->content ?></p>
                                <p><a href="?c=indexwebsite&a=index" class="btn-black">HOME</a></p>
                           </div>
                     
                    </div>
                <?php
                }
                ?>
            </section>
                
            </div>
        </main>
        
        <?php
        include 'footer.php';
        ?>
      
    </div>
    <!-- Back To Top Arrow -->
    <a href="#" class="top-arrow"></a>
    <?php
    include 'linkfooter.php';
    ?>

</body>

</html>