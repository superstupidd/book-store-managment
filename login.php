<?php
include('connection.php');
$email = "";
$password = "";
?>
    <html lang="en">
	<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="https://apps.empass.mobi/crm_emptrial/assests/img/be_bl_drk_icon.png">
	
	<title>login</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	
	<link href="style.css"  rel="stylesheet" />
<body>

    <div class="loginmain">

    <a class="home" href="index.php ">Home </a>

<div class="login">
<div class="fsign"><h2 class="ssign">Login</h2></div>
         
            <form name = "login" action="config.php" method="POST" >
                <div class="loginform">
    
                <label class="lable">Email:</label>
                <input class="for" type="email" placeholder=" email" name="email" required>
            
            
            <div class="form-group">
                <label class="lable">Password:</label>
                <input class="for" type="password" placeholder=" password" name="password"required >
            </div>
            <button type="login" href="#" name="login" class="butnn">Login</button>
            </div>
</body>
