<?php
use yii\helpers\Html;

if($model->status == $model::STATUS_OFF)
	$disabled = 'image-disabled';
else
	$disabled = '';

$imgUrl = $model->getImageURLs(['big-'])['big-'];

?>

<div class="col-md-8">
<?= Html::a(Html::img($imgUrl,['class' => "img-responsive well $disabled"]),['artwork/view','id' => $model->id]) ?>
</div>
<div class="col-md-4">
<?= Html::tag('h2',Yii::t('app','Hit : ').$model->view,['class'=>'text-danger']) ?>
</div>