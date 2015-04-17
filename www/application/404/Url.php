<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 12.03.2015
 * Time: 17:17
 */

Routing::Add(array(
    'pattern' => '/404/',
    'matches' => array(
        'Module' => 'NotFoundController',
        'Sector' => 'Index'),

));
