<?php
/**
 * using mysqli_connect for database connection
 */
$databaseHost = 'localhost';
$databasePort = '4306'; // port number
$databaseName = 'crud_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, $databasePort);

if(!$mysqli){
    die("Connection failed: " . mysqli_connect_error());
}
?>