<?php
// require 'loader/autoloader.php';

// echo Config::get('DB_HOST');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <?php Yolk::uicore('allcss'); ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h4 class="text-center text-muted my-5">
        Try out this link :
        <a href="<?= Path::rebase('test/1'); ?>">
            <i class="fa fa-face-laugh-wink text-success"></i>
        </a>
    </h4>   

    <form method="POST" action="">
        <?php
        div::fcont('s');

        Image::brandsvg('btc', '20px', '20');
        Image::regularsvg('user', '20px', '20');
        Image::solidsvg('bars', '20px', '20');
        div::row('s');
        div::colm(4, 's');
        h::h3('s', 'style="text-align:center;"');
        echo 'Login Form';
        h::h3('e');
        Yolk::input('text', 'username', '', '', 'Username', '');

        Yolk::input('password', 'password', '', '', 'Password');
        Yolk::input('submit', 'bb', 'primary', '', 'Login', '');
        div::colm(4, 'e');

        div::colm(4, 's');
        h::h3('s', 'style="text-align:center;"');
        echo 'Registration Form';
        h::h3('e');
        Yolk::input('text', 'name', '', '', 'Full Name', '');
        Yolk::input('number', 'contact', '', '', 'Contact', '');
        Yolk::input('email', 'email', '', '', 'Email Address', '');
        Inputfile::basic('image', 'Select image to upload');
        Inputfile::multifile('image', 'Select Multiple image to upload');
        Inputfile::disabled('image');
        Yolk::input('color', 'color', '', '', 'Color', '');
        Yolk::floatingInput('text', 'Full Name');
        Yolk::floatingInput('email', 'Email Address');
        Yolk::floatingInput('textarea', 'Enter your message here');
        Yolk::input('range', 'range', '', '', 'Range', '');
        Yolk::input('radio', 'Check', '', '', 'Agree', '');
        Yolk::input('checkbox', 'Check', '', '', 'Male', '');
        component::accordion(
            [
                'kofi' => 'Ama',
                'How to use php Yolk Framework' => '<strong>Easy going with you</strong> ok so with today we gonna be talking about how i built php york',
                'Have you used php Yolk before?' => '<strong>Yes</strong> i have used php york before but i was not able to get it to work',
            ]
        );
        component::basicalert('This is a basic alert', 'success', '', 'style="margin-top:10px;"');

        Yolk::input('password', 'password', '', '', 'Password');
        Yolk::input('submit', 'bbn', 'primary', '', 'Login', '');
        div::colm(4, 'e');

        div::row('e');

        div::fcont('e');

        if (isset($_POST['bb'])) {
            $new = new Login();

            extract($_POST);
            echo $response = $new->authenticate(
                'cmd',

                [
                    ['username', '=', $username],
                    ['password', '=', md5($password)],
                ],
                'AND'
            );
        }

        ?>

        <?php Yolk::uicore('alljs'); ?>
    </form>
    <script>
        function hello() {
            alert('Hello world');
        }
        $(document).ready(function() {

            // alert('Hello');
            // swal("Good job!", "You clicked the button!", "success");  

        });
    </script>
</body>

</html>