<?php

class el
{
    public static function p($attributes, $content)
    {
        echo ' <p '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</p>
        ';
    }

    public static function a($attributes, $content)
    {
        echo ' <a '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</a>
        ';
    }

    public static function nav($attributes, $content)
    {
        echo 'nav '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</nav>
        ';
    }

    public static function html($attributes, $content)
    {
        echo ' <html '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</html>
        ';
    }

    public static function head($attributes, $content)
    {
        echo ' <head '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</head>
        ';
    }

    public static function t($attributes, $content)
    {
        echo ' <a '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</a>
        ';
    }
}
