<section id="slide" class="slide">
    <div class="slider__list">
        <?php
        foreach ($slide as $value){
        ?>
            <div class="slider__item">
                <div class="slider__inner">
                    <h1 class="slider__heading">
                        Trà Sữa
                        <span>Trần Đức Bo</span>
                        Fc
                    </h1>
                    <p class="slider__title">
                        Trà Sữa của chúng tôi không làm bạn thất vọng !!!
                    </p>
                    <a class="btn btn-danger btn--buy" href="">Mua Ngay</a>
                </div>
                <img class="slide__images"  src="<?=$value->imageSlide?>" alt="">
            </div>
        <?php
        }
        ?>
    </div>
</section>