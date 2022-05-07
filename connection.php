<?php

$servername = "localhost";
$username = "root";
$password = "";
$DATABASE = "notes";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
// else{
//   echo "success";
// }

?>
