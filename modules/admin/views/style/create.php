<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Style */

$this->title = Yii::t('app', 'Create Style');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Styles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="style-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
