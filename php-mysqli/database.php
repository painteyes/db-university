<?php

define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_PORT', 8889);
define('DB_NAME', 'db_university');

$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if($connection && $connection->connect_error){
    echo 'connection failed' . $connection->connect_error;
    die();
}

?>