<?php

use yii\helpers\Url;

?>

<div id="orb-dynamic-content" class="transition-fade">
    <div class="orb-page-frame orb-home-1">
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

        <div class="orb-content" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
            <div class="orb-grid orb-sm-reverse">
                <div class="orb-g-100">
                    <div class="rb-object-frame">
                        <div class="orb-photo-frame orb-obj-1">
                            <div class="swiper-container orb-slideshow">
                                <div class="swiper-wrapper">
                                    <?php foreach($carousels as $carousel): ?>
                                    <div class="swiper-slide">
                                        <img src="<?= $carousel->imageURL ?>" alt="<?= Yii::t('app', 'Artwork') ?>" data-swiper-parallax-x="100" data-swiper-parallax-scale="1.3" data-swiper-parallax-opacity="0" data-swiper-parallax-duration="1200" />
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="orb-deco"></div>
                        <div class="orb-slide-caption">
                            <span class="orb-suptitle">
                                <?= Yii::t('app', 'Painter') ?> <br />
                                <?= Yii::t('app', 'Professional') ?>
                            </span>
                            <h1>
                                <span>
                                    <?= Yii::t('app', 'Mohsen') ?> <br />
                                    <?= Yii::t('app', 'Naraghi') ?>
                                </span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="orb-navigation">
                <div class="orb-pagination"></div>
                <span class="orb-line"></span>
                <a href="<?= Url::to(['/gallery']) ?>" class="orb-button">
                    <div class="orb-arrow"><img src="img/ui/arrow-1.svg" alt="<?= Yii::t('app', 'My Paintings') ?>" /></div>
                    <span>
                        <?= Yii::t('app', 'My') ?> <br />
                        <?= Yii::t('app', 'Paintings') ?>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <div class="orb-big-menu-frame">
        <div class="orb-big-menu orb-big-menu-2">
            <div class="orb-grid">
                <div class="orb-g-33 orb-lg-50 orb-sm-100">
                    <div class="orb-menu-frame orb-fs-menu">
                        <nav>
                            <?= $this->render('menu') ?>
                        </nav>
                    </div>
                </div>
                <div class="orb-g-33 orb-lg-50 orb-sm-100">
                    <div class="rb-object-frame">
                        <div class="orb-photo-frame orb-obj-1">
                            <img src="<?= Yii::$app->params['my-photo-a-url'] ?>" alt="<?= Yii::t('app', 'Mohsen Naraghi') ?>" />
                        </div>
                    </div>
                </div>
                <div class="orb-g-33 orb-lg-50 orb-sm-100">
                    <div class="orb-menu-text-frame">
                        <div class="orb-menu-text">
                            <p><?= Yii::t('app', 'I\'m a painter.') ?></p>
                        </div>
                        <a href="https://www.instagram.com/" target="_blank" data-no-swup class="orb-instagram">
                            <span><?= Yii::t('app', 'My Instagram') ?></span>
                            <img src="img/ui/instagram-2.svg" alt="Instagram" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>