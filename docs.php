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
                    el::title('', 'Documentation'),
                    import('favicon'),

                    Yolk::uicore('corecss'),
                    import('css'),

                    
                ]
            ),

            el::body(
                'id="yolk-body" class="test"',
                [
                    el::divi(
                        'id="mainCont"',
                        [
                            el::divi(
                                'id="navBox"',
                                []
                            ),
                            el::divi(
                                '',
                                [
                                    // el::button('id="ddo"','Submit'),
                                    el::button('id="socl"', 'Send'),
                                    Container::basic(
                                        'id="maindiv"',
                                        [
                                            el::divi(
                                                'id="navlist"',
                                                [
                                                    el::divi('id="searchbox"', [
                                                        icons::far('search', '15', '', 'se'),
                                                        el::input('search', 'search', 'inps', '', 'placeholder="Search..."'),
                                                    ]),
                                                    el::divi('', [
                                                        el::h4('id="doctitle"', 'Documentation'),
                                                    ]),
                                                ]
                                            ),
                                            el::divi('id="contents"', [
                                                el::divi('id="getStarted"', [
                                                    'Get Started',
                                                ]),
                                                el::divi('id="introbox"', [
                                                    el::p('', 'Welcome to the Yolk PHP documentation!'),
                                                    el::p('', 'This documentation is intended to help you get started with the Yolk PHP framework.'),
                                                    el::p('', 'If you have any questions, please feel free to contact us at'),
                                                    el::a('t4', '', 'yolk@gmail.com'),
                                                ]),
                                                el::divi('id="pcont"', [
                                                    el::h4('', ['System Requirements']),
                                                    el::ul('id="ul"', [
                                                        el::li('', ['PHP 7.2+']),
                                                        el::li('', ['Xampp or Wamp']),
                                                        el::li('', ['Mysql']),
                                                        el::li('', ['MacOS, Windows  and Linux are supported']),
                                                    ]),
                                                    CodeBox('css', '
                                                        #searchbox{ 
                                                            display: grid;grid-template-columns: fr 1fr;
                                                            border: 1px solid rgb(194, 194, 194);
                                                            border-radius: 5px ;}'),
                                                ]),
                                            ]),
                                        ]
                                    ),
                                ]
                            ),
                        ]
                    ),
                    Yolk::uicore('corejs'),
                    import('js'),
                    // el::script("src='ui/js/sweetalert2.all.min.js'"),
                    // el::script('src="yolkassets/prism.js"'),
                ]
            ),
        ]
    )
));
