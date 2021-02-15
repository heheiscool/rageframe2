<?php
namespace frontend\modules\member\controllers;

/**
 * Class DefaultController
 * @package frontend\modules\member\controllers
 * @author heheiscool@163.com
 */
class DefaultController extends MController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
