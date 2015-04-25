<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 25.04.2015
 * Time: 15:23
*/

class ReviewLimeButton extends Template{
    private $Button = null;
     function __construct()
    {
        $this->index = "button.xhtml";
        parent::__construct(__DIR__,$this->index);
    }
    public function Person(){
        $this->Add("label",'Я Заголовок');
        $this->Add("name",'12');
        $this->Add("value",'Я Заголовок');
    }
}