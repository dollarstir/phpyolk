<?php

// Developed by Frederick Ennin (Dollarstir)

YolkUI::run(new Wrapper(
    el::html(
        'lang="en"',
        [
            el::head(
                [
                    meta::charset(),
                    meta::browser(),
                    meta::viewport(),
                    el::title('Yolk Framework - SSR'),
                    Yolk::uicore('corecss'),
                   import('css'),
                   el::style('', [
                       'body{
                           '.backgroundcolor('#116699', true).'
                       }',
                   ]),
                ]
            ),
            el::body(
                [
                    el::a('t5', '', 'Testing SSR functionality!'),
                    // el::br(),

                    el::div('class="container"', [
                        Yolk::input('text', '', 'search', 'search'),
                        el::div('id="display"', [
                        ]),
                    ]),
                    Yolk::uicore('corejs'),
                ]
            ),
        ]
    )
));
