<?php
/**
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
 * ${OBJECT}->${REQUEST METHOD}(${PATTERM}, ${CALLBACK});
 *
 */


class Routing {
    private static $token =array();
    private static $_instances = null;
    private $process = array();

    function __construct(){}

    public static function Instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new Router();
        }
        return self::$_instance;
    }
    public static function Add($Rule){
        array_push(self::$token,$Rule);
    }
    public static function debug(){
        var_dump(self::$token);
    }

    public static function RequireParemetr($token,$paremetrs)
    {

        if (isset($paremetrs)) {
            $Temp = str_replace('/', '\/', $token);
            preg_match_all("/(?<=:)[a-zA-Z0-9]++/", $Temp, $ArrayParemetrs);
            foreach ($ArrayParemetrs[0] as $value) {
                if (array_key_exists($value, $paremetrs)) {
                    $token = str_replace(":$value", "($paremetrs[$value])", $token);
                }
            }
        }
        return $token;
    }


    public static function Analysis($url)
    {
        if(!isset(self::$token)){
            throw new Exception("Данный сайт находится в разработке");
        }
        foreach (self::$token as $RuleName => $value) {
            $pattern = "|".self::RequireParemetr($value['pattern'],$value['ArticleID'])."|";
            if(preg_match_all($pattern, $url, $out)) {
                  self::Callback($value['matches'],$out);
                    return;
            }
        }
        self::NotFound();
   }
    public static function Callback($callback,$arguments){
        call_user_func_array(array($callback['Module'], $callback['Sector']),$arguments);
    }
    public static function NotFound(){
        echo("хуй");
     //  $Notfound= array('Module'=> 'NotFoundController','Sector'=>'Index');
       // self::Callback($Notfound);
    }
}


