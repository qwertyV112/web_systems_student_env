<?php

Routing::Add(array(
    'pattern' => '/user/:goots',
    'matches' => array(
        'Module' => 'AuthorizationForm',
        'Sector' => 'process'),
    'ArticleID' => array('goots'=>'\S+' )
));