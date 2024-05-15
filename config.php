<?php 

$server_name = "localhost";
$user        = "root";
$password    = "";
$database    = "form";
$port        = "3308";

$db_conn = new mysqli($server_name,$user,$password,$database,$port);

// Check connection
if ($db_conn->connect_error) {
    return $db_conn;
}