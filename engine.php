<?php
// require_once 'core/router.php';
require_once 'loader/autoloader.php';

$router = new Router([
    new Route(
        "/",
        function ($context) {
            return View::response("PHP York " . json_encode($context));
        }
    ),
    new Route(
        "/index/{tab}",
        function ($context) {
            return View::view('/index.php', $context);
        }
    ),
]);

/*
* @Test
* Test with /home?id=2
*
*/
$router->route('/home', function ($context) {
    return View::view('/index.php', $context);
});


$router->launch();
