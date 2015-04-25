<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 13.04.2015
 * Time: 1:40
 */
abstract Class Template{
    public  $File;
    public  $Templates;
    function __construct($Dir){
        $this->$File = $Dir;
    }
    public function FileLoading(){
        $this->$Templates = new PHPTAL(self::$File);
    }
    public function Add($Name, $Value){
        $this->$Templates->$Name =$Value;
    }
    public function Start(){
        try {
            echo $this->$Templates->execute();
        }
        catch (Exception $e){
            echo $e;
        }
    }
    abstract public function Person();
    public function Show(){
        $this->FileLoading();
        $this->Person();
        $this->Start();
    }

}