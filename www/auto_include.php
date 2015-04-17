<?php
/*abstract class Include{

}*/
Class Avto_include{
    public function Include_all(){
        $this->Core();
        $this->Application();
        $this->Template();
    }
    public function LoadForeach($Dir)
    {
        foreach(glob($Dir) as $Name) {
            include_once $Name;
        }
    }
    public function Core()
    {
        $this->LoadForeach("core/*.php");
    }
    public function Application()
    {
        $this->LoadForeach("application/*/Url.php");
        $this->LoadForeach("application/*/Controlers/*.php");
    }
    public function Template(){
        include_once "core/PHPTAL/PHPTAL.php";
    }
}
?>