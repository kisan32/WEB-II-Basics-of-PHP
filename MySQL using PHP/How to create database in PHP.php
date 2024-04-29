<?php
$ser="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($ser,$user,$pass);
$sql="CREATE database Saptagandaki";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "Database has been created sucessfully";
}
else
{
    die("Error on Creating Database");
}

?>