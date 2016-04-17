<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArtworkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artwork-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'width') ?>

    <?= $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'theme') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'style') ?>

    <?php // echo $form->field($model, 'technic') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'view') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
