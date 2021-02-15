<?php

namespace addons\RfDevTool\backend\controllers;

/**
 * Class PhpInfoController
 * @package addons\RfDevTool\backend\controllers
 * @author heheiscool@163.com
 */
class PhpInfoController extends BaseController
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