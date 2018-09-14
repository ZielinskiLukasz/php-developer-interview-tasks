<?php

/**
 * NOTE: this is considered an antipattern
 */

class Singleton
{
    // unique instance, must be private
    private static $instance = null;

    // Private constructor prevents from creating a new instance
    private function __construct()
    {
    }

    // Method to get the unique instance.
    public static function getInstance()
    {
        // Create the instance if it does not exist.
        if (null === self::$instance) {
            self::$instance = new Singleton();
        }

        // Return the unique instance.
        return self::$instance;
    }

    // overwrite php magic method to prevent cloning (optional)
    // private function __clone()
    // {
    // }

    // return the existing instance when cloning
    public function __clone()
    {
        return self::getInstance();
    }
}
