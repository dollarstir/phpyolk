<?php
$aa = '';
if (isset($_POST['bb'])) {
    $add = new Inser();
    extract($_POST);
    $ersponse = $add->insert(
        'users',
        $records = ['name' => $name, 'email' => $email, 'contact' => $contact,],
        $_FILES
    );

    if ($ersponse == 'success') {
        $aa =  alert::closable('success', "regisration successful");
    } else {
        $aa =  alert::closable('danger', "regisration failed");
    }
}
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
                                                '',
                                                navbar::Navbrand('home', [el::h2('class="kofi"', ['Php Yolk'])]),
                                                [
                                                    Navbar::Navactive('', ['Home' => 'home']),
                                                    Navbar::Navbasic('', ['Services' => 'services']),
                                                    Navbar::Navbasic('', ['Documentation' => 'documentation']),
                                                    Navbar::Navdropdown(
                                                        '',
                                                        'Pages',
                                                        [
                                                            'Contact Us' => "contact",
                                                            'About Us' => 'about',
                                                        ]
                                                    ),
                                                ]
                                            ),
                                        ]
                                    ),
                                ]
                            ),
                            Layout::row(
                                '',
                                [
                                    Layout::colm(
                                        '4',
                                        '',
                                        [
                                            Navbar::sidebar(
                                                '',
                                                [
                                                    'Main dashboard',
                                                    'Webiste traffic',
                                                    'Password',
                                                    'Analytics',
                                                    'SEO',
                                                    'Orders',
                                                    'International',
                                                    'Partners',
                                                    'Calendar',
                                                    'Users',
                                                    'Sales'
                                                ]
                                            ),
                                        ]
                                    ),
                                    Layout::colm(
                                        '4',
                                        '',
                                        [
                                            Container::fluid(
                                                '',
                                                [
                                                    Slider::basic("", [
                                                        Slider::item("", "j/s.png"),
                                                        Slider::item("", "j/after.png"),
                                                    ]),
                                                    Slider::controls("", [
                                                        Slider::item("", "j/s.png"),
                                                        Slider::item("", "j/after.png"),
                                                    ]),
                                                    Slider::indicators("", [
                                                        Slider::item("", "j/s.png"),
                                                        Slider::item("", "j/after.png"),
                                                    ]),
                                                    Slider::all("", [
                                                        Slider::item("", "j/s.png"),
                                                        Slider::item("", "j/after.png"),
                                                    ]),
                                                ]
                                            ),
                                        ]
                                    ),
                                    Layout::colm(
                                        '4',
                                        '',
                                        [
                                            Container::fluid(
                                                'style="margin-top: 10px;"',
                                                [

                                                    $aa,
                                                    el::h2('', ['User Registeration']),
                                                    el::form(
                                                        '',
                                                        'post',
                                                        'class="" enctype="multipart/form-data"',
                                                        [
                                                            inputfile::basic('image', 'Select file to upload'),
                                                            Yolk::input('text', 'name', '', '', 'Full Name'),
                                                            Yolk::input('email', 'email', '', '', 'Email Adress'),
                                                            Yolk::input('number', 'contact', '', '', 'Phone Number'),
                                                            Yolk::input('submit', 'bb', 'primary', '', 'Submit', ''),

                                                        ]
                                                    ),
                                                ]
                                            ),
                                        ]
                                    ),
                                ]
                            ),
                        ]
                    ),
                    Yolk::uicore('alljs')
                ]
            ),
        ]
    )
));
