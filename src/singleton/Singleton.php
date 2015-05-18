<?php

/**
 'taken from Advanced PHP Programming pg 57'
**/
class Singleton {
    private static $props = array();

    public function __construct() {}
    public function __get($name)
    {
        if(array_key_exists($name, self::$props))
        {
            return self::$props[$name];
        }
    }
    public function __set($name, $value)
    {
        self::$props[$name] = $value;
    }
}

?>