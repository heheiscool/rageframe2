<?php

namespace common\enums;

/**
 * Class WhetherEnum
 * @package common\enums
 * @author heheiscool@163.com
 */
class WhetherEnum extends BaseEnum
{
    const ENABLED = 1;
    const DISABLED = 0;

    /**
     * @return array
     */
    public static function getMap(): array
    {
        return [
            self::ENABLED => '是',
            self::DISABLED => '否',
        ];
    }
}