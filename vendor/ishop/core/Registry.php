<?php

namespace ishop;

class Registry
{
    use TSingleton;

    protected static $properties = [];

    function setProperty($name, $value){
        self::$properties[$name] = $value;
    }

    function getProperty($name)
    {
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }

    function getProperties()
    {
        return self::$properties;
    }
}