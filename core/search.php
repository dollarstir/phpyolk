<?php
class search extends database{

    public function basic($table,$searchword,$record,$order = [],$limit =''){
        $vs = '';
        $ord ='';

        foreach ($record as $value){
           
                if($vs == ''){
                    $vs .='WHERE '.$value.' LIKE :'.$value;
                }
                else{
                    $vs .='OR '.$value.' LIKE :keyword';
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
        var_dump($vs);
        var_dump($sq = $this->conn->prepare("SELECT * FROM $table $vs $ord $l")) ;

        foreach($record as $value){
            if(is_array($value)){
                $sq->bindValue(':'.$value, '%'.$searchword.'%',PDO::PARAM_STR);
            }
        }
       try{

        $sq->execute();
        $result = $sq->fetchAll();

       }catch(PDOException $e){
           $result= $e;

       }


       return $result;





    }

}