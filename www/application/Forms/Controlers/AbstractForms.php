<?php
/**
 * Created by PhpStorm.
 * User: baiko_000
 * Date: 15.04.2015
 * Time: 8:45
 */
abstract class Forms
{

    private $errors = array();
    protected $fields = array();
    private $my_method = null;
    private $my_action = null;
    private $my_label = null;
    function __construct(){
        $index_tester = "test";
        $this->fields[$index_tester] = new HiddenField(md5(get_called_class()), $index_tester, false, md5(get_called_class()));
        $this->createForm();
    }
    abstract protected function createForm();
    abstract protected function validateCustomForm();
    abstract protected function customSubmitForm();
    public function SetValid(){

    }
    public function method($new_method = null){
        if(!is_null($new_method)){
            $this->my_method = $new_method;
        }
        return $this->my_method;
    }
    public function Set($new_set = null){//установить и веруть метод формы
        if(!is_null($new_set)){
            $this->my_method = $new_set;
        }
        return $this->new_set;
    }
    public function action($new_action = null){//установить и вернуть действие формы
        if(!is_null($new_action)){
            $this->my_action = $new_action;
        }
        return $this->my_action;
    }
    public function label($new_label = null){//установить и вернуть заголовок формы
        if(!is_null($new_label)){
            $this->my_label = $new_label;
        }
        return $this->my_label;
    }
    public function getErrors(){//вернуть ошибки формы
        return $this->errors;
    }

    private function submitForm(){//общая часть потдверждение формы
        $this->customSubmitForm();
    }
    protected function validateForm(){//валидация формы
        //общая валидация формы (по полям)
        foreach($this->fields as $value){
            $value->validate();//проверка каждого поля формы
            array_push($this->errors,$value->getErrors());//добавление в массив ошибок формы ошибки данного поля
        }
        array_merge($this->errors, $this->validateCustomForm());
    }
    protected function renderForm(){//отображение формы
        $view = TemplateManager::GetView('Form');//добавить шаблон поля пароля авторизации
        $filed_render = new $view($this);
        return $filed_render->render();
    }
    public function process(){//действие при нажатии на submit
        $this->getDataFromForm();//считать данные с формы
        if($this->fields["test"] -> getRawValue() !== md5(get_called_class())){
            echo $this->renderForm();
            return;
        }
        $this->validateForm();//проверить данные формы и вернуть ошибки возникшие ошибки
        if(!$this->errorTest()){
            echo $this->renderForm();//если возникли проблемы вывести форму с сообщением об ошибках
            return;
        }
        $this->submitForm();
    }
    private function errorTest(){//проверка на колличество ошибок в каждом поле
        foreach($this->errors as $errors){
            if(count($errors) != 0){
                return false;//если хотя бы в одном поле зафиксированна ошибка вернуть false
            }
        }
        return true;//если все в порядке вернуть true
    }
    protected function getDataFromForm(){//считывание данных из формы
        $data = $_POST;
        foreach($this->fields as $index => $field){//перебор POST по массиву полей формы
            if(isset($_POST[$index])){
                $field->rawValue($data[$index]);
            }
        }
    }
    public function getFormFields(){//вернуть поля формы
        return $this->fields;
    }
}