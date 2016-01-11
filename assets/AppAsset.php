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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
//        'css/app.css',
//        'css/bootstrap.css',
        'css/theme-g.css',
        'css/font-awesome-4.5.0/css/font-awesome.min.css',
        'css/simple-line-icons/css/simple-line-icons.css'
    ];
//    public $js = [
//        'js/app.js',
//        'js/base.js',
//        'js/templates.js'
//    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
