<?php


class York{

    static public function goto($loaction){
        echo  '<script>window.location="'.$loaction.'"</script>';

    }

    static public function say($something){
        echo $something;
    }

    static public function extractor(){
        return extract($_POST);
    }
}