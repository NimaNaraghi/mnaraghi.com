<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Carousel;
use app\models\Artwork;
use app\models\Theme;
use app\models\Style;
use app\models\Technic;
use app\models\Category;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],

            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                    'updateCounters' => ['post'],
                ],
            ],
            /*[
            'class' => 'yii\filters\HttpCache',
            'only' => ['about','gallery'],
            'lastModified' => function ($action, $params) {
                    $q = new \yii\db\Query();
                    return $q->from('artwork')->max('updated_at');
                },
            ],*/
            [
                'class' => 'yii\filters\PageCache',
                'only' => ['about'],
                'duration' => 60,
                'variations' => [
                    \Yii::$app->language,
                ],
                
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            /*'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],*/
        ];
    }


    public function actionGallery()
    {
        $request = Yii::$app->request;
        $query = Artwork::find()->where(['status' => Artwork::STATUS_ON]);

        $theme_id = $style_id = $technic_id = $category_id = null;
        
        if($request->get('theme') != null){
            $theme = Theme::find()->where(['title' => $request->get('theme')])->one();
            $theme_id = $theme->id;
        }
        if($request->get('style') != null){
            $style = Style::find()->where(['title' => $request->get('style')])->one();
            $style_id = $style->id;
        }
        if($request->get('technic') != null){
            $technic = Technic::find()->where(['title' => $request->get('technic')])->one();
            $technic_id = $technic->id;
        }
        if($request->get('category') != null){
            $category = Category::find()->where(['title' => $request->get('category')])->one();
            $category_id = $category->id;
        }
        $query->andFilterWhere([
            'theme_id' => $theme_id,
            'style_id' => $style_id,
            'technic_id' => $technic_id,
            'category_id' => $category_id,
        ]);
        

       /* $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 10
            ]);*/
        $query->orderBy('code DESC');

        /*$artworks = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();*/
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('gallery', [
            'dataProvider' => $dataProvider,
            //'pages' => $pages,
            ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if(Yii::$app->request->isAjax){ 
            //Yii::$app->response->format = \yii\web\response::FORMAT_JSON;
            $model->name = Yii::$app->request->post('name');
            $model->email = Yii::$app->request->post('email');
            $model->message = Yii::$app->request->post('message');
            if ( $model->contact(Yii::$app->params['adminEmail'])) {  
                echo "<p>" . Yii::t('app', 'Sent! Thank you!') ."</p>";    
            }
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionIndex()
    {
        $carousels = Carousel::find()->orderBy('order')->all();
        // $features = Artwork::find()->limit(4)->orderBy('id DESC')->where(['featured' => Artwork::FEATURED_ON,'status' => Artwork::STATUS_ON])->all();
        // $latests = Artwork::find()->limit(12)->orderBy('id DESC')->where(['status' => Artwork::STATUS_ON])->all();
        // $featuredThemes = \app\models\Theme::find()->limit(2)->all();
        // $featuredStyles = \app\models\Style::find()->limit(2)->all();

        return $this->render('index',[
            'carousels' => $carousels,
        ]);
    }

    public function actionUpdateCounter()
    {
        if(Yii::$app->request->isAjax){
            $id = Yii::$app->request->post('id');
            if($artwork = Artwork::findOne($id)){
                $artwork->updateCounters(['view' => 1]);
                return true;
            }
        }
        return false;

    }
}
