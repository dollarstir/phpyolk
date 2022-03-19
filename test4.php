<?php

// Developed by Frederick Ennin (Dollarstir)

YolkUI::run(new Wrapper(
    el::html(
        'lang="en"',
        [
            el::head(
                '',
                [
                    meta::charset(),
                    meta::browser(),
                    meta::viewport(),
                    el::title('','Yolk Framework - SSR'),
                    Yolk::uicore('corecss'),
                   import('css'),
                    
                ]
            ),
            el::body(
                [
                    el::a('t5','', 'Testing SSR functionality!'),

                    el::div('class="container"',[
                        input::
                    ]),
                    Yolk::uicore('corejs')
                ]
            ),
        ]
    )
));
