<?php
namespace vendor\package\controllers;

use yii\web\Controller;
use vendor\package\Module;
use vendor\package\ModuleNavigation;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $title = Module::TITLE;
        $module_navigation = new ModuleNavigation();
        $list = [$module_navigation->getData()];
        return $this->render('index', compact("list", "title"));
    }
}