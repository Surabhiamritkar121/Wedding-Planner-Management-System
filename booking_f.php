<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head><title>Booking</title>
<style>
.box {
        width: 50%;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: #1c87c9;
        background-color: #eee;
        border-radius: 5px;
        margin-top:0.5rem;
        
      }
   .buttn {
            background-color: #cfed82;
            color: black;
           padding: 0.5% 0.5%;
           border-radius: 10%;
            border: black;
            cursor: pointer;
            width: 30%;
        }
        .buttn:hover {
        
            transform: scale(1.1);
            transition: transform 0.3s;
            background-color: #eb91a3; 
            //color: white;
        }

       /* .butn{
              
               background-color: #cfed82;
               color: black;
               padding: 0.5% 0.5%;
               border-radius: 10%;
               border: black;
               cursor: pointer;
               width: 30%;   
        }*/
        .container{      
    margin-top:35%;
    height:145%;
    width: 30%;
    background: rgba(2,2,2, .5);
    position: absolute;
  
    
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 0 5%;
}
.topnav-right {
  float: right;
  overflow: hidden;
  display:inline;
  font-size:150%;
  padding: 0.5%;
  background-color:#EA1A30; 
  color:blue;
  border-radius: 0.5em;
  margin-top: 0.5%;
  margin-bottom: 5%;
  margin-right: 1%;
}
.Homeimage {
 margin-left: 20%;
height: 50%;
width: 80%;
padding-left: 50%;
padding-top: 20%;
display: block;
text-align: left;
border-radius: 20%;
}
a{ 
 text-decoration:none;color:#f2f2f2;
  float: left;
  padding: 40%;
  text-align: center;
  padding: 14px 16px; 
  }
/*a:hover
{
    color:#f2f2f2;
    //background-color:white;
  font-size:150%;

}*/
</style>
</head>


<body style="background-image:url('images/wedd2.jpg');background-repeat:no-repeat;background-size: 100% 900% " >
<a><img src="images/wel.png"; id="Homeimage"></a>


<?php

include "datacon.php";
$msg="";

   if(isset($_POST['booknow']))
   {
      
       $username=$_POST['username'];
       $user_email=$_POST['user_email'];
       $user_phnumber=$_POST['user_phnumber'];
       $user_address=$_POST['user_address'];
       $function_date=$_POST['function_date'];
       $function_name=implode(',', $_POST['function_name']);
       $venue_name=$_POST['venue_name'];
       $cuisine_name=implode(',', $_POST['cuisine_name']);
       $planner_type=implode(',', $_POST['planner_type']);

       $query="INSERT INTO `booking_detalis`(`username`, `user_email`, `user_phnumber`, `user_address`, `function_date`, `function_name`, `venue_name`, `cuisine_name`, `planner_type`) 
              VALUES ('$username','$user_email','$user_phnumber','$user_address','$function_date','$function_name','$venue_name','$cuisine_name','$planner_type')";

       if(empty($_POST["function_name"]))
       {
         echo'<p>Please select atleast one function name..!</p>';
       }
       else
       {
          $msg="name selected";
       }

       if(empty($_POST["venue_name"]))
       {
         echo'<p>Please select atleast one venue_name..!</p>';
       }
       else
       {
          $msg="venue selected";
       }

       if(empty($_POST["cuisine_name"]))
       {
         echo'<p>Please select atleast one cuisine_name..!';
       }
       else
       {
          $msg="cuisine selected";
       }

       if(empty($_POST["planner_type"]))
       {
         echo'<p>Please select atleast one planner_type..!</p>';
       }
       else
       {
          $msg="Planner selected";
       }

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

   if(isset($_POST['logout']))
  {
      header("Location: user_logout.php");
  }

?>


       <h1 style="font-size:300% ;color:black;font-family:monospace;font-style:italic;font-weight:bold;text-align:center;margin-bottom:50px;margin-right:300px"> Bring Your Imagination Into The Real!!  </h1>
        <?=$msg?> 
       <left>
       <form class="container" style="color:white;font-size:1.5rem" method="POST">
   <br>



                   <b>NAME :</b> <br>
                    <input type="text" placeholder="ENTER YOUR NAME" name="username" style="border-radius:0.5rem; width:25rem; height:1.8rem;margin-top:0.5rem;" required >
                    <br><br>
                    
                    <b>EMAIL :</b><br>
                    <input type="text" placeholder="EMAIL ID"  name="user_email" size="20" class="input" style="border-radius:0.5rem; width:25rem; height:1.8rem;margin-top:0.5rem;">
                    <br><br>

                    <b>CONTACT NO. :</b><br>
                    <input type="text" placeholder="CONTACT NO."  name="user_phnumber" maxlength="10" size="10"class="input" style="border-radius:0.5rem; width:25rem; height:1.8rem;margin-top:0.5rem;" required>
                    <br><br>

                    <b>ADDRESS :</b><br>
                    <input type="text" placeholder="ADDRESS"  name="user_address" size="20" class="input" style="border-radius:0.5rem; width:25rem; height:1.8rem;margin-top:0.5rem;">
                    <br><br>

                    <b><label for="Function_date" ><b>FUNCTION DATE:</b></label><br></b>
                    <input type="date" id="Function_date" name="function_date" class="box">
                    <br><br>

                    <label for="Function" ><b>CHOOSE YOUR FUNCTION:</b></label><br>
                       <form action="" method="post">
                     <input type="checkbox" name="function_name[]" value="WEDDING" /> WEDDING
                     <input type="checkbox" name="function_name[]" value="HALDI" /> HALDI<br>
                     <input type="checkbox" name="function_name[]" value="ENGAGEMENT" /> ENGAGEMENT
                     <input type="checkbox" name="function_name[]" value="SANGEET" /> SANGEET <br>
                     <input type="checkbox" name="function_name[]" value="MEHENDI" /> MEHENDI 
<br><br>

                    
                    <label for="Venue"><b>VENUE:</b></label><br>
                    
                    <form action="" method="post">
                    <input type="radio" name="venue_name" value="NASHIK" /> NASHIK
                    <input type="radio" name="venue_name" value="PUNE" /> PUNE<br>
                    <input type="radio" name="venue_name" value="MUMBAI" />MUMBAI
                   <input type="radio" name="venue_name" value="AURANGABAD" />AURANGABAD
<br><br>

                      <label for=""><b>CUISINES:</b></label><br>
                      <input type="checkbox" name="cuisine_name[]" value="Indian Cuisine" /> Indian Cuisine
                      <input type="checkbox" name="cuisine_name[]" value="Italian Cuisine" /> Italian Cuisine<BR>
                      <input type="checkbox" name="cuisine_name[]" value="Thai Cuisine" /> Thai Cuisine
                      <input type="checkbox" name="cuisine_name[]" value="Chinese Cuisine" /> Chinese Cuisine
<br><br>

                      <label for="Planner"><b>PLANNER:</b></label><br>
                      <input type="checkbox" name="planner_type[]" value="VENUE PLANNER" /> VENUE PLANNER<BR>
                      <input type="checkbox" name="planner_type[]" value="DECOR PLANNER" /> DECOR PLANNER<BR>
                     <input type="checkbox" name="planner_type[]" value="CATERING PLANNER" /> CATERING PLANNER<BR>
                     <input type="checkbox" name="planner_type[]" value=" EVENT PLANNER" /> EVENT PLANNER
  

<br><br>

                     <button type="submit" class="buttn" name="booknow"><h3>BOOK NOW</h3></button>

                    <input type="submit" name="logout" onclick="window.location.href='user_logout.php';"  value="Logout" style="float:right; margin-right:-500px; margin-top: -1060px; width: 20%; background-color: #cfed82; height: 4%; border-radius: 15%; font-size:1em"> -->
                     <!-- style="background-color: #cfed82; color: black; padding: 30% 90%; margin-left: 500%; border-radius: 10%; border: black; cursor: pointer; width: 270%;" -->
                   <!-- background-color: #cfed82;
                    margin-bottom: 50%;
                    margin-left: 600%;
                    color: black;
                    padding: 50% 90%;
                    border-radius: 150%;
                    border: black;
                    cursor: pointer;
                    width: 300%; >-->

                    
           
</form>
</left>
</body>