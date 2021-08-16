<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

<body>
    <section>
<?php
include "datacon.php";

$query="SELECT * FROM `booking_detalis` ";
$result=mysqli_query($connection,$query);

if(isset($_POST['logout']))
{
    header("Location:logout_admin.php");
}

?>
<form method="POST">
<button name="logout">logout</button>
</form>
<table border="5" style="width:50%">
    <thead>
        <th>Sr .No</th>
        <th>User name</th>
        <th>Email address</th>
        <th>Contact no.</th>
        <th>user address</th>
        <th>Function date</th>
        <th>Function name</th>
        <th>venue name</th>
        <th>Cuisine name</th>
        <th>Planner type</th>
    </thead>
    <tbody>
    <?php while($rows=$result->fetch_assoc()) 
          {
        ?>
        <tr>
            <td><?php echo $rows['SR NO.'];?></td>
            <td><?php echo $rows['username'];?></td>
            <td><?php echo $rows['user_email'];?></td>
            <td><?php echo $rows['user_phnumber'];?></td>
            <td><?php echo $rows['user_address'];?></td>
            <td><?php echo $rows['function_date'];?></td>
            <td><?php echo $rows['function_name'];?></td>
            <td><?php echo $rows['venue_name'];?></td>
            <td><?php echo $rows['cuisine_name'];?></td>
            <td><?php echo $rows['planner_type'];?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
          </section>
</body>
</html>