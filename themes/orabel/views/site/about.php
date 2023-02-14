<div class="orb-page-frame orb-about-1">
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

  <div class="orb-content">
    <div class="orb-grid orb-sm-reverse">
      <div class="orb-g-40 orb-sm-100">
        <div class="rb-object-frame">
          <div class="orb-photo-frame orb-obj-1">
            <img src="<?= Yii::$app->params['my-photo-b-url'] ?>" alt="<?= Yii::t('app', "My Photo") ?>" />
          </div>
        </div>
      </div>
      <div class="orb-g-60 orb-sm-100">
        <div class="orb-about-frame">
          <div class="orb-grid">
            <div class="orb-g-60 orb-sm-100">
              <div class="orb-about-text">
                <h1>Shortly about me</h1>
                <p>My name is Mohsen Naraghi. I was born on January 7, 1956 in Rey, one of the cities of Iran. I went to primary school and high school in this city. In September 1974, I entered the University of Aryamehr (Sharif) to study metallurgical engineering.<br>
                  While studying in this major, I learnt designing and etching in the painting studio of the university. A few years later, I passed a specialized chromatics course at the Faculty of Fine Arts of Tehran University. I have created several works using etching and oil painting. However, I feel better about my abstract paintings and find them more compatible with my spirit.<br>
                  In my opinion, the further a work of art from reflection and thinking and the more decisive and honest it is, the more artistic and novel it can be.</p>
              </div>
            </div>
            <div class="orb-g-40 orb-sm-100">
              <div class="orb-position-fix">
                <div class="orb-deco"></div>
                <div class="orb-photo-frame orb-obj-2">
                  <img src="<?= Yii::$app->params['my-photo-c-url'] ?>" alt="<?= Yii::t('app', "My Photo") ?>" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="orb-bottom-panel">
      <div class="orb-instagram">
        <span><?= Yii::t('app', 'Instagram') ?></span>
        <div class="orb-line"></div>
        <a href="https://www.instagram.com/" target="_blank" data-no-swup><img src="img/ui/instagram-1.svg" alt="<?= Yii::t('app', 'Instagram') ?>" /></a>
      </div>
      <a href="mailto:<?= Yii::$app->params['ownerEmail'] ?>" class="orb-mail" data-no-swup><?= Yii::$app->params['ownerEmail'] ?></a>
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
            <img src="<?= Yii::$app->params['my-photo-d-url'] ?>" alt="<?= Yii::t('app', 'Mohsen Naraghi') ?>" />
          </div>
        </div>
      </div>
      <div class="orb-g-33 orb-lg-50 orb-sm-100">
        <div class="orb-menu-text-frame">
          <div class="orb-menu-text">
            <p>My name is Mohsen Naraghi. I was born on January 7, 1956 in Rey, one of the cities of Iran. I went to primary school and high school in this city. In September 1974, I entered the University of Aryamehr (Sharif) to study metallurgical engineering.<br>
              While studying in this major, I learnt designing and etching in the painting studio of the university. A few years later, I passed a specialized chromatics course at the Faculty of Fine Arts of Tehran University. I have created several works using etching and oil painting. However, I feel better about my abstract paintings and find them more compatible with my spirit.<br>
              In my opinion, the further a work of art from reflection and thinking and the more decisive and honest it is, the more artistic and novel it can be.</p>
          </div>
          <a href="<?= Yii::$app->params['instagram'] ?>" target="_blank" data-no-swup class="orb-instagram">
            <span><?= Yii::t('app', 'My Instagram') ?></span>
            <img src="img/ui/instagram-2.svg" alt="<?= Yii::t('app', 'Instagram') ?>" />
          </a>
        </div>
      </div>
    </div>
  </div>
</div>