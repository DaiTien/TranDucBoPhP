<section id="gallery" class="instagram-main home-icon wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="icon-default">
                        <img src="/TranDucBoPhp/asset/web/images/icon23.png" alt="">
                    </div>
                    <div class="container">
                        <div class="build-title">
                            <h2>Thư Viện Ảnh</h2>
                            <h6>Tận hưởng kỳ nghỉ của bạn tại Trần Đức Bo MilkTea? Chia sẻ những khoảnh khắc của bạn với chúng tôi. Theo dõi chúng tôi trên Instagram và sử dụng</h6>
                        </div>
                    </div>
                    <div class="gallery-slider">
                        <div class="owl-carousel owl-theme" data-items="5" data-laptop="5" data-tablet="4" data-mobile="1" data-nav="true" data-dots="false" data-autoplay="true" data-speed="2000" data-autotime="3000">
                            <?php
                            foreach ($image as $value){
                            ?>
                                <div class="item">
                                    <a href="<?=$value->image?>" class="magnific-popup">
                                        <img src="<?=$value->image?>" alt="" class="animated">
                                        <div class="gallery-overlay">
                                            <div class="gallery-overlay-inner">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>