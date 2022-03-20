<?php

     function id($idname = '', $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = '#'.$idname.'{';
         foreach ($content as $key) {
             $tag .= $key;
         }
         $tag .= '}';

         return trim($tag);
     }

     function dot($classname = '', $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = '.'.$classname.'{';
         foreach ($content as $key) {
             $tag .= $key;
         }
         $tag .= '}';

         return trim($tag);
     }

     function widget($widgetname = '', $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = $widgetname.'{';
         foreach ($content as $key) {
             $tag .= $key;
         }
         $tag .= '}';

         return trim($tag);
     }
