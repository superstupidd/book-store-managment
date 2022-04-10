<?php
include('connection.php');


session_start();
$email = "";
$name = "";
$phone="";
$password="";
$errors=array();

if (isset($_POST['submit'])){
$name=($_POST['name']);
$email=($_POST['email']);
$phone=($_POST['phone']);
$password=($_POST['password']);
$email_check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
       echo '<script> alert( "Email that you have entered is already exist!")</script>';
    }else{

$sql= "INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
$result= mysqli_query($con,$sql);
if($result){
    
   echo '<script> alert("you are registered successfully..!, Now you can login.")</script>';


}else{
    echo("something went wrong..!");
}
    }
}
// login




if (isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];


$query = mysqli_query($con, "SELECT email,password FROM login WHERE email='$email' AND password='$password'");

$result_can = mysqli_query($con,$query);

if($result_can){
    echo"login";
}
while ($row = mysql_fetch_assoc($result_can)) {


    $check_email = $row['email'];
    $check_password = $row['password'];
}
if ($email == $check_email && $password == $check_password) {
    $message = "ok";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: userpage.php");
} else {
    $message = "No";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: login.php");
}
}


// add store

