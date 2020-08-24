<section class="client banner-bg invert invert-black home-icon wow fadeInDown" data-background="asset/web/images/banner3.jpg" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="icon-default icon-black">
                        <img src="asset/web/images/icon21.png" alt="">
                    </div>
                    <div class="container">
                        <div class="build-title">
                            <h2>Họ Nói Gì Về BoBo MilkTea</h2>
                            <h6>Hơn 1500+ Hài Lòng</h6>
                        </div>
                        <div class="client-say">
                            <div class="owl-carousel owl-theme" data-items="1" data-laptop="1" data-tablet="1" data-mobile="1" data-nav="false" data-dots="true" data-autoplay="true" data-speed="1800" data-autotime="5000">
                                <?php
                                foreach ($feedBack as $value)
                                {
                                ?>
                                    <div class="item">
                                        <p><img class="client__img" src="asset/web/images/client1.png" alt=""></p>
                                        <h5><?=$value->name?></h5>
                                        <p>Chủ đề: <?=$value->title?></p>
                                        <p><?=$value->content?></p>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>