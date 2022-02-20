<?php
class meta{
    
    public static function description($description=''){
        echo '<meta name="description" content="'.$description.'">';
    }
    public static function keywords($keywords=''){
        echo '<meta name="keywords" content="'.$keywords.'">';
    }
    public static function author($author=''){
        echo '<meta name="author" content="'.$author.'">';
    }
    public static function charset($charset='UTF-8'){
        echo '<meta charset="'.$charset.'">';
    }
    public static function viewport($viewport='width=device-width, initial-scale=1.0'){
        echo '<meta name="viewport" content="'.$viewport.'">';
    }
  
}

?>