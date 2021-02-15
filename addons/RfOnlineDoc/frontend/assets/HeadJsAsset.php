<?php

namespace addons\RfOnlineDoc\frontend\assets;

use yii\web\AssetBundle;

/**
 * Class HeadJsAsset
 * @package backend\assets
 * @author heheiscool@163.com
 */
class HeadJsAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@addons/RfOnlineDoc/frontend/resources/';

    public $js = [
         'js/jquery.min.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}