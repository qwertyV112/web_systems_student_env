<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 12.03.2015
 * Time: 17:17
 */
Routing::Add(array(
    'pattern' => '/home/:id/:goots',
    'matches' => array(
        'Module' => 'HomeControler',
        'Sector' => 'ShowHome'),
    'ArticleID' => array(
    'id'=> '\d+','goots'=>'\S+' )
));