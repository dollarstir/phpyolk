<?php

class Sel extends database
{
    public function select($table, $target, $conjunction = '',$limit='')
    {
        $vs = '';
        // $allval = []
        foreach ($target as $value) {
            if (is_array($value)) {
                if (count($value) == 3) {
                    $colunmname = $value[0];
                    $operator = $value[1];
                    $colunmvalue = $value[2];
                    if ($vs == '') {
                        $vs .= 'WHERE '.$colunmname.' '.$operator.' :'.$colunmname;
                    } else {
                        $vs .= " $conjunction $colunmname $operator :$colunmname";
                    }
                }
            }
        }
        // echo "SELECT * FROM $table $vs $limit";
        // $vs = rtrim($vs, $conjunction);
        // echo $vs;
        if($limit == ''){
            $sel = $this->conn->prepare("SELECT * FROM $table $vs");
        }
        else{
            $sel = $this->conn->prepare("SELECT * FROM $table $vs $limit");
        }
        foreach ($target as $value) {
            if (is_array($value)) {
                if (count($value) == 3) {
                    $sel->bindValue(':'.$value[0], $value[2]);
                }
            }
        }
        try{

            $sel->execute();
            
            return $sel->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e;
        }
    }

    public function getall($table, $order = '',$limit='')
    {
        
        if($limit == ''){
            $sel = $this->conn->prepare("SELECT * FROM $table $order");
        }
        else{
            $sel = $this->conn->prepare("SELECT * FROM $table $order $limit");
        }
        $sel->execute();

        return $sel->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
