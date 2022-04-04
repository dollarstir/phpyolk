<?php

// $context['rid'] = 1;
$pg = '';
$c = '';
$pg = pagecount('users', '3', $context['rid']);
// $cc = customcount('users', [['name', '=', 'Obery']]);
// $c = badge::basic('primary', $cc);
// sms('Dollarsoft', '0556676471,0540389039', 'Thank you for using Yolk Framework');

// $r = convertmoney('20', 'EUR', 'GHS');
// $c = alert::basic('success', 'You have converted £20 to GH¢'.$r);
$keyword = 'k';

if (isset($_POST['btn'])) {
    $rest = insert('users', [
        'name' => 'Obery',
        'email' => 'aframson77@gmail.com',
        'contact' => '0232423',
        'password' => md5('123'),
    ], $_FILES);
    $c = alert::basic('success', $rest);
}
$resti = paginate('users', ['id' => 'ASC'], '5', $context['rid']);
    $cont = '';
foreach ($resti as $row) {
    $cont .= el::tr('', [
    el::td('', $row['name']),
    el::td('', $row['email']),
    el::td('', $row['contact']),
    el::td('', el::image('yolkassets/upload/'.$row['image'], '', 'width="50px"')),
]);
}

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
           el::th('', 'Contact'),
           el::th('', 'Image'),
       ]),

        $cont,
    ]),
    $pg,
    el::form('', 'POST', 'enctype="multipart/form-data"', [
        inputfile::basic('image', 'upload image'),
        inputs::input('submit', 'btn', 'primary', '', 'Upload Now'),
    ]),
]),
import('js'),
Yolk::uicore('jsb'),
]),
])
));
