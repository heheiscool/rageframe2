<?php
namespace common\widgets\webuploader\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * @package common\widgets\webuploader\assets
 * @author heheiscool@163.com
 */
class AppAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@common/widgets/webuploader/resources/';

    public $css = [
    ];

    public $js = [
        'js/sortable.min.js',
        'webuploader/webuploader.min.js',
    ];

    public $depends = [

    ];
}