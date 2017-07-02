<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Artwork;
use kartik\switchinput\SwitchInput;
use app\modules\admin\assets\AdminAsset;

AdminAsset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArtworkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Artworks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artwork-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Artwork'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'title',
                'format' => 'html',
                'content' => function($data){
                    return Html::a($data->title, ['artwork/view','id'=>$data->id]);
                }
            ],
            'code',
            'width',
            'height',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'theme_id',
                //'header'=> $data->getAttributeLabels()['status'],
                'format'=>'raw',
                'content'=> function($data){ 
                    return Html::activeDropDownList(
                        $data,
                        'theme_id', 
                        Artwork::getThemeOptions(),
                        [
                            'class'=>'form-control',
                            'data-id'=>$data->id,
                            'artwork-update-attr' => Url::to(['artwork/update-attribute'])
                        ]
                    ) . Html::button('<span class="glyphicon glyphicon-refresh"></span>',['class'=>'btn btn-sm btn-danger update-attr-btn', 'data-attr' => 'theme_id']);
                },
                'filter' => Html::dropDownList('ArtworkSearch[theme_id]', $searchModel->theme_id, Artwork::getThemeOptions(), ['class'=>'form-control','prompt'=>' ']),
                'options' => ['class' => 'col-md-2'],
            ],

            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'category_id',
                //'header'=> $data->getAttributeLabels()['status'],
                'format'=>'raw',
                'content'=> function($data){ 
                    return Html::activeDropDownList(
                        $data,
                        'category_id', 
                        Artwork::getCategoryOptions(),
                        [
                            'class'=>'form-control',
                            'data-id'=>$data->id,
                            'artwork-update-attr' => Url::to(['artwork/update-attribute'])
                        ]
                    ) . Html::button('<span class="glyphicon glyphicon-refresh"></span>',['class'=>'btn btn-sm btn-danger update-attr-btn', 'data-attr' => 'category_id']);
                },
                'filter' => Html::dropDownList('ArtworkSearch[category_id]', $searchModel->category_id, Artwork::getCategoryOptions(), ['class'=>'form-control','prompt'=>' ']),
                'options' => ['class' => 'col-md-2'],
            ],


            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'style_id',
                //'header'=> $data->getAttributeLabels()['status'],
                'format'=>'raw',
                'content'=> function($data){ 
                    return Html::activeDropDownList(
                        $data,
                        'style_id', 
                        Artwork::getStyleOptions(),
                        [
                            'class'=>'form-control',
                            'data-id'=>$data->id,
                            'artwork-update-attr' => Url::to(['artwork/update-attribute'])
                        ]
                    ) . Html::button('<span class="glyphicon glyphicon-refresh"></span>',['class'=>'btn btn-sm btn-danger update-attr-btn', 'data-attr' => 'style_id']);
                },
                'filter' => Html::dropDownList('ArtworkSearch[style_id]', $searchModel->style_id, Artwork::getStyleOptions(), ['class'=>'form-control','prompt'=>' ']),
                'options' => ['class' => 'col-md-2'],
            ],
            
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'technic_id',
                //'header'=> $data->getAttributeLabels()['status'],
                'format'=>'raw',
                'content'=> function($data){ 
                    return Html::activeDropDownList(
                        $data,
                        'technic_id', 
                        Artwork::getTechnicOptions(),
                        [
                            'class'=>'form-control',
                            'data-id'=>$data->id,
                            'artwork-update-attr' => Url::to(['artwork/update-attribute'])
                        ]
                    ) . Html::button('<span class="glyphicon glyphicon-refresh"></span>',['class'=>'btn btn-sm btn-danger update-attr-btn', 'data-attr' => 'technic_id']);
                },
                'filter' => Html::dropDownList('ArtworkSearch[technic_id]', $searchModel->technic_id, Artwork::getTechnicOptions(), ['class'=>'form-control','prompt'=>' ']),
                'options' => ['class' => 'col-md-2'],
            ],

            // 'description:ntext', 
            'view',
            [
                'class' => 'yii\grid\DataColumn',
                'format' => 'html',
                'content' => function($data){ 
                    $imageArray = $data->getImageURLs(['small-']);
                    if(isset($imageArray['small-'])){
                        $small_thumb = $imageArray['small-'];
                    }
                    else{
                        $small_thumb = null;
                    }
                    return Html::img($small_thumb); 
                    
                },
            ],
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'status',
                'format' => 'raw',
                'filter' => Html::dropDownList('ArtworkSearch[status]',$searchModel->status,[Yii::t('app','OFF'),Yii::t('app','ON')],['class'=>'form-control','prompt'=>' ']),
                'content' => function($data){
                    return SwitchInput::widget([
                        
                        'name' => '[]Artwork[status]',
                        'value' => $data->status,
                        'type' => SwitchInput::CHECKBOX,
                        'options' => ['data-id' => $data->id],
                        'pluginOptions' => ['size' => 'mini'],
                        'labelOptions' => ['style' => 'font-size: 12px'],
                        'pluginEvents' => ["switchChange.bootstrapSwitch"=>"function(){
                            
                            var el = $(this);
                            var id = $(this).attr('data-id');
                            
                            var attribute = 'status';
                            var value = $(this).val();
                            if(value == 0){
                                value =1;
                                $(this).val(1);
                            }
                            else{
                                value =0;
                                $(this).val(0);
                            }
                            url = '".Url::to(['artwork/update-attribute'])."',
                            $.post(url,{'id':id,'attribute':attribute,'value':value },function(result){
                                
                                el.parents('.form-group').next('span').toggle('slow','swing').toggle('slow','swing');
                                
                            },'json').fail(function(result){
                                var msg = result.responseJSON.message;
                                alert(msg);
                            });
                            
                        }"],
                    ]).'<span class="successful-response glyphicon glyphicon-ok alert-success"></span>';
                }
            ],

            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'featured',
                'format' => 'raw',
                'filter' => Html::dropDownList('ArtworkSearch[featured]',$searchModel->featured,[Yii::t('app','OFF'),Yii::t('app','ON')],['class'=>'form-control','prompt'=>' ']),
                'content' => function($data){
                    return SwitchInput::widget([
                        
                        'name' => '[]Artwork[featured]',
                        'value' => $data->featured,
                        'type' => SwitchInput::CHECKBOX,
                        'options' => ['data-id' => $data->id],
                        'pluginOptions' => ['size' => 'mini'],
                        'labelOptions' => ['style' => 'font-size: 12px'],
                        'pluginEvents' => ["switchChange.bootstrapSwitch"=>"function(){
                            
                            var el = $(this);
                            var id = $(this).attr('data-id');
                            
                            var attribute = 'featured';
                            var value = $(this).val();
                            if(value == 0){
                                value =1;
                                $(this).val(1);
                            }
                            else{
                                value =0;
                                $(this).val(0);
                            }
                            url = '".Url::to(['artwork/update-attribute'])."',
                            $.post(url,{'id':id,'attribute':attribute,'value':value },function(result){
                                
                                el.parents('.form-group').next('span').toggle('slow','swing').toggle('slow','swing');
                                
                            },'json').fail(function(result){
                                var msg = result.responseJSON.message;
                                alert(msg);
                            });
                            
                        }"],
                    ]).'<span class="successful-response glyphicon glyphicon-ok alert-success"></span>';
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
