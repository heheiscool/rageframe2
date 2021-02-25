<?php

namespace addons\RfDevTool\backend\controllers;

/**
 * Class TimestampController
 * @package addons\RfDevTool\backend\controllers
 * @author heheiscool@163.com
 */
class TimestampController extends BaseController
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [

        ]);
    }
}