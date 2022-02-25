<?php

// Developed by Frederick Ennin (Dollarstir)
require 'components/codes.php';

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
                    el::title('Yolk Framework'),
                    Yolk::uicore('allcss'),
                    el::linkcss('yolkassets/style.css'),
                    el::linkcustomcss('https://fonts.googleapis.com', 'preconnect'),
                    el::linkcustomcss('https://fonts.gstatic.com', 'preconnect'),
                    el::linkcustomcss('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap', 'stylesheet'),
                    el::linkcss('yolkassets/prism.css'),
                    
                ]
            ),

            el::body('',
            [
                el::ul('',[
                    el::li('',[
                        el::a('documentation','data-target="docs.php" id="sisi"')
                    ])
                ]),

                    Yolk::uicore('alljs')
            ]),
        ]
    )
));
