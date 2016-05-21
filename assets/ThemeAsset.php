<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/kataklimt';
    public $css = [
        'css/bootstrap.css',
        'css/responsive.css',
        'css/style.css',
        //'css/touchTouch.css',
        'css/kwicks-slider.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300',
        'css/magnific-popup.css',
    ];
    public $js = [
        'js/superfish.js',
        'js/jquery.flexslider-min.js',
        'js/jquery.kwicks-1.5.1.js',
        'js/jquery.easing.1.3.js',
        'js/forms.js',
        'js/jquery.magnific-popup.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
