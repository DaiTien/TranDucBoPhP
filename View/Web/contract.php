<section id="contract" class="default-section contact-part home-icon">
                    <div class="icon-default">
                        <img src="/TranDucBoPhP/asset/web/images/icon20.png" alt="">
                    </div>
                    <div class="container">
                        <div class="title text-center">
                            <h2 class="text-coffee">Liên Hệ Với Chúng Tôi</h2>
                            <h6 class="heade-xs">Chúng Tôi luôn luôn sẵn sàng giải đáp mọi thắc mắc của quí vị .</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <h5 class="text-coffee">Hãy để lại cho chúng tôi lời nhắn</h5>
                                <form id="quickForm" method="post" action="?c=IndexWebsite&a=sendFeedback">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Họ *</label>
                                            <input name="ho" type="text" required>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Tên *</label>
                                            <input name="ten" type="text" required>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Email *</label>
                                            <input name="email" type="email" required>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Chủ đề *</label>
                                            <input name="title" type="text" required>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Nội dung *</label>
                                            <textarea name="content" required></textarea>
                                        </div>
                                        <div class="col-md-11 col-sm-11 col-xs-11">
                                            <span class="text-danger">
                                                <?php
                                                if (isset($_GET['r']))
                                                {
                                                    if ($_GET['r']==1){
                                                        echo $_GET['action'] .' thành công! Cảm ơn bạn đã đóng góp ý kiến';
                                                    }
                                                }
                                                ?>
                                            </span>
                                            <input value="SEND MESSAGE" class="btn-black pull-right" type="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <address>
                                    <span class="text-primary co-title">Địa Chỉ Của Chúng Tôi .</span>
                                    <?php
                                    foreach ($contact as $value)
                                    {
                                        ?>
                                        <p><?=$value->address?></p>
                                        <p><a href="tel:<?=$value->phone?>"><?=$value->phone?></a>
                                            <br> <a href="mailto:<?=$value->email?>"><?=$value->email?></a></p>
                                        <?php
                                    }
                                    ?>

                                </address>
                                <h5 class="text-coffee">Giờ Mở Cửa</h5>
                                <ul class="time-list">
                                    <li><span class="week-name">Thứ 2</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Thứ 3</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Thứ 4</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Thứ 5</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Thứ 6</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Thứ 7</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Chủ Nhật</span> <span>Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
