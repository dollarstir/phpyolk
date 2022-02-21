<?php

class YolkUI {
    public static function run($contents = []) {
        echo "<!DOCTYPE html>";
        if(!is_array($contents)) {
            $contents = [$contents];
        }

        foreach ($contents as $content) {
            try {
                $content->render();
            } catch (\Throwable $e) {
                echo "<error>No Tag Exist</error>";
            }
        }
    } 
}

abstract class YolkUIElement {
    protected $contents = [];
    protected $attributes = [];

    protected static function show($data = "") {
        echo $data;
    }

    public function __construct(
        $contents = [],
        $attributes = []
    ) {
        $this->contents = $contents;
        $this->attributes = $attributes;
    }

    protected function attr() {
        if(count($this->attributes) == 0) {
            return "";
        }
        return " " . implode(" ", $this->attributes);
    }

    abstract public function render();
}

class Html extends YolkUIElement 
{
    public function render()
    {
        self::show("<html{$this->attr()}>");
        foreach ($this->contents as $content) {
            $content->render();
        }
        self::show("</html>");
    }

    public function __construct($contents = [], $attributes = []) {
        parent::__construct($contents, $attributes);
    }
}

class Body extends YolkUIElement
{
    public function render()
    {
        self::show("<body{$this->attr()}>");
        foreach ($this->contents as $content) {
            $content->render();
        }
        self::show("</body>");
    }

    public function __construct($contents = [], $attributes = []) {
        parent::__construct($contents, $attributes);
    }
}

class Head extends YolkUIElement
{
    public function render()
    {
        self::show("<head{$this->attr()}>");
        foreach ($this->contents as $content) {
            $content->render();
        }
        self::show("</head>");
    }

    public function __construct($contents = [], $attributes = []) {
        parent::__construct($contents, $attributes);
    }
}


YolkUI::run(new Html(
    [
        new Head(
            [
                
            ]
        ),
        new Body(),
    ]
));
