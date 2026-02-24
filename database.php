<?php
// $conn=mysqli_connect("localhost","root","","jacresults");



$host = getenv("DB_HOST") ?: "localhost";
$user = getenv("DB_USER") ?: "root";
$pass = getenv("DB_PASS") ?: "";
$db = getenv("DB_NAME") ?: "jacresults";
$port = getenv("DB_PORT") ?: 3306;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}




// if(!$conn){
//     echo"not connect";
    
// }
// else{
//     echo"connected";
// }

?>