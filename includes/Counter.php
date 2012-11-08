<?php
class Counter {
    private static $_count = 0;

    public function __construct() {
        self::$_count++;
    }

    public static function getCount() {
        return self::$_count;
    }
}

?>