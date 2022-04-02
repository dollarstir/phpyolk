<?php

$repo = '';
$resp = fetchall('users', ['id' => 'DESC'], '2');
$cont = '';
foreach ($resp as $row) {
    $cont .= el::tr('', [
    el::td('', $row['name']),
    el::td('', $row['email']),
]);
}
// $c = new Counter();
// $res = $c->customcount('users', [
//     ['email', '=', 'kpin463@gmail.com'],
// ]);
// $ct = badge::basic('primary', $res);
// if (isset($_POST['btn'])) {
//     $ins = new Add();
//     extract($_POST);
//     $response = $ins->insert('users', [
//     'name' => $username,
//     'email' => $email,
// ], $_FILES);

    YolkUI::run(new Wrapper(
el::html('',
[
el::head([
meta::viewport(),
el::title('Yolk Framework'),
import('favicon'),
import('css'),
import('yolkcss'),
YOlk::uicore('corecss'),
]),
el::body([
    el::h2('class="center"', 'Registeration test'),
Container::basic('', [
    el::table('', [
       el::tr('', [
           el::th('', 'Username'),
           el::th('', 'Email'),
       ]),

        $cont,
    ]),
]),
import('js'),
]),
])
));
