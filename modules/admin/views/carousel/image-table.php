<?php
use yii\helpers\Html;

if(!isset($step)){
	$step = 4;
}
?>
<div class="table-responsive">
	<table class="table carousel-table">
	
		<?php
			$indexI = 0;
			$indexJ = 0;

			foreach ($dataProvider->getModels() as $model) 
			{
				if($indexJ == $step){
					echo Html::endTag('tr');
				}
				if($indexI % $step == 0){
					echo Html::beginTag('tr');
					$indexJ = 0;
				}
				echo Html::beginTag('td');
				//echo html::beginTag('div',['class' => 'col-md-$step']);
				echo $this->render('_artwork',['model' => $model]);
				//echo html::endTag('div');
				echo Html::endTag('td');
				
				$indexI++;
				$indexJ++;
				
			}

			if($indexJ != $step)
				echo Html::endTag('tr');

		?>
	</table>		
</div>