<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 13.04.2015
 * Time: 2:03
 */

class NotFoundController extends Template{
    public function Index(){
        self::$File= (dirname(dirname(__FILE__))."/Review/home.xhtml");
        self::FileLoading();
        self::Person();
        self::Start();
    }
    public function Person()
    {
        self::$Templates->title = 'Error 404';
    }
}