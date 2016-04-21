<?php
namespace app\modules\admin\assets;

use yii\web\AssetBundle;


class AdminAsset extends AssetBundle
{
    public $sourcePath = '@webroot/../modules/admin/media';
    public $baseUrl = '@web';
    
    public $js = [
		'js/admin.js',
    ];
    public $css = [
		'css/admin.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'app\assets\AppAsset'
    ];
}

?>


