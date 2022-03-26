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
                    import('php'),
                ]
            ),

            el::body(
                [
                    el::a('documentation', ''),
                    CodeBox('css', '
                    #searchbox{ 
                        display: grid;grid-template-columns: fr 1fr;
                        border: 1px solid rgb(194, 194, 194);
                        border-radius: 5px ;}'),

                    Yolk::uicore('corejs'),
                    import('js'),
                ]
            ),
        ]
    )
));
