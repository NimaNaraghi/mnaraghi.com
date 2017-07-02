<?php
use yii\helpers\Html;

$imgUrl = $model->getImageURLs(['big-'])['big-'];

?>

<?= Html::a('', 
['carousel/index'],
['class' => 'btn btn-sm btn-success post-link glyphicon glyphicon-plus-sign','data-id' => $model->id, 'data-action' => 'Add']) ?>
<?= Html::img($imgUrl,['class' => "img-responsive"]) ?>


