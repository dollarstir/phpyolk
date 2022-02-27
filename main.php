<?php

// var_dump(import());

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
                    el::title('', 'Yolk Framework'),
                    // Yolk::uicore('allcss'),
                    el::linkcss('yolkassets/style.css'),
                    // el::linkcustomcss('https://fonts.googleapis.com', 'preconnect'),
                    // el::linkcustomcss('https://fonts.gstatic.com', 'preconnect'),
                    // el::linkcustomcss('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap', 'stylesheet'),
                    // el::linkcss('yolkassets/prism.css'),
                    import('favicon'),
                    Yolk::uicore('corecss'),
                    import('css'),

                ]
            ),

            el::body(
                'id="tryto"',
                [
                    el::a('documentation', ''),
                    CodeBox('css', '
                    #searchbox{ 
                        display: grid;grid-template-columns: fr 1fr;
                        border: 1px solid rgb(194, 194, 194);
                        border-radius: 5px ;}'),

                    Yolk::uicore('corejs'),
                    import('js'),
                    // el::script("src='ui/js/sweetalert2.all.min.js'"),
                    // el::script('src="yolkassets/prism.js"')
                ]
            ),
        ]
    )
));
