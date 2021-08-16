<?php

$connection=mysqli_connect("localhost","root","","pro_wed");

if($connection==FALSE)
{
    echo "Connection failed ".mysqli_connect_error();
}

?>