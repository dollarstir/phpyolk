<?php 

class div{

    public static function row($tag,$class = '', $id = '', $other = ''){
        switch ($tag){
            case 's':
                echo '<div class="row '.$class.'" id="'.$id.'" '.$other.'>';
                break;
            case 'e':
                echo '</div>';
                break;
        }
    }

    public static function fcont($tag,$class = '', $id = '', $other = ''){
        switch ($tag){
            case 's':
                echo '<div class="container-fluid '.$class.'" id="'.$id.'" '.$other.'>';
                break;
            case 'e':
                echo '</div>';
                break;
        }
    }
    public static function container($tag,$class = '', $id = '', $other = ''){
        switch ($tag){
            case 's':
                echo '<div class="container '.$class.'" id="'.$id.'" '.$other.'>';
                break;
            case 'e':
                echo '</div>';
                break;
        }
    }
    public static function cols($number,$tag,$class = '', $id = '', $other = ''){
        switch ($tag){
            case 's':
                echo '<div class="col-sm-'.$number.' '.$class.'" id="'.$id.'" '.$other.'>';
                break;
            case 'e':
                echo '</div>';
                break;
        }
    }
    public static function colm($number,$tag,$class = '', $id = '', $other = ''){
        switch ($tag){
            case 's':
                echo '<div class="col-md-'.$number.' '.$class.'" id="'.$id.'" '.$other.'>';
                break;
            case 'e':
                echo '</div>';
                break;
        }
    }
    public static function collg($number,$tag,$class = '', $id = '', $other = ''){
        switch ($tag){
            case 's':
                echo '<div class="col-lg-'.$number.' '.$class.'" id="'.$id.'" '.$other.'>';
                break;
            case 'e':
                echo '</div>';
                break;
        }
    }
    public static function colx($number,$tag,$class = '', $id = '', $other = ''){
        switch ($tag){
            case 's':
                echo '<div class="col-xl-'.$number.' '.$class.'" id="'.$id.'" '.$other.'>';
                break;
            case 'e':
                echo '</div>';
                break;
        }
    }
    public static function colxx($number,$tag,$class = '', $id = '', $other = ''){
        switch ($tag){
            case 's':
                echo '<div class="col-xxl-'.$number.' '.$class.'" id="'.$id.'" '.$other.'>';
                break;
            case 'e':
                echo '</div>';
                break;
        }
    }

    public static function col($number,$tag,$class = '', $id = '', $other = ''){
        switch ($tag){
            case 's':
                echo '<div class="col-'.$number.' '.$class.'" id="'.$id.'" '.$other.'>';
                break;
            case 'e':
                echo '</div>';
                break;
        }
    }
}