<?php

namespace common\helpers;

/**
 * Class TreeHelper
 * @package common\helpers
 * @author heheiscool@163.com
 */
class TreeHelper
{
    /**
     * @return string
     */
    public static function prefixTreeKey($id)
    {
        return "tr_$id ";
    }

    /**
     * @return string
     */
    public static function defaultTreeKey()
    {
        return 'tr_0 ';
    }
}