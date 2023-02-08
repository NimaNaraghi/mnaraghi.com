<?php

use yii\helpers\Url;

?>
<ul class="orb-menu">
    <li class="<?= Yii::$app->controller->action->id == "index" ? 'orb-current' : null ?>">
        <a href="<?= Url::home() ?>" data-no-swup><?= Yii::t('app', 'Home') ?></a>
    </li>
    <li class="<?= Yii::$app->controller->action->id == "about" ? 'orb-current' : null ?>">
        <a href="<?= Url::to(['/about']) ?>" data-no-swup><?= Yii::t('app', 'About') ?></a>
    </li>
    <li class="<?= Yii::$app->controller->action->id == "gallery" ? 'orb-current' : null ?>">
        <a href="<?= Url::to(['/gallery']) ?>" data-no-swup><?= Yii::t('app', 'My Works') ?></a>
    </li>
    <li class="<?= Yii::$app->controller->action->id == "contact" ? 'orb-current' : null ?>">
        <a href="<?= Url::to(['/contact']) ?>" data-no-swup><?= Yii::t('app', 'Contact') ?></a>
    </li>
</ul>