<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 03.03.2015
 * Time: 16:07
 */



 class Session {
     private static $instance;
     private function __construct(){}
     private function __clone(){}
     private function __wakeup(){}
     public static function Start() {    // Возвращает единственный экземпляр класса. @return Singleton
         if ( empty(self::$instance) ) {
             self::$instance = new self();
         }
         session_start();
         return self::$instance;
     }
     public function Add($Name,$Parametr){
        $_SESSION[$Name] = $Parametr;
     }
     public function DeleteAll(){
         foreach($_SESSION as $value){
             unset($_SESSION[$value]);
         }
     }
     public function Delete($Name){
         unset($_SESSION[$Name]);
     }
 }

