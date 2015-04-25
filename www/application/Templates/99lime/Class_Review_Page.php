<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 25.04.2015
 * Time: 15:23
 */
class ReviewLimePage extends Template{
     function __construct()
    {
        $this->index = "index.xhtml";
        parent::__construct(__DIR__,$this->index);
    }
    public function Person(){
        $this->Add("title",'Я Заголовок');
        $this->Add("header",'1');
        $this->Add("content",'2');
        $this->Add("basement",'3');
    }
}