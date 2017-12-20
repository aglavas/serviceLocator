<?php

class Autoloader
{
    private static $_instance;

    /**
     * Get the Singleton instance of the autoloader
     */
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    /**
     * Reset the instance of the autoloader
     */
    public static function resetInstance()
    {
        self::$_instance = null;
    }

    /**
     * Class constructor
     */
    private function __construct()
    {
        spl_autoload_register(array(__CLASS__, "load"));
    }

    /**
     * Prevent to clone the instance of the autoloader
     */
    private function __clone(){}

    /**
     * Load a given class or interface
     */
    public static function load($class)
    {

        $file = str_replace("\\", "/", $class) . ".php";


        if (!file_exists($file)) {
            throw new AutoloaderException("The file " . $file . " containing the requested class or interface " . $class . "was not found.");
        }
        require $file;
        if (!class_exists($class, false) && !interface_exists($class, false)) {
            throw new AutoloaderException("The requested class or interface " . $class . " was not found.");
        }
    }
}