<?php
namespace vendor\package\models\common;

use yii\base\BaseObject;
use devskyfly\php56\types\Arr;
use devskyfly\php56\types\Str;

abstract class ModuleNavigation extends BaseObject
{
    public $module_name = "";
    public $module_route = "";

    public $list=[];
    
    public function init()
    {
        parent::init();
        
        $this->module_name=$this->moduleName();
        $this->module_route=$this->moduleRoute();
        $this->list=$this->moduleList();
        
        if(!Str::isString($this->module_name)){
            throw new \InvalidArgumentException('Property $module_name is not string type');
        }
        
        if(!Str::isString($this->module_route)){
            throw new \InvalidArgumentException('Property $module_route is not string type');
        }
        
        $this->checkList();
    }
    
    public function getData()
    {
        return [
            "label"=>["text"=>$this->module_name,"route"=>$this->module_route],
            "sub_list"=>$this->list
        ];
    }
    
    /**
     * 
     * @throws \OutOfBoundsException
     * @throws \InvalidArgumentException
     */
    protected function checkList()
    {
        if(!Arr::isArray($this->list)){
            throw \InvalidArgumentException('Property $list is not array type');
        }
        foreach ($this->list as $item){
            if(!Arr::keyExists($item, 'name')){
                throw new \OutOfBoundsException("Key 'name' does not exist.");
            }
            if(!Str::isString($item['name'])){
                throw new \InvalidArgumentException('$item[\'name\'] is not string type');
            }
            if(!Arr::keyExists($item, 'route')){
                throw new \OutOfBoundsException("Key 'route' does not exist.'");
            }
            if(!Str::isString($item['route'])){
                throw new \InvalidArgumentException('$item[\'route\'] is not string type');
            }
        }
    }
    
    protected function moduleName()
    {
        return "string";
    }

    protected function moduleRoute()
    {
        return "string";
    }

    protected function moduleList()
    {
        return [["name" => "", "route" => ""]]];
    }
}