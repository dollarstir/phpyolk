<?php

$php = [
    yolkcss('yolkcss/style.php'),
];

$rp = '';

foreach ($php as $key) {
    $rp .= $key;
}
$rp .= '';

return $rp;
