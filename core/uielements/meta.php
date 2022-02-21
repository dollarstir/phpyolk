<?php

class Meta extends YolkUIElement
{
    protected $tag = "meta";
    protected $closed = false;

    public function __construct($attributes = [])
    {
        parent::__construct([], $attributes);
    }

    public static function description($description = "") {
        return new Meta([
            "name" => "description",
            "content" => $description
        ]);
    }

    public static function keyword($keywords = []) {
        if(!is_array($keywords)) {
            $keywords = [$keywords];
        }
        return new Meta([
            "name" => "keywords",
            "content" => implode(", ", $keywords)
        ]);
    }

    public static function author($author = "") {
        return new Meta([
            "name" => "author",
            "content" => $author
        ]);
    }

    public static function browser($eq ='X-UA-Compatible', $browser='IE=edge') {
        return new Meta([
            "http-equiv" => $eq,
            "content" => $browser
        ]);
    }

}
