<?php


define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "learn");

$conn = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
if( $conn->connect_error ){
    echo "Connection Error";
}