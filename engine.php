<?php

// require_once 'core/router.php';
// require_once 'loader/viewer.php';
// $router = new Router();

// $router->route('bmm/', function () {
//     return view('/main.php');
// });

// $router->route('/', function () {
//     return view('/main.php');
// });

// $router->route('tms/eventexecuted/{id}', function ($id) {
//     return  view('/eventx_edit.php', [$id]);
// });

$router->launch($router->action());
