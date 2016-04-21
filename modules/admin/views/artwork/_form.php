<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Theme;
use app\models\Category;
use app\models\Style;
use app\models\Technic;
use app\models\Artwork;

/* @var $this yii\web\View */
/* @var $model app\models\artwork */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artwork-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'width')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'theme_id')->dropdownList(
            Theme::find()->select(['title', 'id'])->indexBy('id')->column(),
            ['prompt'=>Yii::t('app','Select Theme')]
        );
    ?>

    <?= $form->field($model, 'category_id')->dropdownList(
            Category::find()->select(['title', 'id'])->indexBy('id')->column(),
            ['prompt'=>Yii::t('app','Select Category')]
        );
    ?>

    <?= $form->field($model, 'style_id')->dropdownList(
            Style::find()->select(['title', 'id'])->indexBy('id')->column(),
            ['prompt'=>Yii::t('app','Select Style')]
        );
    ?>

    <?= $form->field($model, 'technic_id')->dropdownList(
            Technic::find()->select(['title', 'id'])->indexBy('id')->column(),
            ['prompt'=>Yii::t('app','Select Technic')]
        );
    ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imageFile')->fileInput(['accept' => 'image/*']) ?>

    <?= $form->field($model, 'status')->dropdownList(Artwork::getStatusOptions()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
