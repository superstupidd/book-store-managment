 <?php
include "connection.php";?>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="https://apps.empass.mobi/crm_emptrial/assests/img/be_bl_drk_icon.png">

<title>books</title>
<h2 class="heading">Bookpod.<h2>
<link rel="preconnect" href="https://fonts.gstatic.com" />

<link href="style.css"  rel="stylesheet" />
<body>
<div class="user">
<h4 class="stores">Books are here</h4>
<a class="addstore" type="button" href="addbooks.php">ADD </a>
<?php
$booksql= "SELECT books.bookid,books.bookname, books.author, books.edition FROM books INNER JOIN bookstores ON bookstores.storeid WHERE books.storeid=bookstores.storeid";
$result=mysqli_query($con,$booksql);
if($result){
if ($result->num_rows > 0){
    // output data of each row
    $row = $result->fetch_assoc(); {?>

<div class="rows">
<table >
	<thead>
		<tr>
			<th>id</th>
			<th>Name</th>
            <th >Author</th>
            <th>Edition</th>
		</tr>
	</thead>
        
        <tr>
<tr>
			<td><h4 class="row"><?php echo $row['bookid']; ?></h4></td>
			<td><h4 class="row"><?php echo $row['bookname']; ?></td>
            <td><h5 class="row"><?php echo $row['author']; ?></h5></td>
            <td><h5 class="row"><?php echo $row['edition']; ?></h5></td>
            <td>
			<button action="delete.php" name="delete" type="delete" class="del_btn"  >Delete</button>       
			</td>
            
		</tr>
    </table>
    </div>
    </div>
	<?php 
    }
}
}
    ?>
