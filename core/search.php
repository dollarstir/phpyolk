<?php
class search{

    public function basic($table,$searchword,$record,$order = '',$by='',$limit =''){
        $vs = '';

        foreach ($record as $value){
            if(is_array($value)){
                if($vs == ''){
                    $vs .='WHERE '.$value.' LIKE :keyword';
                }
                else{
                    $vs .='OR '.$value.' LIKE :keyword';
                }

            }
        }





    }

}