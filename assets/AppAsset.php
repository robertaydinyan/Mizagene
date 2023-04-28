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
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css',
        'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css',
        // 'css/style.css',
    ];
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js',
        'https://code.jquery.com/ui/1.13.2/jquery-ui.js',
        'js/main.js',
        'js/script.js',
        'https://cdnjs.cloudflare.com/ajax/libs/colresizable/1.6.0/colResizable-1.6.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}