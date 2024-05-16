<?php

class PageController
{
    public static function example() {
        self::header();
        require_once "./src/views/example.php";
        self::footer();
    }

    public static function header() {
        require_once "./src/views/layout/header.php";
    }

    public static function footer() {
        require_once "./src/views/layout/footer.php";
    }
}