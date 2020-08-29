<section id="products" class="special-menu bg-skeen home-icon wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
    <div class="icon-default icon-skeen">
        <img src="asset/web/images/icon6.png" alt="">
    </div>
    <div class="container">
        <div class="build-title">
            <h2>Our Special Menu</h2>
            <h6>Chúng thôi luôn mang lại niềm tin cho khách hàng &amp; tạo ra những lý trà sữa tốt nhất.</h6>
        </div>
        <div class="menu-wrapper">
            <div class="portfolioFilter">
                <div class="portfolioFilter-inner">
                    <a href="javascript:;" data-filter="*" class="current">All</a>
                    <?php
                    foreach ($productType as $value) {
                    ?>
                        <a class="text-uppercase" href="javascript:;" data-filter=".<?= $value->id ?>"><?= $value->name ?></a>
                    <?php
                    }
                    ?>
                    <!--<a href="javascript:;" data-filter=".breakfast">LATTE SERIES</a>
                                    <a href="javascript:;" data-filter=".dessert">TOPPING</a>
                                    <a href="javascript:;" data-filter=".dinner">TRÀ SỮA</a>
                                    <a href="javascript:;" data-filter=".freshfood">TRÀ NGUYÊN CHẤT</a>
                                    <a href="javascript:;" data-filter=".lunch">THỨC UỐNG ĐÁ XAY</a>-->
                </div>

            </div>
            <div class="portfolioContainer row">
                <?php
                foreach ($product as $value) {
                ?>
                    <div id="<?= $value->id ?>" class="col-md-6 col-sm-6 col-xs-12 isotope-item menu-list__product <?= $value->type ?>">
                        <div class="menu-list">
                            <span class="menu-list-product">
                                <img src="<?= $value->image ?>" alt="">
                            </span>
                            <h5><?= $value->name ?> <span><?= $value->priceM ?> vnd</span></h5>
                            <p><?= $value->summary ?></p>
                        </div>
                        <div class="menu__icon">
                            <i onclick="myFunction(this)" id="like<?= $value->id ?>" class="fa fa-heart icon__like"> <span>Yêu Thích</span> </i>
                            <a hidden id="alike<?= $value->id ?>" href="?c=IndexWebsite&a=productLike&id=<?= $value->id ?>"></a>
                            <i onclick="functionAlert(this)" id="add<?= $value->id ?>" class="fa fa-plus-square icon__like icon__like--add" id="countButton" aria-hidden="true"> <span>Thêm giỏ hàng</span> </i>
                            <a hidden id="cartadd<?= $value->id ?>" href="?c=IndexWebsite&a=addCart&id=<?= $value->id ?>"></a>
                            <i onclick="functionOrder(this)" id="order<?= $value->id ?>" class="fa fa-cart-plus icon__like" aria-hidden="true"> <span>Order</span> </i>
                            <a hidden id="aorder<?= $value->id ?>" href="?c=IndexWebsite&a=OrderNow&id=<?= $value->id ?>"></a>
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>
            <!-- <div class="btn-outer">
                                <a href="#" class="btn-main btn-shadow">Xem Thêm Menu</a>
                            </div> -->
        </div>
    </div>
    <div class="float-main">
        <div class="icon-top-left">
            <img src="asset/web/images/icon7.png" alt="">
        </div>
        <div class="icon-bottom-left">
            <img src="asset/web/images/icon8.png" alt="">
        </div>
        <div class="icon-top-right">
            <img src="asset/web/images/icon9.png" alt="">
        </div>
        <div class="icon-bottom-right">
            <img src="asset/web/images/icon10.png" alt="">
        </div>
    </div>
</section>