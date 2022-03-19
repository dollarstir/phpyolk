<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('/test4.php', $context);
        }
    ),
    new Route(
        '/login1',
        function ($context) {
            return Viewer::view('/widgets/login/login.php', $context);
        }
    ),
]);
$router->launch();
