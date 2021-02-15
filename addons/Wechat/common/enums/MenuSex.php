<?php

namespace addons\Wechat\common\enums;

use common\enums\BaseEnum;

/**
 * Class MenuSex
 * @package addons\Wechat\common\enums
 * @author heheiscool@163.com
 */
class MenuSex extends BaseEnum
{
    public static function getMap(): array
    {
        return [
            '' => '不限',
            1 => '男',
            2 => '女',
        ];
    }
}