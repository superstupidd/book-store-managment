<?php
include "connection.php";
session_start();
 
$storename = "";
$address="";
$phone="";
$errors=array();

if (isset($_POST['add'])){
$storename=($_POST['storename']);
$address=($_POST['address']);
$phone=($_POST['phone']);

$addsql= "INSERT INTO bookstores (storename,address,phone) VALUES ('$storename','$address','$phone')";
$addresult= mysqli_query($con,$addsql);
if($addresult){
    $message="your store is added";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<header class="header">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bookpod.</title>
            <h2 class="heading">Bookpod.<h2>
                   <link href="style.css" rel="stylesheet" />
</head>
    <body>
    <div class="addstore">
          <h3 class="storetitle" >ADD YOUR STORE</h3>

         
            <form action="addstores.php" method="POST" >

            <div class="form-group">
                <label class="lable">Name:</label>
                <input class="for" type="storename" placeholder=" name" name="storename">
            </div>
            
            <div class="form-group">
                <label class="lable">address:</label>
                <input class="for" type="address" placeholder=" address" name="address">
            </div>
            
            <div class="form-group">
                <label class="lable">Phone:</label>
                <input class="for" type="phone" placeholder=" phone" name="phone">
            </div>
            <button type="add" name="add" class="butnn">ADD</button>
        
</div>
<div class="store"><img src="img/store.jpg" alt="photo" ></div>
</body>