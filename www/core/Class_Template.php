<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 13.04.2015
 * Time: 1:40
 */
abstract Class Template{
    public static $File;
    public  static $Date;
    public  static $Templates;
    public function FileLoading(){
        self::$Templates = new PHPTAL(self::$File);
    }
    public function Add($Name, $Value){
        self::$Templates->$Name =$Value;
    }
    public function Start(){
        try {
            echo self::$Templates->execute();
        }
        catch (Exception $e){
            echo $e;
        }
    }
    abstract public function Person();

}