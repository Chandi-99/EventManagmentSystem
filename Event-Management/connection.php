<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "best_events";

$con = new mysqli($servername,$username,$password,$dbname);
if($con->connect_errno){
    echo "Faild to connect to MySQL:" . $con->connect_errno;
    exit();
}
echo "Connected to DB successfully";
$con->close();

?>