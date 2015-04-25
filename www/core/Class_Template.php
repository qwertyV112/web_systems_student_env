<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 13.04.2015
 * Time: 1:40
 */
abstract Class Template{
    public  $File;
    public  $index;
    public  $Templates;

    /**
     * @param $Dir
     */
    function __construct($Dir,$index){
        var_dump($Dir);
        var_dump($index);
        $this->File = $Dir;
        $this->index = $index;

    }
    public function FileLoading(){
        $this->Templates = new PHPTAL($this->File."/templates/".$this->index);
    }
    public function Add($Name, $Value){
        $this->Templates->Name =$Value;
    }
    public function Start(){
        try {
            echo $this->Templates->execute();
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