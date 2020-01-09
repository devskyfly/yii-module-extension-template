<?php

use yii\console\ExitCode;
use yii\helpers\BaseConsole;
use yii\web\Controller;

class CommandController extends Controller
{
    public function actionIndex()
    {
        try {
            
        }catch (\Exception $e){
            BaseConsole::stdout($e->getMessage().PHP_EOL.$e->getTraceAsString());
            return ExitCode::UNSPECIFIED_ERROR;
        }
        catch (\Throwable $e){
            BaseConsole::stdout($e->getMessage().PHP_EOL.$e->getTraceAsString());
            return ExitCode::UNSPECIFIED_ERROR;
        }
        
        return ExitCode::OK;
    }
}