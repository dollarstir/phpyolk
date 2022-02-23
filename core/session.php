<?php
class Session extends Yolk {

    public function authpagechecker($isloggedinlocation=""){
        session_start();
        if(isset($_SESSION['user'])){
            $this->goto($isloggedinlocation);

        }
        else{
            // $this->goto($notloginlocation);
        }

    }

    public function mainchecker($notloginlocation=""){
        session_start();
        if(isset($_SESSION['user'])){
            // $this->goto($isloggedinlocation);

        }
        else{
            $this->goto($notloginlocation);
        }
    }
}