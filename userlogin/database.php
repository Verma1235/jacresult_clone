<?php

$host = getenv("DB_HOST") ?: "localhost";
$user = getenv("DB_USERNAME") ?: "root";
$pass = getenv("DB_PASSWORD") ?: "";
$db   = getenv("DB_DATABASE") ?: "jacresults";
$port = getenv("DB_PORT") ?: 3306;

$conn = mysqli_init(); 

//  Enable SSL (required by TiDB Cloud) 
 mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

mysqli_real_connect(
    $conn,
    $host,
    $user,
    $pass,
    $db,
    $port,
    NULL,
    MYSQLI_CLIENT_SSL
); 

// $conn= mysqli_connect($host, $user, $pass, $db, $port);
// if (!$conn) {
//     die("Connection Failed: " . mysqli_connect_error());
// }

// echo "Connected successfully";

?>