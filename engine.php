<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('main.php', $context);
        }
    ),

    new Route(
        '/check',
        function ($context) {
            return Viewer::view('test.php', $context);
        }
    ),
]);
$router->launch();
