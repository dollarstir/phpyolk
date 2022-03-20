<?php

$designs =
[
    // styling widget called 'body'
    widget('body',
    [
        backgroundcolor('#ffcc00'),
        color('green'),
    ]),
// styling widget with id 'boy'
    id('boy',
    [
        color('black'),
    ]),
// styling class  called 'mainbox'
    dot('mainbox', [
        borderradius('2px'),
    ]),
];

 return export($designs);
