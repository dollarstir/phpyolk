<?php

class Base extends YolkUIElement {
    protected $tag = "base";
    protected $closed = true;

    public function __construct($link = "", $attributes = [])
    {
        if(is_array($attributes)) {
            $attributes['href'] = Path::rebase($link);
            if (strpos($link, 'http') !== false) {
                $attributes['href'] = $link;
            }

        }
        parent::__construct([], $attributes);
        
    }
}