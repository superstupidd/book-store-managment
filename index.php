<?php
include("config.php");
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
    <body class="background">
      
        <nav class="navbar background">
         
            <ul class="navlist">
                <div class="logo"><img src="img/imagew.jpeg" alt="image"></div>



                <li><a href="#Home"> Home</a></li>
                <li ><a href="#About">About</a></li>
                <li ><a href="#Contact">Contact</a></li>
                <li ><a href=" #Sign">signup </a></li>
                <li ><a href="login.php ">Login </a></li>
            </ul>
            
            <a id=Home><div class="rightbar">
                <input class="form" type="search" placeholder="search...">
                <button class="butnn">search</button>
            </div>
        </nav>
    </header>
<div class="second">
        <section class= "background firstsection">
         <div class="box">
            <div class="firsthalf">
                
               <p class="para">'A man is like a novel: until the very last page <br>you don't know how it will end. <br>Otherwise it wouldn't even be worth reading.'<br>
-Yevgeny Zamyatin</p>
                    
                </div>
            </div>
            <div class="secondhalf"><img src="img/imag.jpeg" alt="photo" ></div>
                </div>

                <div class="first">
        <section class= "background firstsection">
         <div class="box">
            <div class="firsthalff">
                
               <p class="para">'Forgiveness condones nothing, but it does cast off the chains of anger,<br> judgment, resentment, denial, and pain that choke growth.<br> In this way, it allows for life, for freedom'.<br>-Tayari Jones</p>
                    
                </div>
            </div>
            <div class="secondhalff"><img src="img/images.jpeg" alt="photo" ></div>
                </div>
                <div class="third">
                <div class="secondhalfff"><img src="img/picc.jpg" alt="photo" ></div>
    <div class="first">
    <section class= "background firstsection">
     <div class="box">
        <div class="firsthalfff">
            <p class="para">'Be quick, but don't hurry.'<br>
            -John Wooden</p>
           </div>
</a>
    <a id="About">    
                <div class="about">
 <h3 class="uss">Books can teach us so many things. Sure, they can relay interesting facts and information—but some of the best pieces of literature also offer wisdom and insights from their authors.<br> In that way, certain books become friends that we can consult throughout our lives for guidance and advice.<br> Just think about the number of books you have on your bookshelf that you’re saving to re-read at a later date<br>
Ahead, we’ve found the best book quotes that will make you stop and think. No matter which genres are your favorite—whether you consider yourself a history buff, a science-fiction nerd, or memoir fan—there are tons of<br> books for readers of all ages that offer profound advice within their pages. </h3>
                 
            </div>
</a>
            <a id="Contact">
                <div class=contact>

                    <h2 class="us">Contact Us</h2>
                    <h2 class="phone">Phone:</h2>
                    <h3 class="num">9058544498<h3>
                        <h2 class="phone">Email:<h2>
                            <h3 class="num"><a href="email" >harshchauhan327@gmail.com</a><h3>
                </div>
</a>
<a id="Sign">        
        <div class="sign">
          <div class="fsign"><h2 class="ssign">Sign Up</h2></div>

         
            <form action="config.php" method="POST" >

            <div class="form-group">
                <label class="lable">Name:</label>
                <input class="for" type="name" placeholder=" name" name="name">
            </div>
            
            <div class="form-group">
                <label class="lable">Email:</label>
                <input class="for" type="email" placeholder=" email" name="email">
            </div>
            
            <div class="form-group">
                <label class="lable">Phone:</label>
                <input class="for" type="phone" placeholder=" phone" name="phone">
            </div>

            <div class="form-group">
                <label class="lable">Password:</label>
                <input class="for" type="password" placeholder=" password" name="password">
            </div>
            
                <button type="submit" name="submit"class="butnn">Submit</button>
            
            
        </form>
</div>
</a>

<script
    src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script
    src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/pooper.min.cs"></script>
</script>
<script
    src="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" >
</script>
    </body>
    <footer class="foot">Copyright  2021 all rights reserved </footer>
</html>
