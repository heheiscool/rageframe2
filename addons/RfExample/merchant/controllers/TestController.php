<?php

namespace addons\RfExample\merchant\controllers;

/**
 * Class TestController
 * @package addons\RfExample\merchant\controllers
 * @author heheiscool@163.com
 */
class TestController extends BaseController
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [

        ]);
    }

    /**
     * @return string
     */
    public function actionUpdate()
    {
        return $this->render('update', [

        ]);
    }
}