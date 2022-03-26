<?php
$user = 'user';
// Developed by Frederick Ennin (Dollarstir)

if(isset($_COOKIE['user'])){
    
    $repo = el::h2('class="text-center success"', 'Yolk framework is successfully instllaed. kindly visit'.el::a('https://phpyolk.com/','','Phpyolk.com').' to continue ');
}
else{
    $repo = el::form('', '', 'class="welcome"', [
        Inputs::input('email', 'usermail', 'mail', '', '', '', 'placeholder="Enter your email address"'),
        el::div('id="btn"', [
            inputs::input('submit', '', 'primary', '', 'Continue'),
        ]),
    ]);
}
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
                        $repo,
                    ]),
                    Yolk::uicore('corejs'),
                    import('js'),
                ]
            ),
        ]
    )
));
