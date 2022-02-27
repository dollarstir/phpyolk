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
                    el::title('','Yolk Framework'),
                    import('favicon'),
                    Yolk::uicore('corecss'),
                    import('css'),
                    
                    
                ]
            ),

            el::body(
                'id="yolk-body"',
                [
                    el::a("documentation", ""),
                    CodeBox('css','
                    #searchbox{ 
                        display: grid;grid-template-columns: fr 1fr;
                        border: 1px solid rgb(194, 194, 194);
                        border-radius: 5px ;}'),

                      

            

                   
                    Yolk::uicore('corejs'),
                    import('js'),
                    // el::script('src="yolkassets/prism.js"'),
                ]
            ),
        ]
    )
));
