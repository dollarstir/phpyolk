<?php

$style =
[
    // styling widget called 'body'
    widget('body',
    [
        margin('0'),
        padding('0'),
    ]),
    dot('success', [
        color('green'),
        margintop('100px'),
    ]),
];

 return export($style);
