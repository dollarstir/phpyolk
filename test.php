<?php

$c = '';

$r = customcount('users', [['name', '=', 'Dollarstir']]);
$c = badge::basic('primary', 'Total Dollarsstir: '.$r);
// $keyword = 'kofi';
// $rest = search('users', $keyword, ['email'], ['id' => 'DESC']);

$cont = '';
// foreach ($rest as $row) {
//     $cont .= el::tr('', [
//     el::td('', $row['name']),
//     el::td('', $row['email']),
// ]);
// }

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
    $c,
    el::table('', [
       el::tr('', [
           el::th('', 'Username'),
           el::th('', 'Email'),
       ]),

        $cont,
    ]),
]),
import('js'),
Yolk::uicore('jsb'),
]),
])
));
