<?php

Class ButtonField extends Field{//кнопка


    function customValidate(){
        return null;
    }


    public function render(){//вернуть текстовое представление формы
        $view = TemplateManager::GetView('ButtonField');//необходиио добавить новый шаблон для кнопки
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