<?php

//connection
include "conn.php";

// $sql_code = "INSERT INTO $table_name ($keys) VALUES ($values)";

//insert query
// $sql_code = "INSERT INTO user (name, email, password) VALUES ('Bipin', 'bipin@gmail.com', '123')";

//delete query
// $sql_code = "DELETE FROM user WHERE id='7'";


/**
 * Get Data from database
 */
$sql_code = "SELECT FROM user";
$data = $conn->query($sql_code);