<?php
class css{
    public static function id($idname='', $content = []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = '#'.$idname.'{';
        foreach ($content as $key){
            $tag .= $key;
        }
        $tag .= '}';

        return trim($tag);
    }
}