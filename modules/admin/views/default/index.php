<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

use app\modules\admin\assets\AdminAsset;
AdminAsset::register($this);
?>

<div class="col-md-6">
	<div class="panel panel-default">
          <div class="panel-heading"><?= Yii::t('app','Popular Artworks') ?></div>
          <div class="panel-body">
			<?= ListView::widget([
		    'dataProvider' => $dataProvider,
		    'itemView' => '_artwork',
		    'summary' => '',
			]);
			?>
		</div>
	</div>		
</div>

<div class="col-md-3">
	<?= Html::a(Yii::t('app','Insert a new artwork'),['artwork/create'],['class' => 'btn btn-large btn-success']) ?>
</div>