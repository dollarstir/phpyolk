<?php

$style =
[
    // styling widget called 'body'
    widget('body',
    [
        backgroundcolor('gray'),
        color('green'),
    ]),
// styling widget with id 'boy'
    id('boy',
    [
        color('black'),
    ]),
// styling class  called 'mainbox'
    dot('mainbox', [
        borderradius('5px'),
       backgroundcolor('#116699'),
    ]),
];

 return export($style);
