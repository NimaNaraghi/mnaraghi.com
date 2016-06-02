<?php

namespace app\modules\admin\controllers;
use Yii;
use app\models\Artwork;
use app\models\Carousel;
use yii\data\ActiveDataProvider;
use yii\base\Exception;
use yii\helpers\Html;
class CarouselController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	if(Yii::$app->request->isAjax){
            //Yii::$app->response->format = \yii\web\response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if(isset($post['action']) && $post['action'] == 'Add'){
            	if(Carousel::find()->count() >= Carousel::LIMIT){
            		throw new Exception(Yii::t('app',"Carousel has reached to its limit."));
            	}
            	$id = $post['id'];
            	$carousel = new Carousel;
            	$carousel->artwork_id = $id;
            	if(!$carousel->save()){
            		throw new Exception(Yii::t('app','Carousel did NOT saved.'));
            	}
            
            }
            elseif (isset($post['action']) && $post['action'] == 'Remove'){
            	$id = $post['id'];
            	$carousel = $this->findModel($id);
            	$carousel->delete();

            }
            elseif(isset($post['action']) && $post['action'] == 'Sort'){
            	$newOrders = $post['orders'];
            	
            	foreach ($newOrders as $order => $id) 
            	{
            		$carousel = $this->findModel($id);
            		$carousel->order = $order;
            		if(!$carousel->save()){
            			throw new Exception(Yii::t('app','Carousel did NOT saved.'));
            		}

            	}
            }
        }



    	$query = Artwork::find()->where(['status'=>Artwork::STATUS_ON]);

    	$dataProvider = new ActiveDataProvider([
    		'query' => $query,
    	]);

    	$carousels = Carousel::find()->orderBy('order')->all();
    	$carouselItemsArray = [];
    	foreach ($carousels as $carousel) 
    	{
    		$artwork = $carousel->artwork;
    		$content = Html::img($carousel->getImageURL(), ['class' => ' img-responsive'])
    			. Html::a('', ['carousel/index'],['class' => 'btn btn-sm btn-danger post-link glyphicon glyphicon-minus-sign','data-id' => $carousel->artwork->id, 'data-action' => 'Remove']);
    		$carouselItemsArray[] = ['content' => $content];
    	}
    	if(Yii::$app->request->isAjax){
    		return $this->renderAjax('index',[
	        	'dataProvider' => $dataProvider,
	        	'carouselItemsArray' => $carouselItemsArray,
	        ]);
    	}
    	else{
	        return $this->render('index',[
	        	'dataProvider' => $dataProvider,
	        	'carouselItemsArray' => $carouselItemsArray,
	        ]);
	    }
    }


    /**
     * Finds the Artwork model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Artwork the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Carousel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
