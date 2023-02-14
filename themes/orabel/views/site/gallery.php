<?php
$chunks = array_chunk($models, 3);
?>

<div class="orb-page-frame orb-portfolio-3">
    <div class="orb-top-bar-frame">
        <div class="orb-content orb-top-bar">
            <?= $this->render('_logo') ?>
            <div class="orb-right-side">
                <div class="orb-menu-frame">
                    <nav>
                        <?= $this->render('menu') ?>
                    </nav>
                </div>
            </div>
            <div class="orb-menu-btn">
                <span></span>
            </div>
        </div>
    </div>

    <div class="swiper-container orb-slider-1s">
        <div class="swiper-wrapper">
            <?php foreach($chunks as $chunk): ?>
                <?php
                    $first = $second = $third = null;
                    if(isset($chunk[0])){
                        $first = $chunk[0];
                    }

                    if(isset($chunk[1])){
                        $second = $chunk[1];
                    }

                    if(isset($chunk[2])){
                        $third = $chunk[2];
                    }


                ?>
            <div class="swiper-slide">
                <div class="orb-content" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                    <div class="orb-grid">
                        <?php if($first): ?>
                        <div class="orb-g-30 orb-sm-100">
                            <div class="orb-position-fix">
                                <div class="orb-slide-caption" data-swiper-parallax-y="120" data-swiper-parallax-scale="0.5">
                                    <span>
                                        <?= isset($second) ? $second->prettyTitle : '' ?>
                                    </span>
                                    <span>
                                        <?= isset($second) ? $second->prettyCaption : '' ?>
                                    </span>
                                </div>
                                <div class="orb-photo-frame orb-obj-1" data-swiper-parallax-y="-100" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1250">
                                    <img src="<?= $first->getImageURLs(['bigger-'])['bigger-'] ?>" alt="عکس" />
                                    <a data-fancybox="gallery" data-no-swup href="<?= $first->getImageURLs(['bigger-'])['bigger-'] ?>" class="orb-zoom"><img src="<?= $first->getImageURLs(['bigger-'])['bigger-'] ?>" alt="بزرگنمایی" /></a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if($second): ?>
                        <div class="orb-g-50 orb-sm-100">
                            <div class="orb-photo-frame orb-obj-2" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1300">
                                <img src="<?= $second->getImageURLs(['bigger-'])['bigger-'] ?>" alt="عکس" />
                                <a data-fancybox="gallery" data-no-swup href="<?= $second->getImageURLs(['bigger-'])['bigger-'] ?>" class="orb-zoom"><img src="img/ui/zoom.svg" alt="بزرگنمایی" /></a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if($third): ?>
                        <div class="orb-g-20 orb-sm-100">
                            <div class="orb-photo-frame orb-obj-3" data-swiper-parallax-y="-100" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1200">
                                <img src="<?= $third->getImageURLs(['bigger-'])['bigger-'] ?>" alt="عکس" />
                                <a data-fancybox="gallery" data-no-swup href="<?= $third->getImageURLs(['bigger-'])['bigger-'] ?>" class="orb-zoom"><img src="img/ui/zoom.svg" alt="بزرگنمایی" /></a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="orb-description">
            <div class="orb-text">
                <a href="#."><?= Yii::t('app', 'All Artworks') ?></a>
                <span></span>
            </div>
            <div class="orb-nav-frame">
                <div class="orb-nav">
                    <div class="orb-prev"><img src="img/ui/arrow-1.svg" alt="Arrow" /></div>
                    <div class="orb-next"><img src="img/ui/arrow-1.svg" alt="Arrow" /></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="orb-big-menu-frame">
    <div class="orb-big-menu orb-big-menu-1">
        <div class="orb-grid">
            <div class="orb-g-30 orb-md-50 orb-sm-100">
                <div class="orb-menu-frame orb-fs-menu">
                    <nav>
                        <?= $this->render('menu') ?>
                    </nav>
                </div>
            </div>
            <div class="orb-g-70 orb-md-50 orb-sm-100">
                <div class="rb-object-frame">
                    <div class="orb-photo-frame orb-obj-1">
                        <img src="<?= Yii::$app->params['my-photo-c-url'] ?>" alt="<?= Yii::t('app', 'My Photo') ?>" />
                    </div>
                    <div class="orb-position-fix">
                        <div class="orb-deco"></div>
                        <div class="orb-photo-frame orb-obj-2">
                        <img src="<?= Yii::$app->params['my-photo-c-url'] ?>" alt="<?= Yii::t('app', 'My Photo') ?>" />
                        </div>
                    </div>
                    <div class="orb-descr">
                        <div class="orb-descr-title">
                            <div><?= Yii::t('app', 'Menu') ?></div>
                            <div class="orb-line"></div>
                        </div>
                        <p><?= Yii::t('app', 'My Instagram') ?></p>
                        <a href="<?= Yii::$app->params['instagram'] ?>" target="_blank" data-no-swup><img src="img/ui/instagram-2.svg" alt="<?= Yii::t('app', 'Instagram') ?>" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>