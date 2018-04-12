<?php

namespace ishop;

trait TSingleton
{
    private static $instance;

    static function instance()
    {
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
}