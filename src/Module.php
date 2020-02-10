<?php
namespace vendor\package;

class Module extends \yii\base\Module
{   

    public function init()
    {
        parent::init();
        // Your code
    }
    
    public function initNavigationInfo()
    {
        $this->navigationInfo = [
            [
                "label" => "",
                "sub_list" => [
                    [
                        "name" => "",
                        "route" => ""
                    ]
                ]
            ]
        ];
    } 

    /**
     *
     * @return string
     */
    public static function title()
    {
        return "";
    }

    /**
     *
     * @return string
     */
    public static function cssNamespace()
    {
        return "";
    }
    
    public static function dir()
    {
        return __DIR__;
    }

    public static function vendor()
    {
        return 'vendor';
    }

    public static function package()
    {
        return "package";
    }

    public static function tablesPrefix()
    {
        return "module-prefix";
    }

    public static function getRoute()
    {
        return "/".(Module::getInstance())->id;
    }
}