<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 25.04.2015
 * Time: 15:23
*/

class ReviewLimeForm extends Template{
    private $Form = null;
     function __construct()
    {
        $this->index = "forms.xhtml";
        parent::__construct(__DIR__,$this->index);
    }
    public function Person(){
        $this->Add("title",'Я Заголовок');
        $this->Add("method",'1');
        $this->Add("action",'2');
        $this->Add("label",'ЖЕня хуй');
        $this->Add("fields",'ЖЕня хуй');
        $this->Add("errors",'ЖЕня хуй');
    }
}