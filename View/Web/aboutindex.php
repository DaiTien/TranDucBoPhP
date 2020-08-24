<style>
    p{
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
<section id="reach-to" class="welcome-part home-icon">
                    <div class="icon-default">
                        <a href="#reach-to" class="scroll"><img src="asset/web/images/scroll-arrow.png" alt=""></a>
                    </div>
                    <?php
                    foreach ($introduce as $value){
                    ?>
                        <div class="container">
                            <div class="build-title">
                                <h2><?=$value->title?></h2>
                                <h6><?=$value->summary?></h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <p id="txtContent"><?=$value->content?></p>
                                    <p><img style="width: 170px;border-radius: 37px;" src="asset/web/images/signature.png" alt=""></p>
                                    <p><a href="?c=IndexWebsite&a=about" class="btn-black">Xem Thêm</a></p>
                                </div>
                                <div  class="col-md-6 col-sm-6 col-xs-12 about__images wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <img src="<?=$value->image?>" alt="" style="border-radius:10%;width: 100%;height: 100%;box-shadow:5px 7px 10px rgba(0,0,0,0.5);">
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="float-main">
                        <div class="icon-top-left">
                            <img src="asset/web/images/icon1.png" alt="">
                        </div>
                        <div class="icon-bottom-left">
                            <img src="asset/web/images/icon2.png" alt="">
                        </div>
                        <div class="icon-top-right">
                            <img src="asset/web/images/icon3.png" alt="">
                        </div>
                        <div class="icon-bottom-right">
                            <img src="asset/web/images/icon4.png" alt="">
                        </div>
                    </div>
                </section>