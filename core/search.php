<?php
class search extends database{

    public function basic($table,$searchword,$record,$order = [],$limit =''){
        $vs = '';
        $ord;

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

        if($limit == ''){
            $l ='';
        }
        else{
            $l ='LIMIT '.$limit;
        }
        if($order != []){
            foreach ($order as $key=> $value){
                $ord = 'ORDER BY '.$key.' '.$value;
            }
        }

        $sq = 





    }

}