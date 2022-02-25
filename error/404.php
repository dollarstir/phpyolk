<?php
// el::doctype();
// if(file_exist('loader/autoloader'))
@include '../loader/autoloader.php';

YolkUI::run(new Wrapper(el::html('lang="en"', 
[
    el::head('',
    [
        meta::charset('charset="utf-8"'),
        meta::browser('http-equiv="X-UA-Compatible" content="IE=edge"'),
        meta::viewport('name="viewport" content="width=device-width, initial-scale=1.0"'),
        el::title('Yolk Framework'),
        Yolk::uicore('allcss')
    ]
    ),
    el::body('',
    [
        el::img(Path::rebase('j/after.png'),'width=100 height=100'),
        el::h3('class="text-center m-4 text-success"', ['Thanks for choosing the Yolk framework!!!']),
        el::h4('class="text-muted m-4"',[

        
            el::ul('',
            [
                el::li('style="width: fit-content"',
                [
                    el::span('', ['framework']),
                    el::span('',[ $context['framework']])
                ]
                ),
                el::li('style="width: fit-content"',
                [
                    el::span('', ['color']),
                    el::span('', [$context['color']])
                ]
                ),
                el::li('style="width: fit-content"',
                [
                    el::span('', ['id']),
                    el::span('', [$context['id']])
                ]
                ),
                el::li('style="width: fit-content"',
                [
                    el::span('', ['cid']),
                    el::span('', [$context['cid']])
                ]
                )
            ]
            )
        ]
        ),
        el::h4('class="text-center text-muted mt-5"',
        [
            el::a('href="home"',
            [
                el::i('class="fa fa-face-laugh-wink text-success"')
            ]
          )
        ]
        )
    ]
    )
])));







?>