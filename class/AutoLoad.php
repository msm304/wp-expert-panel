<?php

class WepAutoLoad
{
    private static $_instance = null;

    private function __construct()
    {
        spl_autoload_register([$this, 'load']);
    }

    public static function _instance()
    {
        if (!self::$_instance) {
            self::$_instance = new WepAutoLoad();
        }
        return self::$_instance;
    }

    public function load($class)
    {
        //        echo '<pre>';
        //        var_dump($class);
        //        echo '</pre>';
        if (is_readable(trailingslashit(WEP_PLUGIN_DIR . 'class') . $class . '.php')) {
            if (file_exists(trailingslashit(WEP_PLUGIN_DIR . 'class') . $class . '.php')) {
                include_once trailingslashit(WEP_PLUGIN_DIR . 'class') . $class . '.php';
            }
        }
        return;
    }
}

WepAutoLoad::_instance();
