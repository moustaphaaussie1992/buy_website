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
class IndexAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assetsmy/bootstrap/css/bootstrap.min.css',
        'assetsmy/css/style.css',
        'assetsmy/css/owl.carousel.css',
        'assetsmy/css/owl.theme.css',
    ];
    public $js = [
//        'assetsmy/js/jquery/1.10.1/jquery-1.10.1.min.js',
        'assetsmy/js/owl.carousel.min.js',
        'assetsmy/js/jquery.matchHeight-min.js',
        'assetsmy/js/hideMaxListItem.js',
        'assetsmy/plugins/jquery.fs.scroller/jquery.fs.scroller.js',
        'assetsmy/plugins/jquery.fs.selecter/jquery.fs.selecter.js',
        'assetsmy/js/script.js',
        'assetsmy/plugins/autocomplete/jquery.mockjax.js',
        'assetsmy/plugins/autocomplete/jquery.autocomplete.js',
        'assetsmy/plugins/autocomplete/usastates.js',
        'assetsmy/plugins/autocomplete/autocomplete-demo.js',
//        'assetsmy/js/pace.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
