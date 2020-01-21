<?php
namespace vendor\package\controllers;

use yii\web\Controller;
use vendor\package\Module;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $module = (Module::getInstance());
        return $this->render('index', compact("module"));
    }
}