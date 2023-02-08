<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\themes\orabel\assets\OrabelAsset;
use yii\helpers\Html;
use yii\helpers\Url;

OrabelAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
  <title><?= 'Mohsen Naraghi | ' . Html::encode($this->title) ?></title>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="description" content="Mohsen Naraghi Paintings. You can see my paintings here.">
  <meta name="keywords" content="naraghi,mohsen,art,paintings,oil paintings">
  <meta charset="<?= Yii::$app->charset ?>">
  <link rel="canonical" href="<?= Url::canonical() ?>" />
  <?= Html::csrfMetaTags() ?>
  <?php $this->head() ?>
</head>

<body>
  <?php $this->beginBody() ?>
  <div class="orb-wrapper">
    <!-- page loader -->
    <div class="orb-loader-frame">
      <div class="orb-loader">
        <div class="orb-deco-1">
          <div class="orb-prog"></div>
        </div>
        <div class="orb-deco-2">
          <div class="orb-spiner"></div>
        </div>
      </div>
    </div>
    <!-- page loader end -->
    <div id="orb-dynamic-content" class="transition-fade">
      <?= $content ?>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>