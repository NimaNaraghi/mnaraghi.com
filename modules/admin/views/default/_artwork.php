<?php
use yii\helpers\Html;

if($model->status == $model::STATUS_OFF)
	$disabled = 'image-disabled';
else
	$disabled = '';

$imgUrl = $model->getImageURLs(['big_'])['big_'];

?>


<?= Html::a(Html::img($imgUrl,['class' => "img-responsive well $disabled"]),['artwork/view','id' => $model->id]) ?>