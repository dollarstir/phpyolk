<?php

YolkUI::run(new Html([
    new Head([
        MetaData::description("Yolk UI, the quickest way to build your UI in PHP"),
        MetaData::keyword(["PHP", "Framework", "Quick", "UI"]),
        MetaData::author("yolkteam@github.com"),
        MetaData::browser(),

        new Title("YolkUI Page"),

        new Style([
            "body" => [
                "width" => "100vw",
                "height" => "100vh"
            ]
        ])

    ]),
    new Body([
        
        new Header([
            new Row([
                new Column(
                    Column::SM,
                    0,
                    [
                        new Span("Home")
                    ],
                    [
                        "class" => "px-4 py-2 m-2",
                        "style" => "background: #0072B5"
                    ]
                ),

                new Column(
                    Column::SM,
                    0,
                    [
                        new Span("Home")
                    ],
                    [
                        "class" => "px-4 py-2 m-2",
                        "style" => "background: #0072B5"
                    ]
                ),

                new Column(
                    Column::SM,
                    0,
                    [
                        new Span("Home")
                    ],
                    [
                        "class" => "px-4 py-2 m-2",
                        "style" => "background: #0072B5"
                    ]
                ),

            ], [
                "class" => "justify-content-sm-center m-0 p-3 text-white",
                "style" => "background: #E7E9EB"
            ]),
        ], [
            "class" => "text-center"
        ]),

        new Div([
            new Main([
                new Paragraph("Hello World"),
            ], [
                "class" => "p-5",
                "style" => "background: #E7E9EB; width: 100%; height: 100%"
            ]),
        ], [
            "class" => "p-5"
        ])

    ])
]));
