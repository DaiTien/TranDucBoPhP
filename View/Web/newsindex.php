<section id="news" class="feature-blog-wrap bg-skeen home-icon wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
    <div class="icon-default icon-skeen">
        <img src="asset/web/images/icon20.png" alt="">
    </div>
    <div class="container">
        <div class="build-title">
            <h2>Tin Tức</h2>
            <h6>Đọc Những Tin Tức Mới Nhất Của BoBo MilkTea</h6>
        </div>
        <div class="feature-blog">
            <div class="owl-carousel owl-theme" data-items="3" data-laptop="3" data-tablet="2" data-mobile="1" data-nav="true" data-dots="false" data-autoplay="true" data-speed="1800" data-autotime="5000">
                <?php
                foreach ($news as $value) {
                ?>
                    <div class="item">
                        <a href="?c=IndexWebsite&a=news&id=<?= $value->id ?>">
                            <div class="feature-img">
                                <div class="feature-img feature-img__newsind">
                                    <img class="news__slide" src="<?= $value->image ?>" alt="">
                                </div>
                                <div class="feature-info">
                                    <!--<span><i class="icon-user"></i> By Ali TUFAN</span>
                                                <span><i class="icon-comment"></i> 5 Comments</span>-->
                                    <h5><?= $value->title ?></h5>
                                    <p><?= $value->summary ?></p>
                                    <a href="?c=IndexWebsite&a=news&id=<?= $value->id ?>">Read More <i class="icon-more"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</section>