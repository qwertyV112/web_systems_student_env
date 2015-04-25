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
        $this->Templates->title='Я Заголовок';
        $this->Add('title','Я Заголовок');
    }
}