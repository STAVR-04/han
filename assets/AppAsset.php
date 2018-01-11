<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/header.css',
        'css/main.css',

    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/eventTabs.js',
        'js/eventTabs-init.js',
        'js/menu-transform.js',

    ];
    public $publishOptions = [
        'only' => [
            'fonts/',
            'css/',
            'js/',
        ]
    ];
}
