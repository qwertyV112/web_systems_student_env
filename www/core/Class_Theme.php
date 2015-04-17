<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 13.04.2015
 * Time: 7:21
 */

Class Theme{
    public $Name;
    function __construct(){

    }
    public function Load(){
        return'
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/kickstart.js"></script>
        <link rel="stylesheet" href="css/kickstart.css" media="all" />';
    }
}