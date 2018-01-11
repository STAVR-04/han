<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 22.12.2017
 * Time: 10:41
 */

namespace app\assets;


use yii\web\AssetBundle;

class ApplAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}