    <?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 19.04.2015
 * Time: 23:16
 */
    class Review{
        static protected $active = null;
        static public function setActive($theme) {
            self::$active = $theme;
        }

        static public function GetView($view_name){
            return self::$active->getView($view_name);
        }

    }