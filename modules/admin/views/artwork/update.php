<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\artwork */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Artwork',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Artworks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="artwork-update">
	<div class="col-md-8">
	    <h1><?= Html::encode($this->title) ?></h1>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
	</div>    

	<div class="col-md-4">
		<?php Pjax::begin(); ?> 

		<?php
	        if(!$model->isNewRecord){
	            $imageURLs = $model->getImageURLs();
	            foreach ($imageURLs as $prefix => $url) {
	            	
		                echo Html::img($url,['class' => 'img-responsive']);
		                echo Html::a(Yii::t('app','Delete'),Url::to(['artwork/delete-image','prefix' => $prefix, 'id' => $model->id]));
	                
	            }
	        }
    	?>
    	
    	<?php Pjax::end(); ?> 
	</div>
</div>
