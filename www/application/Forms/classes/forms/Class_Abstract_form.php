<?php

abstract Class Form{

    public $errors = array();
    public $fields = array();
    public $method = null;
    public $action = null;

    abstract protected function createForm();

    abstract protected function validateCustomForm();

    abstract protected function customSubmitForm();

    function __construct(){
        $this->createForm();
    }

    public function set($new_set = null){
         return $new_set;
    }

    public function FormsParemetrs(){
        $this->set($this->method);
        $this->set($this->action);
    }

    public function getErrors(){
        return $this->errors;
    }

    private function submitForm(){
        $this->customSubmitForm();
    }

    protected function validateForm(){
        foreach($this->fields as $value){
            $value->validate();
            array_push($this->errors,$value->getErrors());
        }
        array_merge($this->errors, $this->validateCustomForm());
    }

    protected function renderForm(){
        $review = Review::GetView('Form');
        $filed_render = new $review($this);
        return $filed_render->Show();
    }

    public function process(){
        self::DataFromForm();
        $this->DataFromForm();
        $this->validateForm();
        if(!$this->errorTest()){
            echo $this->renderForm();
            return;
        }
        $this->submitForm();
    }

    private function errorTest(){
        foreach($this->errors as $errors){
            if(!count($errors))
                return false;
        }
        return true;
    }
    public function TestMetod(){
        if(mb_strtolower($this->Metod) == "post")
            return $_POST;
        else
            return $_GET;
    }
    public function DataFromForm(){
        $data = $this->TestMetod();
        foreach($this->fields as $index => $field){
                $field->rawValue($data[$index]);
        }
    }

    public function getFormFields(){
        return $this->fields;
    }
}