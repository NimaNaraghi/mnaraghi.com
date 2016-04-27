<?php
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use kartik\sortable\Sortable;
use app\modules\admin\assets\AdminAsset;
use yii\bootstrap\Modal;

AdminAsset::register($this);


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\activeDataProvider */
/* @var $carouselItemsArray array */
?>


<div class="col-md-8">
	<div class="panel panel-default">
            <div class="panel-heading"><?= Yii::t('app','Artworks') ?></div>
            <div class="panel-body">
            	<?= $this->render('image-table',['dataProvider' => $dataProvider,'step' => 3]) ?>
			</div>
	</div>		
</div>

<div class="col-md-4">

	<div class="panel panel-default carousel-list">
	    	<div class="panel-heading"><?= Yii::t('app','Carousels') ?></div>
	    	<div class="panel-body">
		    	<?php
					echo Sortable::widget([
						'type' => Sortable::TYPE_LIST,
					    'items' => $carouselItemsArray,
					    'options' => [
					    	'data-url' => Url::to(['carousel/index']),
					    ],
					    'pluginEvents' => [
					    	//Similar function has been duplicated in admin assets to handle add and remove purposes
					    	'sortupdate' => 'function(e,ui){
					    		var dataIdArray = {};
					    		var i = 0;

					    		$(".sortable").children("li").each(function(){
					    			
					    			dataIdArray[i++] = $(this).children("a").data("id");
					    			
					    		});
								
								$.post($("sortable").data("url"),{orders: dataIdArray,action: "Sort"}, function(result){
					    				//console.log(result);
					    		}).fail(function(result){
					    			
									$("#error-modal").find(".modal-body").html(result);
									$("#error-modal").modal();
					    		});
					    	}'
					    ],
					]);
				?>
			</div>
	</div>

</div>
<?php
Modal::begin([
    'header' => '<h2>' . Yii::t('app','Sorry Something goes wrong') . '</h2>',
    'id' => 'error-modal',
    //'toggleButton' => ['label' => 'click me'],
]);


Modal::end();
?>