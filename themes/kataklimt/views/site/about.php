<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'About';

?>
<div class="container">
    <div class="row">
          <div class="span12"> 
        <!--============================== slider =================================-->
        <div class="flexslider">
            <ul class="slides">
            	<?php
            		foreach ($carousels as $carousel) 
            		{
                  $image = $carousel->getImageURL();
                  $size = getimagesize($carousel->getImagePath());
                  $width = $size[0];
                  $height = $size[1];
            		 	echo Html::tag('li', Html::img($image,['width' => $width, 'height' => $height]));
            		} 
            		
            	?>
        	</ul>
        </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
              <h2><?= Yii::t('app','Welcome!') ?></h2>
            
        </div>
      </div>
    </div>
</div>
 
    <!--============================== content =================================-->
      
    <div id="content" class="content-extra">
    <div class="row-1">
        <div class="container">
	        <div class="row">
	            <ul class="thumbnails thumbnails-1">
		        	<?php foreach ($features as $featured): ?>
              <?php
                  $size = getimagesize($featured->getImagePath('big_'));
                  $htmlWidth = $size[0];
                  $htmlHeight = $size[1];
                ?>
		            <li class="span3">
		                <div class="thumbnail thumbnail-1">
		                <h3><?= $featured->title ?></h3>
		                <?= Html::a(Html::img($featured->getImageURLs(['big_'])['big_'],['width' => $htmlWidth , 'height' => $htmlHeight]), $featured->getImageURLs(['main_'])['main_'], ['class' => 'gallery-item', 'data-caption' => $this->render('_caption',['artwork' => $featured])]) ?>
		                <ul>
			                <li> <?= Yii::t('app','Width') . ': ' . $featured->width . 'cm' ?> </li>
			                <li> <?= Yii::t('app','Height') . ': ' . $featured->height . 'cm' ?> </li>
			                <li> <?= Yii::t('app',$featured->style->title) ?> </li>
		            	</ul>
		                <a href="<?= Url::to(['site/gallery']) ?>" class="btn btn-1"><?= Yii::t('app','View More') ?></a> 
		                </div>
		            </li>

		        	<?php endforeach; ?>
	            
	        	</ul>
	        	
	        </div>
        </div>
     </div>
    <div class="container">
          <div class="row">
        <article class="span6">
              <h3>Shortly about me</h3>
              <div class="wrapper">
            <figure class="img-indent"><img src="<?= '/uploads/images/me/me.jpg' ?>" alt="" /></figure>
            <div class="inner-1 overflow extra">
                  <div class="txt-1">I paint for about 40 years. Why? I don’t know either as my field of study is different; however, painting is absorbing for me just like a lover.  I can say whatever I’ve painted is literally a part of myself.
                  <div class="border-horiz"></div>
                  <div class="overflow">
                <ul class="list list-pad">
                	<?php 
                	foreach($featuredThemes as $theme)
                	{
                		echo Html::tag('li', Html::a($theme->title,['site/gallery', 'theme' => $theme->title]));
                	}
              		?>
                </ul>
                <ul class="list">
          			<?php 
                	foreach($featuredStyles as $style)
                	{
                		echo Html::tag('li', Html::a($style->title,['site/gallery', 'style' => $style->title]));
                	}
              		?>
                  <?= Html::tag('li', Html::a('artabus.com', 'https://www.artabus.com/mnaraghi/',['rel'=>'nofollow', 'target'=>'_blank'])) ?>
                </ul>

              </div>

                </div>

          </div>
            </article>
        <article class="span6">
            <h3><?= Yii::t('app','Latest photoshoots') ?></h3>
            <ul class="list-photo">
            <?php 
            	$index = 1;
            	foreach($latests as $artwork) 
            	{
            		if($index%4 == 0)
            			$class = 'last';
            		else
            			$class = '';

                
                  $size = getimagesize($artwork->getImagePath('small_'));
                  $htmlWidth = $size[0];
                  $htmlHeight = $size[1];
                


            		echo Html::tag('li', 
            			Html::a(Html::img($artwork->getImageURLs(['small_'])['small_'],['width' => $htmlWidth, 'height' => $htmlHeight]), $artwork->getImageURLs(['main_'])['main_'], ['class' => 'gallery-item', 'data-caption' => $this->render('_caption',['artwork' => $artwork])]),
            		['class' => $class]);

            		$index++;
            	}
            ?>
            
            
         	</ul>
        </article>
      </div>
    </div>
</div>
