<?php

namespace Singleton;

class Singleton{
    
    private static Singleton $instance;

    private function __construct(){

    }

    public static function getInstance(): Singleton{

        if(!isset(self::$instance)){
            self::$instance = new Singleton;             
        }

        return self::$instance;
    }

}
