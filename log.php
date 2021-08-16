<html>
<head>
    <link href="style1.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image:url('images/reg.jpg');background-repeat:no-repeat;">
        <a><img src="images/wel.png"; id="Homeimage"></a>
     <div class="topnav-right">
        
            <a href="home.php">Home</a>
            <a href="log.php">Log In</a>
           <a href="register.php">Register</a>
            <a href="about_pg.php">About</a> 
      </div>

      <?php

      include "datacon.php";
      $msg="";

         if(isset($_POST['submit']))
         {
            $username=$_POST['username'];
            $password=$_POST['password'];

            $query="SELECT * FROM `user_register` WHERE username='$username' AND password='$password'";

            $result=mysqli_query($connection,$query);
            $row=mysqli_fetch_row($result);

            if($row==FALSE)
            {
    
                echo "Enter valid data";
            }
            else
            {
                header("Location: booking_f.php");
            }
         }
     ?>


    <div class="bg-img">
       
            <h2 style="font-size:4em ;color:black;font-family:monospace;font-weight:bold;text-align:center;">LOGIN</h2>
                <form class="container" method="POST">
                    <div class="font"><b>USERNAME</b></div>
                    <input type="text" placeholder="Username Please" name="username" required>


                    <div class="fontpass"><b>PASSWORD<b></div>
                    <input type="password" placeholder="Enter Password" name="password" required>


                    <input type="submit" class="buttn" name="submit" value="login">
                    <br>
                </form>
    </div>
</body>

</html>