<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 13.04.2015
 * Time: 2:03
 */

class Autorization{
    /**
     *dsfsdfd
     */
    public function ShowAutorization(){
        $page_class = Review::GetView('Form');
        $page = new $page_class();
        echo $page->Show();
        $t=1;
        if(!$t)echo("да");
        else echo("Нет");
}
}