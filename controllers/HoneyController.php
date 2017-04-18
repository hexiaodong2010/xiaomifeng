<?php
namespace app\controllers;


use app\controllers\backend\BaseController;

class HoneyController extends BaseController
{

    public $layout = false;

    function beforeAction($action)
    {
        return parent::beforeAction($action);
    }

    function behaviors()
    {
        return parent::behaviors();
    }

    function actions()
    {
        return parent::actions();
    }

    function actionIndex()
    {
        return $this->render('index');
    }
}