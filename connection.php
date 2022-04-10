<?php
$server = 'localhost';
$username = 'root';
$pass = '';
$db="bookpod.";
            

$con=mysqli_connect('localhost','root','','bookpod.');
if(!$con){
    echo"connection failed";
}

?>
