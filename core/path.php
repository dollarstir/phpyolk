<?php

class Path {
    static function root($path = "") {
        $path = ltrim($path, "/");
        return __DIR__ . "/../$path";
    }
}