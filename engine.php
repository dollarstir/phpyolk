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

    new Route(
        '/check/{rid}',
        function ($context) {
            return Viewer::view('test.php', $context);
        }
    ),

    new Route(
        '/t/{rid}',
        function ($context) {
            return Viewer::view('t/test.php', $context);
        }
    ),
]);
$router->launch();
