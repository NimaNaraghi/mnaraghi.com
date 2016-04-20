<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\artwork;
use app\models\ArtworkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ArtworkController implements the CRUD actions for artwork model.
 */
class ArtworkController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all artwork models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArtworkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single artwork model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new artwork model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new artwork();

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if(!$model->save()){
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing artwork model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if(!$model->save()){
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing artwork model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the artwork model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return artwork the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = artwork::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionDeleteImage($id,$prefix)
    {
        $model = $this->findModel($id);
        $model->deleteImage($prefix);

        return $this->render('update', [
                'model' => $model,
            ]);
    }

    public function actionUpdateAttribute()
    {
        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = \yii\web\response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            
            $value = $post['value'];
            $attribute = $post['attribute'];
            $id = $post['id'];
            
            if($model = $this->findModel($id)){
                
                $model->$attribute = $value;
                
                if($model->save()){
                    return ['message' => Yii::t('app','Model updated successfully.'),'status'=>'successful'];
                }
                else{
                    throw new \yii\db\Exception(Yii::t('app','Model did NOT updated successfully'));
                }
            }
            else{
                
                throw new NotFoundHttpException(Yii::t('app','Model was NOT found OR attribute does NOT exist.'));
            }
        }
    }
}
