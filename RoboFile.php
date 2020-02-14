<?php
global $yiiApp;
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

// загрузка конфигурации приложения
$config = require __DIR__ . '/tests/app/config/console.php';

// создание и конфигурация приложения, а также вызов метода для обработки входящего запроса
$yiiApp = (new yii\console\Application($config));

use devskyfly\robocmd\DevTestTrait;

class RoboFile extends \Robo\Tasks
{
    use DevTestTrait;    

    public function testsClear()
    {
        
    }

}