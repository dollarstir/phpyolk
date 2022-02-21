<?php

require_once 'loader/autoloader.php';

$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('/main.php', $context);
        }
    ),
    new Route(
        '/test/{framework}/{color}',
        function ($context) {
            return Viewer::view('/test.php', $context);
        }
    ),
    // new Route(
    //     '/test/{id}/customers/{cid}',
    //     function ($context) {
    //         return Viewer::view('j/testing.php', $context);
    //     }
    // ),
]);

$router->route('/home', function ($context) {
    return Viewer::view('/main.php', $context);
});

$router->launch();
