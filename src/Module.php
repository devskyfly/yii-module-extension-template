<?php
namespace vendor\package;

use Yii;

class Module extends \yii\base\Module
{   
    const CSS_NAMESPACE = '';

    public function init()
    {
        parent::init();
        Yii::setAlias("@vendor/package", __DIR__);
        
        /**
         * Define controller namespace for console application
         */
        if (Yii::$app instanceof \yii\console\Application) {
            $this->controllerNamespace='vendor\package\console';
        } 
    }
}