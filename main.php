<?php
require 'loader/autoloader.php';

// echo Config::get('DB_HOST');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <?php Yolk::uicore('allc'); ?>
</head>
<body>

<form method="POST" action="">
    <?php 
    div::fcont('s');
        
    
        div::row('s');
            div::colm(4,'s');
                h::h3('s','style="text-align:center;"');
                    echo 'Login Form';
                h::h3('e');
                Yolk::input('text','username','','','Username','');

                Yolk::input('password','password','','','Password');
                Yolk::input('submit','bb','primary','','Login','');
            div::colm(4,'e');

            div::colm(4,'s');
                h::h3('s','style="text-align:center;"');
                echo 'Registration Form'; 
                h::h3('e');
                Yolk::input('text','name','','','Full Name','');
                Yolk::input('number','contact','','','Contact','');
                Yolk::input('email','email','','','Email Address','');
                Inputfile::basic('image','Select image to upload');
                Inputfile::multifile('image','Select Multiple image to upload');
                Inputfile::disabled('image');
                Yolk::input('color','color','','','Color','');
                Yolk::floatingInput('text','Full Name');
                Yolk::floatingInput('email','Email Address');
                Yolk::floatingInput('textarea','Enter your message here');
                Yolk::input('range','range','','','Range','');
                Yolk::input('checkbox','Check','','','Male','');


                Yolk::input('password','password','','','Password');
                Yolk::input('submit','bbn','primary','','Login','');
            div::colm(4,'e');

        div::row('e');
        
            
    div::fcont('e');

    if(isset($_POST['bb'])){
        $new = new Login();

    extract($_POST);
     echo $response =$new->authenticate('cmd',

        [
            ['username', '=', $username],
            ['password' ,'=', md5($password)],
            
            
        ],'AND'
            
        );
    }

    
     ?>

<?php Yolk::uicore('allj'); ?>   
</form>
<script>
     function hello(){
            alert('Hello world');
        }
    $(document).ready(function(){
       
        // alert('Hello');
        // swal("Good job!", "You clicked the button!", "success");  

    });
    </script>
</body>
</html>