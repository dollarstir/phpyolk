<?php
// Developed By dollarstir(+233556676471/kpin463@gmail.com)
// 28th february 2022

YolkUI::run(new Wrapper(
    el::html('',
    [
        el::head([
            meta::viewport(),
            el::title('Login Form'),
           import('css'),
        ]),
        // body starts here
        el::body([

            el::image('widgets/login/img/wave.php' ,'class="wave"'),




        ])
        // body ends here
    ])
))







?>