<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 12.03.2015
 * Time: 18:07
 */
abstract class token{
   public $_FURLTEMPLATES;
    public function Generation($url){

    }
   public function rrr(){}
}
$_FURLTEMPLATES['article']  =   array(
    'i' => array(
        'pattern' => '@CMS/Articles/([\d]+)/?@i',
        'matches' => array( 'Application' => "CMS",
            'Module' => 'Articles',
            'Sector' => 'showArticle',
            'ArticleID' => '$1' ),
    ),
    'o' => array(
        '@Application=CMS(&|&amp;)Module=Articles(&|&amp;)Sector=showArticle(&|&amp;)ArticleID=([\d]+)@' => 'CMS/Articles/$4'
    )
);
