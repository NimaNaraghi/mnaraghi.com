<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Artwork;

/* @var $this yii\web\View */
/* @var $model app\models\artwork */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Artworks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artwork-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    

    <div class="col-md-3">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'code',
            'width',
            'height',
            [
                'attribute' => 'theme_id',
                'value' => isset($model->theme->title) ? $model->theme->title : null,
                'format' => 'html',

            ],
            [
                'attribute' => 'category_id',
                'value' => isset($model->category->title) ? $model->category->title : null,
                'format' => 'html',

            ],
            [
                'attribute' => 'technic_id',
                'value' => isset($model->technic->title) ? $model->technic->title : null,
                'format' => 'html',

            ],
            [
                'attribute' => 'style_id',
                'value' => isset($model->style->title) ? $model->style->title : null ,
                'format' => 'html',

            ],
            [
                'attribute' => 'status',
                'value' => Artwork::getStatusOptions()[$model->status],
                'format' => 'html',

            ],
            'description:ntext',
            'view',
            'created_at:datetime',
            'updated_at:datetime'
        ],
    ]) ?>

    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
          <div class="panel-heading"><?= Yii::t('app','Images') ?></div>
          <div class="panel-body">
                <?php
                    if(!$model->isNewRecord){
                        $imageURLs = $model->getImageURLs();
                        foreach ($imageURLs as $prefix => $url) 
                        {
                            echo Html::tag('h3',$model->imagePrefixes()[$prefix]['title']);
                            echo Html::img($url,['class' => 'img-responsive well']);
                        }
                    }
                ?> 
            </div>
        </div>    
    </div>


</div>
