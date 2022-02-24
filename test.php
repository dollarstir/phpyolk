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
                    el::title('Yolk Framework'),
                    Yolk::uicore('allcss'),
                    el::linkcss('style.css'),
                ]
            ),
            el::body(
                '',
                [
                    Container::fluid(
                        '',
                        [
                            el::divi('style="margin-top: 0px"'),
                            Layout::row(
                                '',
                                [

                                    Layout::colm(
                                        '12',
                                        '',
                                        [
                                            Navbar::basiclight(
                                                'style="height:50px;"',
                                                navbar::Navbrand('home', [el::h2('class="kofi"', ['Php Yolk'])]),
                                                [
                                                    Navbar::Navactive('', ['Home' => 'home']),
                                                    Navbar::Navbasic('', ['Services' => 'services/sjdsdjs']),
                                                    Navbar::Navbasic('', ['Documentation' => 'documentation']),
                                                    Navbar::Navdropdown('', 'Pages', ['Contact Us' => "contact", 'About Us' => 'about',]),
                                                ]
                                            ),
                                        ]
                                    ),
                                ]
                            ),
                            Layout::row(
                                '',
                                [
                                    container::basic(
                                        'id="maindiv"',
                                        [
                                            el::divi(
                                                'id="navlist"',
                                                [
                                                    el::divi('id="searchbox"', [
                                                        icons::far('search','15','','se'),
                                                        el::input('search', 'search', 'inps', '', 'placeholder="Search..."'),
                                                    ]),
                                                    el::divi('', [
                                                        el::h4('id="doctitle"', 'Documentation'),
                                                    ])
                                                ]
                                            ),
                                            el::divi('id="contents"',[
                                                el::divi('id="getStarted"',[
                                                    'Get Started',
                                                ])
                                            ]),
                                            bar::labelprogress('0','100','50','50%',),
                                        ]
                                    ),

                                ]
                            ),
                        ]
                    ),
                    Yolk::uicore('alljs'),
                ]
            ),
        ]
    )
));
