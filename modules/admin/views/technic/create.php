<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Technic */

$this->title = Yii::t('app', 'Create Technic');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Technics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="technic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
