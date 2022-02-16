<?php

class Login extends database {

    public function authenticate($table,$target, $conjunction = ''){
        $vs = '';
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
        $ft = $this->conn->prepare("SELECT * FROM $table $vs");
        foreach($target as $value){
            if (is_array($value)) {
                if (count($value) == 3) {
                    $ft->bindValue(':'.$value[0], $value[2]);
                }
            }
        }
        try{
            $ft->execute();
            $row = $ft->rowCount();
            $logs = $ft->fetch();
            if($row >0){
                session_start();
                $_SESSION['user'] = $logs;
                $msg = "loginsuccess";
            }else{
                $msg = 'loginfailed';
            }

        }catch(PDOException $e){

            $msg = 'db error '.$e;

        }

        return $msg;

    }
}