<?php

// Developed by Frederick Ennin (Dollarstir)
require 'components/codes.php';

YolkUI::run(new Wrapper(
    el::html(
        'lang="en"',
        [
            el::head(
                [
                    meta::charset(),
                    meta::browser(),
                    meta::viewport(),
                    el::title('Yolk Framework'),
                    Yolk::uicore('corecss'),
                    el::linkcss('yolkassets/style.css'),

                    import('favicon'),
                    Yolk::uicore('corecss'),
                    import('css'),
                    import('yolkcss'),
                ]
            ),

            el::body(
                [
                    el::div('class="container"', [
                        el::h2('class="text-center success"', 'Thank you for using the Yolk framework'),
                        el::form('', '', 'class="welcome"', [
                            Inputs::input('email', 'usermail', 'mail', '', ''),
                        ]),
                    ]),
                    Yolk::uicore('corejs'),
                    import('js'),
                ]
            ),
        ]
    )
));
