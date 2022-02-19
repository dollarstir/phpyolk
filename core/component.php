<?php
class component{

    public static function accordion($data=[]){
        // foreach ($initialdata as $heading => $content){
            
        // }
        $num = 1;
        foreach ($data as $h => $c){
            $num = $num + 1;
            // var_dump();

            if(array_values($data)[0]){
                echo'
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    '.$h.'
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    '.$c.'
                    </div>
                </div>
                </div>
            
            
            </div>
            ';
            }else{
            echo'
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                <h2 class="accordion-header" id="'.$num.'">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#'.$h.'" aria-expanded="false" aria-controls="'.$h.'">
                    '.$h.'
                    </button>
                </h2>
                <div id="'.$h.'" class="accordion-collapse collapse" aria-labelledby="'.$num.'" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    '.$c.'
                    </div>
                </div>
                </div>
            
            
            </div>
            ';

            }
        }

    }
    public static function basicalert($message,$type,$class='',$other=''){
        echo '
        <div class="mb-3">
             <div class="alert alert-'.$type.' '.$class.'" role="alert" '.$other.'>
                '.$message.'
           </div>
        </div>';
    }
}