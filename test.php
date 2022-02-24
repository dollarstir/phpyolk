<?php
  
// Developed by Frederick Ennin (Dollarstir)

YolkUI::run( new Wrapper(
    el::html('lang="en"', 
[
    el::head('',
    [
        meta::charset(),
        meta::browser(),
        meta::viewport(),
        el::title('Yolk Framework'),
        Yolk::uicore('allcss'),

       el::linkcss('style.css'),
    ]
    ),
    el::body('',
    [
        Container::fluid('',
        [
            el::divi('style="margin-top: 0px"'),
            Layout::row('',
            [
                
                Layout::colm('12','',
                [
                    Navbar::basiclight('style="height:50px;"',navbar::Navbrand('home',[el::h2('class="kofi"',['Php Yolk'])]),
                    [
                        Navbar::Navactive('',['Home' =>'home']),
                        Navbar::Navbasic('',['Services'=>'services/sjdsdjs']),
                        Navbar::Navbasic('',['Documentation'=>'documentation']),
                        Navbar::Navdropdown('','Pages',['Contact Us'=>"contact",'About Us' =>'about',]),
                    ]),
                ]),
            ]),
            Layout::row('',
            [
                container::basic('id="maindiv"',
                [
                    el::divi('id="navlist"',
                    [
                        el::input('search','search','inps','','placeholder="Search..."')
                    ]),
                    el::divi('id="contents"')
                ]),
             
            ]),
       ]),
        Yolk::uicore('alljs'),
    ]
    ),
])));



