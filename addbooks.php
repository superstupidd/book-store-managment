<?php
include "connection.php";
session_start();

$storeid="";
$bookname = "";
$author="";
$edition="";
$errors=array();

if (isset($_POST['book'])){
$storeid=($_POST['storeid']);
$bookname=($_POST['bookname']);
$author=($_POST['author']);
$edition=($_POST['edition']);


$booksql= "INSERT INTO books (storeid,bookname,author,edition) VALUES ('$storeid','$bookname','$author','$edition')";
$bookresult= mysqli_query($con,$booksql);
if($bookresult){
    $message="your book is added";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<header class="header">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Books</title>
            <h2 class="heading">Bookpod.<h2>
                   <link href="style.css" rel="stylesheet" />
</head>
    <body>
    <div class="addbooks">
          <h2 class="stores">Add Collection</h2>

         
            <form action="addbooks.php" method="POST" >
            <div class="form-group">
                <label class="lable">Store ID:</label>
                <input class="for" type="storeid" placeholder=" storeid" name="storeid">
            </div>

            <div class="form-group">
                <label class="lable">Book Name:</label>
                <input class="for" type="bookname" placeholder=" name" name="bookname">
            </div>
            
            <div class="form-group">
                <label class="lable">author:</label>
                <input class="for" type="author" placeholder=" author" name="author">
            </div>
            
            <div class="form-group">
                <label class="lable">edition:</label>
                <input class="for" type="edition" placeholder=" edition" name="edition">
            </div>
            <button type="book" name="book" class="butnn">ADD</button>
</body>