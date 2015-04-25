<?php

Routing::Add(array(
    'pattern' => '/user/:goots',
    'matches' => array(
        'Module' => 'Autorization',
        'Sector' => 'ShowAutorization'),
    'ArticleID' => array('goots'=>'\d+' )
));