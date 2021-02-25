<?php

namespace addons\Merchants\backend\controllers;

use Yii;

/**
 * Class StatController
 * @package addons\Merchants\backend\controllers
 * @author heheiscool@163.com
 */
class StatController extends BaseController
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render($this->action->id, [
            'merchantCount' => Yii::$app->services->merchant->getCount(),
            'merchantAccount' => Yii::$app->services->merchantAccount->getSum(),
        ]);
    }
}