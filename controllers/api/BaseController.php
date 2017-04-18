<?php

namespace app\controllers\api;


use Yii;
use yii\web\Controller;
use yii\web\Response;

class BaseController extends Controller
{

    public function beforeAction($action)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        if (parent::beforeAction($action)) {
            return true;
        }
        return false;
    }
}