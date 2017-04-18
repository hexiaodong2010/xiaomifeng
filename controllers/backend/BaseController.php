<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/18 0018
 * Time: 17:40
 */

namespace app\controllers\backend;


use yii\web\Controller;

class BaseController extends Controller
{

    function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            return true;
        }
        return false;
    }
}