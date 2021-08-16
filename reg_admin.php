<html>
<body>
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

    <?php
    include "datacon.php";
       $msg="";
       
          if(isset($_POST['regbtn']))
          {
             
              $fullname=$_POST['fullname'];
              $admin_username=$_POST['admin_username'];
              $admin_password=$_POST['admin_password'];
              
         
              $query="INSERT INTO `admin_register`(`fullname`, `admin_username`, `admin_password`) 
              VALUES ('$fullname','$admin_username','$admin_password')";

              $result=mysqli_query($connection,$query);

              if($result==FALSE)
              {
                  echo "<p>error detected".mysqli_error($connection)."</p>";
              }
              else
              {
                header("Location: admin.php"); 
                
              }
            
            }
              

            


    ?>
     <div class="bgimgadmin">
            <h5 style="font-family:monospace;font-weight:bold;color:black;font-family:monospace;font-weight:bold;">WELCOME ADMIN</h5>
                <form class="container_regad" method="POST">
                    <div style="text-align: center;"><b>FULL NAME</b></h4>
                    <input type="text" placeholder="ENTER YOUR NAME" name="fullname" required>

                     <div style="text-align: center;"><b>ADMIN USERNAME</b></h4>
                    <input type="text" placeholder="ENTER YOUR NAME" name="admin_username" required>

                     <div class="font"><b>PASSWORD</b></div>
                    <input type="password" placeholder="ENTER PASSWORD" name="admin_password" required>

                    <button type="submit" class="buttn_regad" name="regbtn">Register</button>
                    <br><br>

                    
                </form>
    </div>
</body>
</html>
