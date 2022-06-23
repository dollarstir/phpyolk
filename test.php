<?php

// function createdb()
// {
//     include 'dbt.php'; // sql to create table
//     $sql = 'CREATE TABLE MyGuests (
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         firstname VARCHAR(30) NOT NULL,
//         lastname VARCHAR(30) NOT NULL,
//         email VARCHAR(50),
//         email VARCHAR(50),
//         reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//         )';

//     $db = new db();

//     if ($db->conn->query($sql) === true) {
//         echo 'Table MyGuests created successfully';
//     } else {
//         echo 'Error creating table: '.$db->conn->error;
//     }

//     $db->conn->close();
// }
// createdb();

var_dump(sms('Tucee hub', '0556676471', 'Hello Wolrd'));
