<?php

define("DB_HOST", "localhost");
define("DB_NAME", "sche_1");
define("DB_USER", "root");
define("DB_PASS", "Pan20110529@");


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$conn) {
    
    echo "Error: Unable to connect to the database.<br>";
    echo "Debugging errno: " . mysqli_connect_errno() . "<br>";
    echo "Debugging error: " . mysqli_connect_error() . "<br>";
    exit;
}