<?php

$js =[

                    
    el::linkjs('yolkassets/prism.js'),

];

$rp = '';

foreach ($js as $key){
    $rp .= $key;

        
}
$rp  .= '';

return $rp;