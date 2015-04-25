<?php

interface iField{
    public function label($new_value=null);//надпись у формы
    public function name($new_value=null);//имя значения формы
    public function validate();//проверка на правильность формы
    public function value();//значение формы
    public function render();//команда на отрисовку
    public function required($new_value=null);//маркер обязательности
    public function getErrors();//вернуть все ошибки поля
}