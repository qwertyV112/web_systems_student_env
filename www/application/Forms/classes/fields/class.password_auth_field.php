<?php

Class PasswordAuthField extends Field{

    function customValidate(){
        return null;
    }

    public function render(){//вернуть строковое представление текстового поля
        $view = TemplateManager::GetView('PasswordAuthorField');//добавить шаблон поля пароля авторизации
        $filed_render = new $view($this);
        return $filed_render->render();
    }

    public function label($new_value = null)
    {
        // TODO: Implement label() method.
    }

    public function name($new_value = null)
    {
        // TODO: Implement name() method.
    }

    public function required($new_value = null)
    {
        // TODO: Implement required() method.
    }
}