<?php
$hostname = "localhost";
$username = "Busayo";
$password = "busayo22";
$database = "recipe_db";

$db_connect = mysqli_connect($hostname, $username, $password, $database);
if ($db_connect) {
}else {
    echo "Failed" . mysqli_connect_error();
}
?>