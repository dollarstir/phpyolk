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
                // Layout::colm('4','',
                // [Container::basic('',[Slider::crossfade('style="height:470px;"', ['j/after.png','j/s.png','j/3.jpeg']) ]),]),
                // Layout::colm('8','',
                // [
                //     Container::basic('style="margin-top: 10px;"',
                //     [
                //         //  $aa,
                //         el::h3('style="text-align:center;"',['User Registeration']),
                        
                //         el::form('','post','class="adduser" enctype="multipart/form-data"',
                //         [
                //         inputfile::basic('image','Select image to upload'),
                //         Yolk::input('text','name','','','Full Name'),
                //         Yolk::input('email','email','','','Email Adress'),
                //         Yolk::input('number','contact','','','Phone Number'),
                //         Yolk::input('submit','bb','success','','Submit',''),

                //         ]),
                //     ]),
                // ]),
            ]),
       ]),
        Yolk::uicore('alljs'),
    ]
    ),
])));



