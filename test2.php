<?php

YolkUI::run(
    
    new Html([
        new Head([
            Meta::description("Yolk UI, the quickest way to build your UI in PHP"),
            Meta::keyword(["PHP", "Framework", "Quick", "UI"]),
            Meta::author("yolkteam@github.com"),

            new Title("YolkUI Page"),

            new Tag (Yolk::uicore("allcss")),
        ]),
        new Body([
            new Paragraph("Welcome to Yolk UI!"),
            new Row([
                new Column(2,6,[
                    new Paragraph("Lorem ipsum dolor sit amet consectetur adipisicing elit."),
                    new Paragraph("Lorem ipsum dolor sit amet consectetur adipisicing elit."),
                    new Paragraph("Lorem ipsum dolor sit amet consectetur adipisicing elit."),
                ]),
                new Column(2, 6, [
                    new Paragraph("Lorem ipsum dolor sit amet consectetur adipisicing elit."),
                    new Paragraph("Lorem ipsum dolor sit amet consectetur adipisicing elit."),
                ])
            ]
        ),

    ],
    [
        'style' => 'background-color:#116699;'
    ]
    )
]));
