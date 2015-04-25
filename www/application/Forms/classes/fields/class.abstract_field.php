<?php
abstract Class Field implements iField{

    private $label = null;//маркер обязательности
    private $name = null;//имя поля
    private $require = false;//маркер обязательности
    private $raw_value = null;//необработанные данные формы
    private $default_value = null;//значение по-умолчанию
    private $errors = array();//ошибки данного поля

    public function __construct($new_label,$new_name, $new_req_marker,$new_value = null){
        $this->label= $this->set($new_label);
        $this->name =  $this->set($new_name);
        $this->required =  $this->set($new_req_marker);
        $this->default_value = $new_value;
    }
    public function set($new_set = null){
        return $new_set;
    }
    protected function unify(){
        if(isset($this->raw_value)){
            return trim($this->raw_value);
        }
        else{
            return trim($this->default_value);
        }
    }

    public function value(){
        return $this->unify();//вернуть value
    }

    public function rawValue($new_value){
        $this->raw_value = $new_value;
    }

    public function getRawValue(){
        return $this->raw_value;
    }

    public function validate(){
        if($this->require){
            if(is_null($this->raw_value) || $this->raw_value == ''){
                $error_collection = new Errors();
                array_push($this->errors, $error_collection->emptyError());
                return;
            }
        }
        $this->errors = $this->customValidate();
    }

    public function getErrors(){
        return $this->errors;
    }

    abstract function customValidate();

}