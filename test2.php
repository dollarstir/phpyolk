<?php

YolkUI::run(new Html([
    new Head([
        Meta::description("Yolk UI, the quickest way to build your UI in PHP"),
        Meta::keyword(["PHP", "Framework", "Quick", "UI"]),
        Meta::author("yolkteam@github.com"),

        new Title("YolkUI Page"),

        // Yolk::uicore("allcss")
    ]),
    new Body([
        new Paragraph("Welcome to Yolk UI!"),
        new Row([
            new Column([
                new Paragraph("Lorem ipsum dolor sit amet consectetur adipisicing elit."),
                new Paragraph("Lorem ipsum dolor sit amet consectetur adipisicing elit."),
                new Paragraph("Lorem ipsum dolor sit amet consectetur adipisicing elit."),
            ]),
            new Column(1, 3, [
                new Paragraph("Lorem ipsum dolor sit amet consectetur adipisicing elit."),
                new Paragraph("Lorem ipsum dolor sit amet consectetur adipisicing elit."),
            ])
        ]),
    ])
]));
