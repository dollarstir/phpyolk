<?php

class Slider{

    public static function basic($attributes = '', $content = []){

       $tag = '<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">';
          foreach ($content as $key ){
              $tag .= '<div class="carousel-item active">
              <img src="'.$key.'" class="d-block w-100" alt="...">
            </div>';
          }
         
      $tag .= '</div>
      </div>';

      return trim($tag);
    }
}