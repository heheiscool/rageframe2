<?php

namespace addons\Sms\api\modules\v1\controllers;

use Yii;
use api\controllers\OnAuthController;

/**
 * 默认控制器
 *
 * Class DefaultController
 * @package addons\Sms\api\modules\v1\controllers
 */
class DefaultController extends OnAuthController
{
    public $modelClass = '';

    /**
    * 不用进行登录验证的方法
    *
    * 例如： ['index', 'update', 'create', 'view', 'delete']
    * 默认全部需要验证
    *
    * @var array
    */
    protected $authOptional = ['index','cool'];

    protected $signOptional = [''];
     /**
     * @SWG\Get(path="/api/sms/v1/default/index",
     *     tags={"Sms"},
     *     summary="短信插件",
     *     description="按照如下参数设置接口;
     * 直接返回构成是否成功！",
     *     produces={"application/json"},
     *    @SWG\Parameter(
     *        name="x-api-key",
     *        type="string",
     *        in="header",
     *        required=false,
     *        description="输入登录验证的access_token"
     *     ),
     *     @SWG\Parameter(
     *          name="id",
     *          type="integer", 
     *          required=false, 
     *          in="formData",
     *          description="用户id"
     *      ),
     *     @SWG\Parameter(
     *          name="sellingorder",
     *          type="string", 
     *          required=false, 
     *          in="formData",
     *          description="挂卖订单编号"
     *      ),
     *     @SWG\Parameter(
     *          name="password",
     *          type="string", 
     *          required=false, 
     *          in="formData",
     *          description="用户支付密码"
     *      ),
     *     
     *     @SWG\Response(
     *         response = 200,
     *         description = " success"
     *     )
     * )
     *
     */
    /**
    * 首页
    *
    * @return string
    */
    public function actionIndex()
    {
        return 'Hello world！！！';
    }



     /**
     * @SWG\POST(path="/api/sms/v1/default/cool",
     *     tags={"Sms"},
     *     summary="POST测试",
     *     description="按照如下参数设置接口;
     * 直接返回构成是否成功！",
     *     produces={"application/json"},
     *    @SWG\Parameter(
     *        name="x-api-key",
     *        type="string",
     *        in="header",
     *        required=false,
     *        description="输入登录验证的access_token"
     *     ),
     *     @SWG\Parameter(
     *          name="id",
     *          type="integer", 
     *          required=false, 
     *          in="formData",
     *          description="用户id"
     *      ),
     *     @SWG\Parameter(
     *          name="sellingorder",
     *          type="string", 
     *          required=false, 
     *          in="formData",
     *          description="挂卖订单编号"
     *      ),
     *     @SWG\Parameter(
     *          name="password",
     *          type="string", 
     *          required=false, 
     *          in="formData",
     *          description="用户支付密码"
     *      ),
     *     
     *     @SWG\Response(
     *         response = 200,
     *         description = " success"
     *     )
     * )
     *
     */
    /**
    * 首页
    *
    * @return string
    */
    public function actionCool()
    {
        return 'Post Cool！！！';
    }
}