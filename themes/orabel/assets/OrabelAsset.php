<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\themes\orabel\assets;

use yii\web\AssetBundle;

class OrabelAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/orabel/media';
    public $css = [
        'css/plugins/swiper.min.css',
        'css/plugins/fancybox.min.css',
        'css/style.css',
    ];
    public $js = [
        "js/plugins/jquery.min.js",
        "js/plugins/fancybox.min.js",
        "js/plugins/swup.min.js",
        "js/plugins/swiper.min.js",
        "js/plugins/parsley.min.js",
        "js/main.js",
    ];
    public $depends = [];
}
