<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app','Gallery');

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!--============================== content =================================-->
      
<div id="content">
    <div class="container">
        <div class="row">
        <article class="span12">
              <h3>Services</h3>
        </article>
        <div class="clear"></div>
        <ul class="thumbnails thumbnails-1 list-services">
        <?php foreach($artworks as $artwork): ?>
        <?php
            $caption = "
                         
                            <strong>" . $artwork->title  . "</strong><span><small>" . Yii::t('app','Width') . ": " . $artwork->width . "cm x " . Yii::t('app','height') . ": " . $artwork->height . "cm </span>
                            
                                #" . $artwork->theme->title . "
                                #" . $artwork->style->title . "
                                #" . $artwork->technic->title . "
                            </small>
                        
                        <p>  
                            <span>" . $artwork->description . "</span>
                        </p>

                    ";
        ?>
        <li class="span4">
            <div class="thumbnail thumbnail-1"> <?= Html::a(Html::img($artwork->getImageURLs(['bigger_'])['bigger_']), 
                $artwork->getImageURLs(['main_'])['main_'], ['class' => 'gallery-item', 'data-caption' => $caption]) ?>
                <section> 
                    <?php
                        echo   "<h5>" . $artwork->title  . "</h5> 
                        
                            <span><small>" . Yii::t('app','Width') . ": " . $artwork->width . "cm x " . Yii::t('app','height') . ": " . $artwork->height . "cm </span>
                            <div>
                                #" . $artwork->theme->title . "
                                #" . $artwork->style->title . "
                                #" . $artwork->technic->title . "
                            </div>
                            </small>
                        
                        ";
                    ?>
                </section>
            </div>
        </li>
        <?php endforeach; ?>
        </ul>
        </div>
    </div>
</div>
