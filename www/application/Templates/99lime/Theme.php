<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 25.04.2015
 * Time: 14:51
 */

class LimeTheme {
    private $views = array(
        'Page' => 'ReviewLimePage',
        'TextField' => 'ReviewLimeTextField',
        'ButtonField' => 'ReviewLimeButton',
        'Password' => 'ReviewLimeRegField',
        'Form' => 'ReviewLimeForm'
    );

    function GetView($view_name) {
        return isset($this->views[$view_name]) ? $this->views[$view_name] : null;
    }
}