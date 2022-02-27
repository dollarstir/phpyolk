<?php
require __DIR__ . '/../core/config.php';
require __DIR__ . '/../core/yc.php';
require __DIR__ . '/../core/transmitter.php';

Config::init();

require  __DIR__ . '/../PHPMailer/src/Exception.php';
require  __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require  __DIR__ . '/../PHPMailer/src/SMTP.php';

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../core/' . strtolower(str_replace('\\', '/', $class)) . '.php';
    if(!file_exists($path)) {
        $path = __DIR__ . '/../core/uielements/' . strtolower(str_replace('\\', '/', $class)) . '.php';
    }

    require $path;
});

function bolt($loaction)
{
    echo  '<script>window.location="' . $loaction . '"</script>';
}

function say($something)
{
    echo $something;
}

function ext()
{
    return  extract($_POST);
}
