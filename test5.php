<?php
 // Developed By Frederick Ennin
//Contact: +233556676471
//Email: kpin463@gmail.com
YolkUI::run(new Wrapper(
el::html('',
[
el::head([
meta::viewport(),
el::title('York Framework'),
import('css'),
]),
el::body([

el::image('imageurl',''),
Icons::far(),
Image::regularsvg(''),
Alert::basic(),
Alert::iconalert(),
Alert::closable(),

    import('js'),
])
])
));