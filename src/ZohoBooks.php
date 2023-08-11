<?php

namespace ZohoBooks;

class ZohoBooks
{
    private static $instance;
    private $config;

    private function __construct($config)
    {
        $this->config = $config;
    }

    public static function init($config = null)
    {
        if (null === static::$instance) {
            static::$instance = new static($config);
        }

        return static::$instance;
    }

    public function getConfig()
    {
        return $this->config;
    }
}