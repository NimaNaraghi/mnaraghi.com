<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

$this->title = Yii::t('app','Gallery');


?>
<!--============================== content =================================-->
      
<div id="content">
    <div class="container">
        <div class="row">
        <article class="span12">
              <h3><?= Yii::t('app','Gallery') ?></h3>
        </article>
        <div class="clear"></div>
        
        <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_artwork',
                'emptyText' => false,
                'layout' => '<ul class="thumbnails thumbnails-1 list-services infinite-scroll">{items}</ul><div class="span4 offset4">{pager}</div>',
                'pager' => [
                    'class' => \yii\widgets\LinkPager::className(),
                    'maxButtonCount' => 4,
                    'disableCurrentPageButton' => true,
                ]
//                'pager' => [
//                    'class' => \kop\y2sp\ScrollPager::className(),
//                    'item' => '.item',
//                    'triggerTemplate' => '<div class="ias-trigger" style="margin-left: 50%; cursor: pointer;" ><a><strong>{text}</strong></a></div>',
//                    'eventOnRendered' => ' $(".gallery-item").magnificPopup({type: "image", gallery: {enabled: true}, image: {titleSrc: "data-caption"}}) '
//                ]
            ])?>
 
        <div id="trigger-place"> </div>
        </div>
        
    </div>
</div>
