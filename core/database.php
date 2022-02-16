<?php

class database extends Config
{
    public $conn;

    public function __construct()
    {
        // $this->conn = mysqli_connect('localhost', 'root', '', 'hostel');
        // if (!$this->conn) {
        //     echo 'failed';
        // }

        try {
            $this->conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name.'', ''.$this->db_user.'', ''.$this->db_pass.'');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '<h1 style="color:red;">ERROR: Failed to connect  Database</h1>';
            // var_dump($this->conn);
        }
    }
}
