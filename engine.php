<?php
// require_once 'core/router.php';
require_once 'loader/autoloader.php';

$router = new Router([
    new Route(
        "/",
        function ($context) {
            return View::view('/main.php', $context);
        }
    ),
    new Route(
        "/test",
        function ($context) {
            return View::view('/test.php', $context);
        }
    ),
    new Route(
        "/test/{user}",
        function ($context) {
            return View::response("PHP York " . json_encode($context));
        }
    ),
]);

/*
* @Test
* Test with /home?id=2
*
*/
$router->route('/home', function ($context) {
    return View::view('/main.php', $context);
});


$router->launch();
