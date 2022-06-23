<?php

class db
{
    public $conn;

    public function construct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'yolktest';

        // Create connection
        $this->conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$this->conn) {
            die('Connection failed: '.mysqli_connect_error());
        }
    }
}
