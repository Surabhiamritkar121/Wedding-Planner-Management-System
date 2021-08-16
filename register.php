<!DOCTYPE html>
<html>
<head>
     <link href="style1.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
<style type="text/css">
    .buttn_reg:hover {
            transform: scale(1.1);
            transition: transform 0.3s;
        }
</style>
<body style="background-image:url('images/reg.jpg');background-repeat:no-repeat;background-size: 99.9% 300% ">
    <a><img src="images/wel.png"; id="Homeimage"></a>
     <div class="topnav-right">
        
            <a href="home.php">Home</a>
            <a href="log.php">Log In</a>
            <a href="about_pg.php">About</a>
            <a href="contact.php">Contact</a>
      </div>

       <?php

       include "datacon.php";
       $msg="";
       
          if(isset($_POST['regbtn']))
          {
             
              $username=$_POST['username'];
              $user_email=$_POST['user_email'];
              $user_phnumber=$_POST['user_phnumber'];
              $password=$_POST['password'];
              $confirm_password=$_POST['confirm_password'];

              if($password==$confirm_password)
              {
                $query="INSERT INTO `user_register`(`username`, `user_email`, `user_phnumber`, `password`, `confirm_password`) 
                VALUES ('$username','$user_email','$user_phnumber','$password','$confirm_password')";
  
                $result=mysqli_query($connection,$query);
  
                if($result==FALSE)
                {
                    echo "<p>error detected".mysqli_error($connection)."</p>";
                }
                else
                {
                    $msg="Successfully Added !!";
                }
              }
              else
              {
                  echo "<script> alert('Enter correct password')  </script> ";
              }
         
              

          }


    ?>
    <div class="bg-img">
            <h1 style="color:black;font-family:monospace;font-weight:bold;"><b>REGISTER HERE!!</b></h1>
                    <?=$msg?>
                <form class="container_reg" method="POST">
                    <div style="text-align: center;"><b>NAME</b></h4>
                    <input type="text" placeholder="ENTER YOUR NAME" name="username" required>
                    
                    <div><b>EMAIL</b><div>
                    <input type="text" placeholder="EMAIL" size="20" class="input" name="user_email" required>

                     <div class="font"><b>PHONE NO.</b></div>
                    <input type="number" placeholder="ENTER YOUR PHONE" class="input" maxlength="10" name="user_phnumber" style="width:108%; height:2.5rem; border-radius:0.5rem;" required>

                    
                        <div class="font"><b>PASSWORD</b></div>
                        <input type="password" placeholder="ENTER PASSWORD" id="txtNewPassword" name="password" required>

                        <div class="font"><b>CONFIRM PASSWORD</b></div>
                        <input type="password" placeholder="CONFIRM PASSWORD" id="txtConfirmPassword" name="confirm_password" required>

                        
                    
                    <br><br>
                    
                    <script>
    //            function checkPasswordMatch() {
    //           var password = $("#txtNewPassword").val();
    //              var confirmPassword = $("#txtConfirmPassword").val();
    //            if (password != confirmPassword)
    //                $("#CheckPasswordMatch").html("Passwords does not match!");
    //           else
    //             $("#CheckPasswordMatch").html("Passwords match.");
    // }
    // $(document).ready(function () {
    //    $("#txtConfirmPassword").keyup(checkPasswordMatch);
    // });
    </script>

                    <button type="submit" class="buttn_reg" name="regbtn">Register</button>
                    <br><br>

                    <button type="Reset" class="buttn_reg" name="clearbtn" >Clear</button>
                </form>
    </div>
</body>

</html>