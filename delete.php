<?php
include('connection.php');


if (isset($_POST['delete'])){
    $storeid=($_POST['storeid']);
    $storename=($_POST['storename']);
    $author=($_POST['author']);
    $edition=($_POST['edition']);
    $storename_check = "SELECT * FROM bookstores WHERE storename = '$storename'";
    $res = mysqli_query($con, $storename_check);
    if(mysqli_num_rows($res) > 0){
       echo '<script> alert( "Email that you have entered is already exist!")</script>';
    }else{

    $storedelete= "DELETE  FROM bookstores ";
    $res = mysqli_query($con, $storedelete);
    if($res){
        echo '<script> alert("you store is deleted")</script>';
    }else{
        echo '<script> alert("something went wrong..!")</script>';
    }
    }
}
?>