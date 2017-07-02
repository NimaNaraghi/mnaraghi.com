<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\ThemeAsset;
use yii\helpers\Url;

$bundle = ThemeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= 'Mohsen Naraghi | '.Html::encode($this->title) ?></title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="description" content= "Mohsen Naraghi Paintings. You can see my paintings here.">
    <meta name="keywords" content="naraghi,mohsen,art,paintings,oil paintings">
    <meta charset="<?= Yii::$app->charset ?>">
    <link rel="canonical" href="<?= Url::canonical() ?>" />
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <?php $this->registerJs('if($(window).width()>1024){document.write("<"+"script src=\'/mnaraghi.com/web/js/jquery.preloader.js\'></"+"script>");} 
 
        jQuery(window).load(function() {   
            x = $(window).width();        
            if(x > 1024)
            {           
                jQuery(\'#content .row\').preloader();    
            }   
                 
             //jQuery(\'.magnifier\').touchTouch();         
            jQuery(\'.spinner\').animate({\'opacity\':0},1000,\'easeOutCubic\',function (){jQuery(this).css(\'display\',\'none\')});  
            }); 

            $(\'.gallery-item\').magnificPopup({
              type: \'image\',
              gallery:{
                enabled:true
              },
              image: {
                titleSrc: \'data-caption\',
              }

            });
               
    ', $this::POS_END, 'inline-scripts'); ?>


    <!--[if lt IE 8]>
        <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
    <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>
<div class="spinner"></div>
<!--============================== header =================================-->
<header>
    <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="<?= Url::to(['/']) ?>"><img alt="" src="<?= $bundle->baseUrl . '/img/logo.gif' ?>"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_"><?= Yii::t('app','Menu') ?> <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
              <ul class="nav sf-menu">
                <li <?php echo $this->context->action->id == 'about' ?  'class="active"' :  null ?>><a href="<?= Url::to(['site/about']) ?>"><?= Yii::t('app','About') ?></a></li>
                <li <?php echo $this->context->action->id == 'gallery' ?  'class="active"' :  null ?>><a href="<?= Url::to(['site/gallery']) ?>"><?= Yii::t('app','Gallery') ?></a></li>
                <li <?php echo $this->context->action->id == 'contact' ?  'class="active"' :  null ?>><a href="<?= Url::to(['site/contact']) ?>"><?= Yii::t('app','Contact') ?></a></li>
              </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </header>
<div class="bg-content">
    <?= $content ?>
</div>

<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
    <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <!-- <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li> -->
        </ul>
    <div class="privacy pull-left">All rights reserved.</div>
  </div>
    </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
