<div class="header-top">
    <div class="container">
        <div class="header-top-inner">
            <div class="header-top-left">
                <?php
                foreach ($contact as $value)
                {
                ?>
                    <a href="#" class="top-cell">
                        <img src="asset/web/images/fon.png" alt="">
                        <span><?=$value->phone?></span>
                    </a>
                    <a href="#" class="top-email">
                        <span><?=$value->email?></span>
                    </a>
                <?php
                }
                ?>


            </div>
            <div class="header-top-right">
                <div class="social-top">
                    <ul>
                        <li><a href="<?=$mxh->facebook?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="<?=$mxh->twitter?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="<?=$mxh->instagram?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <!--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>-->
                        <li><a href="<?=$mxh->google?>"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="language-menu">
                   
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Turkish</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Nederlands</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Français</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Deutsch</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Italiano</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

