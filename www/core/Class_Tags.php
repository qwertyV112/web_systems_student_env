<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 25.04.2015
 * Time: 22:26
 */
Class Tags{
    private $stack = null;
    private $Html = null;
    function __construct(){
       $this->stack = array();
    }
    public function HtmlSource()
    {
            $url = $_SERVER['url'];
            $url = iconv("UTF-8", "windows-1251", $url);
            $this->Html = file_get_contents($url);
    }
    public function CloseTags($text)
    {
        if (preg_match_all("/<([/]?)([wd]+)[^>/]*>/", $text, $matches, PREG_SET_ORDER))
        {
            foreach ($matches as $k => $match)
            {
                $tag = strtolower($match[2]);
                if (!$match[1])
                    $this->stack[] = $tag;
                elseif (end( $this->stack) == $tag)
                    array_pop( $this->stack);
                else
                    $text = '<'.$tag.'>'.$text;
            }
            while ($tag = array_pop( $this->stack))
                    $text .= '</'.$tag.'>';
        }
        return $text;
    }
}