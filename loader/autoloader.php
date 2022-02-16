<?php

 require 'PHPMailer/src/Exception.php';
 require 'PHPMailer/src/PHPMailer.php';
 require 'PHPMailer/src/SMTP.php';
spl_autoload_register(function ($class) {
    $path = __DIR__.'/../core/'.lcfirst(str_replace('\\', '/', $class)).'.php';
    // include 'classes/'.$class.'.php';
    require $path;
});

function bolt($loaction){
    echo  '<script>window.location="'.$loaction.'"</script>';

}

function say($something){
    echo $something;
}

function ext(){
    return  extract($_POST);
}
