<?php
include('connection.php');
?>
 <html lang="en">
	<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="https://apps.empass.mobi/crm_emptrial/assests/img/be_bl_drk_icon.png">
	
	<title>user</title>
    <h2 class="heading">Bookpod.<h2>
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	
	<link href="style.css"  rel="stylesheet" />
</head>
<body>
<div class="user">
            <h4 class="stores">YOUR STORES ARE HERE</h4>
            <a class="addstore" type="button" href="addstores.php">ADD</a>

            <?php
$stores= "SELECT  storeid,storename,address,phone FROM bookstores ";
$sresult= mysqli_query($con,$stores);
if($sresult){
if($sresult->num_rows>0){
            // output data of each row
            $row = $sresult->fetch_assoc();{?>
            <div class="rows">
                
<table>
	<thead>
		<tr>
			<th>id</th>
			<th>Name</th>
            <th>Address</th>
            <th>Phone</th>
		</tr>
	</thead>
        
        <tr>
                    <td><h4 class="row"> <?php echo $row['storeid']; ?></h4> </td>
                    <td><h4 class="row"> <?php echo $row['storename']; ?></h4> </td>
                    <td><h4 class="row"><?php echo $row['address']; ?></h4></td>
                    <td><h4 class="row"> <?php echo $row['phone']; ?></h4></td>
                    <td>
                    <a href="books.php" class="books" >Books</a>                        </td>
                    <td>
                    <button action="delete.php" name="delete" type="delete" class="del_btn"  >Delete</button>       
                    </td>
                    
                </tr>
            </table>
            </div>
            <?php 
            }
            
}
        }
    ?>
        </div>
      
        </body>


