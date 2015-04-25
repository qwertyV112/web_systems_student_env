<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 19.04.2015
 * Time: 23:16
 */

class Review{
    static protected $Theme = null;

    static public function InstallTheme($theme){
        self::$Theme = $theme;
    }
    static public function View(){

    }
}