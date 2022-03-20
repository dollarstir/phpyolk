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
                //    el::style('', [
                //        widget('body', [backgroundcolor('#ffcc00'), color('green')]),
                //        id('ll', [color('black', true)]),
                //    ]),
                // yolkcss('k.php'),
                import('yolkcss'),
                ]
            ),
            el::body(
                [
                    el::a('t5', 'id="ll"', 'Testing SSR functionality!'),
                    // el::br(),

                    el::div('class="container mainbox"', [
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
