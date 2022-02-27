<?php
// el::doctype();
// if(file_exist('loader/autoloader'))
@include '../loader/autoloader.php';

YolkUI::run(new Wrapper(el::html('lang="en"', 
[
    el::head('',
    [
        meta::charset('utf-8'),
        meta::browser('X-UA-Compatible', 'IE=edge'),
        meta::viewport('width=device-width, initial-scale=1.0'),
        el::title('Yolk Framework'),
        import('favicon'),
        Yolk::uicore('corecss'),
       
    ]
    ),
    el::body('',
    [
        el::img(Path::rebase('j/after.png'),'width=100 height=100'),
        el::h3('class="text-center m-4 text-success"', ['Thanks for choosing the Yolk framework!!!']),
        el::h4('class="text-muted m-4"',[

        
            
        ]
        ),
       
    ]
    )
])));







?>