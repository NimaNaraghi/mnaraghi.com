<?php
use yii\helpers\Html;
use yii\helpers\Url;
if ($this->beginCache('cache-artwork-'.$model->id, ['duration' => 3600])):

            if(isset($model->theme->title)){
                $themeTitle = $model->theme->title;
            }
            else{
                $themeTitle = "";
            }

            if(isset($model->technic->title)){
                $technicTitle = $model->technic->title;
            }
            else{
                $technicTitle = "";
            }
            $caption = "
                         
                            <strong>" . $model->title  . "</strong><span><small>" . Yii::t('app','Width') . ": " . $model->width . "cm x " . Yii::t('app','height') . ": " . $model->height . "cm 
                            
                                #" . $themeTitle . "
                               
                                #" . $technicTitle . "
                            </small></span>
                        
                        <p>  
                            <span>" . $model->description . "</span>
                        </p>

                    ";

            
          $size = getimagesize($model->getImagePath('bigger-'));
          $htmlWidth = $size[0];
          $htmlHeight = $size[1];
                
        ?>
        <li class="span4 item">

            <div class="thumbnail thumbnail-1"> <?= Html::a(Html::img($model->getImageURLs(['bigger-'])['bigger-'],['width'=>$htmlWidth,'height'=>$htmlHeight]), 
                $model->getImageURLs(['main-'])['main-'], ['class' => 'gallery-item', 'data-caption' => $caption,'onclick'=>"updateViewCounter($model->id)"]) ?>
                <section> 
                    <?php
                        echo   "<h5>" . $model->title  . "</h5> 
                        
                            <span><small>" . Yii::t('app','Width') . ": " . $model->width . "cm x " . Yii::t('app','height') . ": " . $model->height . "cm </span>
                            <div>
                                #" . $themeTitle . "
                                
                                #" . $technicTitle . "
                            </div>
                            </small>
                        
                        ";
                    ?>
                </section>
            </div>
        </li>
    <?php
    $this->endCache();
    endif;
  ?>