<?php
$server ="localhost";
$username="root";
$password="";
$database="users98";

$conn =mysqli_connect($server, $username, $password, $database);
if(!$conn){
//     echo "Successfully Connected";
// }
// else{
    die("Error" . mysqli_connect_error());
}
?>