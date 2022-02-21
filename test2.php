<?php

YolkUI::run(new Html([
    new Head([
        MetaData::description("Yolk UI, the quickest way to build your UI in PHP"),
        MetaData::keyword(["PHP", "Framework", "Quick", "UI"]),
        MetaData::author("yolkteam@github.com"),

            new Title("YolkUI Page"),

            new Wrapper(Yolk::uicore("allcss")),
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
