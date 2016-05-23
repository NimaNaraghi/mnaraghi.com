<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\Pjax;

$this->title = 'Contact';

?>
<div id="content">
    <div class="container">
          <div class="row">
        <article class="span8">
              <h3> <?= Yii::t('app','Contact us') ?></h3>
              <div class="inner-1">
            <form id="contact-form">
                  <div class="success"> <?= Yii::t('app','Contact form submitted!') ?><strong><?= Yii::t('app','We will be in touch soon.') ?></strong> </div>
                  <div class="error" id="show-exception"> <?= Yii::t('app','Sorry! something went wrong. Try again later, please.') ?> </div>
                  <fieldset>
                <div>
                    <label class="name">
                    <input type="text" value="Your name">
                  <br>
                    <span class="error"><?= Yii::t('app','*This is not a valid name.') ?></span> <span class="empty"><?= Yii::t('app','*This field is required.') ?></span> </label>
                    </div>
                <div>
                    <label class="email">
                    <input type="email" value="Email">
                    <br>
                    <span class="error"><?= Yii::t('app','*This is not a valid email address.') ?></span> <span class="empty"><?= Yii::t('app','*This field is required.') ?></span> </label>
                    </div>
                <div>
                    <label class="message">
                    <textarea><?= Yii::t('app','Message') ?></textarea>
                    <br>
                    <span class="error"><?= Yii::t('app','*The message is too short.') ?></span> <span class="empty"><?= Yii::t('app','*This field is required.') ?></span> </label>
                    </div>
                <div class="buttons-wrapper"> <a class="btn btn-1" data-type="reset"><?= Yii::t('app','Clear') ?></a> <a class="btn btn-1" data-type="submit"><?= Yii::t('app','Send') ?></a></div>
                <input type="text" name="subject" id="zarfeasal">
                <input type="hidden" name="_csrf" id="_csrf" value="<?= Yii::$app->request->csrfToken; ?>">
              </fieldset>
                </form>
          </div>
            </article>
        <article class="span4">
              <h3><?= Yii::t('app','Contact info') ?></h3>
              <div class="map">
            <iframe src="http://maps.google.com/maps?q=Tehran,+Iran&amp;ie=UTF8&amp;hq=&amp;&amp;z=14&amp;output=embed"> </iframe>
          </div>
            <address class="address-1">
          
          <div class="overflow"> 
                <span><?= Yii::t('app','E-mail:') ?></span> <a href="#" class="mail-1"><?= Yii::$app->params['adminEmail'] ?></a><br>
                <!-- <span>Skype:</span> <a href="#" class="mail-1">@skypename</a></div> -->
          </address>
            </article>
      </div>
    </div>
  </div>
</div> 