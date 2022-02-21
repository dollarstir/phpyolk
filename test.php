<?php
el::doctype();
el::html('lang="en"', 
[
    el::head('',
    [
        meta::charset('charset="utf-8"'),
        meta::browser('http-equiv="X-UA-Compatible" content="IE=edge"'),
        meta::viewport('name="viewport" content="width=device-width, initial-scale=1.0"'),
        el::title('Yolk Framework'),
        Yolk::uicore('allcss'),
        el::style('',
        '.kofi{
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 1.0em;
            float: right;
            color: #116699;
            text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000, 0 0 25px #000, 0 0 30px #000, 0 0 35px #000, 0 0 40px #000, 0 0 45px #000, 0 0 50px #000, 0 0 55px #000, 0 0 60px #000, 0 0 65px #000, 0 0 70px #000, 0 0 75px #000, 0 0 80px #000, 0 0 85px #000, 0 0 90px #000, 0 0 95px #000, 0 0 100px #000, 0 0 105px #000, 0 0 110px #000, 0 0 115px #000, 0 0 120px #000, 0 0 125px #000, 0 0 130px #000, 0 0 135px #000, 0 0 140px #000, 0 0 145px #000, 0 0 150px #000, 0 0 155px #000, 0 0 160px #000, 0 0 165px #000, 0 0 170px #000, 0 0 175px #000, 0 0 180px #000, 0 0 185px #000, 0 0 190px #000, 0 0 195px #000, 0 0 200px #000, 0 0 205px #000, 0 0 210px #000, 0 0 215px #000, 0 0 220px #000, 0 0 225px #000, 0 0 230px #000, 0 0 235px #000, 0 0 240px #000, 0 0 245px #000, 0 0 250px #000, 0 0 255px #000, 0 0 260px #000, 0 0 265px #000, 0 0 270px #000, 0 0 275px #000, 0 0 280px #000, 0 0 285px #000, 0 0 290px #000, 0 0 295px #000, 0 0 300px #000, 0 0 305px #000, 0 0 310px #000, 0 0 315px #000, 0 0 320px #000, 0 0 325px }
            
            .ama{
                font-family: "Comic Sans MS", cursive, sans-serif;
                font-size: 1.5em;
                text-align: center;
            color: #116699;

            }
            '

        ),
    ]
    ),
    el::body('',
    [
        el::divi('class="container"',
        [
        
            el::h3('class="text m-4 text-success"', ['Thanks for choosing the Yolk framework!!!']),
            el::h4('class="text-muted m-4"',[

            
                el::ul('',
                [
                    el::li('style="width: fit-content"',
                    [
                        el::span('class="kofi"', ['framework']),
                        el::span('class="kofi"',[ $context['framework']])
                    ]
                    ),
                    
                
                    
                ]
                )
            ]
            ),
            
            el::img(Path::rebase('j/s.png'),'width=70% class=""'),
        ]
        ),
        Yolk::uicore('alljs')

    ]
    )
]);







?>