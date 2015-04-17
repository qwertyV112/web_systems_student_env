<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 12.03.2015
 * Time: 17:17
 */
Routing::Add(array(
    'pattern' => '/Forms/:Name',
    'matches' => array(
        'Module' => 'FormsController',
        'Sector' => 'Index'),
    'ArticleID' => array(
        'Name'=> '\S+')

));