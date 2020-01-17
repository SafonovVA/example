<?php


namespace classes;


class CalculateTime
{
    private static int $start = 0;

    public static function Start() {
        self::$start = microtime(true);
    }

    public static function getDiff()
    {
        echo '<hr>' . (microtime(true) - self::$start) . '<hr>';
    }
}