<?php
define('DB_HOST', 'localhost'); 
define('DB_USER', 'root');      
define('DB_PASS', '');          
define('DB_NAME', 'minimed_db'); 

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
   
    die("Error de Conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>