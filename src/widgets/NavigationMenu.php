<?php
namespace vendor\package\widgets;

use devskyfly\php56\types\Arr;
use yii\base\Widget;

class NavigationMenu extends Widget
{
    public $list=[];
    
    public function init()
    {
        if (!Arr::isArray($this->list)) {
            throw new \InvalidArgumentException('Property $list is not array type');
        }
    }
    
    public function run()
    {
        $list=$this->list;
        
        return $this->render('navigation-menu', ["list"=>$list]);
    }
}

