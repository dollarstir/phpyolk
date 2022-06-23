<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('test.php', $context);
        }
    ),
]);
$router->launch();
