<footer>
            <div class="footer-part wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="icon-default icon-dark">
                    <img src="asset/web/images/footer-logo.png" alt="">
                </div>
                <div class="container">
                    <div class="footer-inner">
                        <?php
                        foreach ($contact as $value)
                        {
                        ?>
                            <div class="footer-info">
                                <h3>Trần Đức Bo MilkTea</h3>
                                <p><?=$value->address?></p>
                                <p><a href="#"><?=$value->phone?></a></p>
                                <p><a href="#"><?=$value->email?></a></p>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div class="copy-right">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 copyright-before">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 copyright-after">
                                <div class="social-round">
                                    <ul>
                                        <li><a href="<?=$mxh->facebook?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="<?=$mxh->twitter?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="<?=$mxh->instagram?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <!--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>-->
                                        <li><a href="<?=$mxh->google?>"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icon-find">
                    <a href="#">
                        <img class="icon__footer" src="asset/web/images/favicon.png" alt="">
                        <!-- <span>Find us on Map</span> -->
                    </a>
                </div>
                <div class="location-footer-map">
                    <div class="icon-find-location">
                        <a href="#">
                            <img src="asset/web/images/location.png" alt="">
                            <span>Find us on Map</span>
                        </a>
                    </div>
                    <div class="footer-map-outer">
                        <div id="footer-map"></div>
                    </div>
                </div>
            </div>
        </footer>