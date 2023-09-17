<?php 

session_start();
$_SESSION['user_id'] = 1 ;

$db =  new PDO('mysql:host=127.0.0.1;dbname=CSRF','root','');

        // Check for a successful connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

?>